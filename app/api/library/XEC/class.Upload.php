<?php
class upload_mime_types
{
	public static $types = array(
		"image/jpeg" => array("jpg", "jpeg"),
		"image/png" => array("png"),
		"images/gif" => array("gif")
	);
	
	public static function get_mime($format)
	{
		$format = strtolower(strip_tags($format));
		foreach( self::$types as $mime => $formats )
		{
			$formats = array_flip($formats);
			if( isset($formats[$format]) )
			{
				return $mime;
			}
		}
	}
	
	public static function allowed( $mime_type, $return_formats = true)
	{
		$return = array("allowed" => false);
		if( isset(self::$types[$mime_type]) )
		{
			$return["allowed"] = true;
		}
		if( $return_formats == true )
		{
			$return["formats"] = array();
			if($return["allowed"] == true)
			{
				$return["formats"] = self::$types[$mime_type];
			}
			return $return;
		}
		else
		{
			return $return["allowed"];
		}
	}
}


final class Upload
{
	private $file;
	private $format = null;
	private $has_erros = false;
	private $errors = array();
	private $store_name = null;
	private $file_var = "files";
	
	private $image_formats = array(
		"jpeg" => true, "jpg" => true, "gif" => true, "png" => true,
		"avi" => true, "mp4" => true, "flv" => true, "f4v" => true, "mov" => true
	);
	
	public static $error_codes = array(
		// php core errors
		0 => "UPLOAD_ERR_OK",
		1 => "UPLOAD_ERR_INI_SIZE",
		2 => "UPLOAD_ERR_FORM_SIZE",
		3 => "UPLOAD_ERR_PARTIAL",
		4 => "UPLOAD_ERR_NO_FILE",
		5 => "UPLOAD_ERR_NO_TMP_DIR",
		6 => "UPLOAD_ERR_CANT_WRITE",
		7 => "UPLOAD_ERR_EXTENSION",
		
		// custom errors
		9 => "FILE_UPLOAD_FILE_SIZE",
		10 => "FILE_UPLOAD_FORMATS",
		11 => "FILE_UPLOAD_NOT_ALLOWED_FORMAT",
		12 => "FILE_UPLOAD_UPLOAD_DIR",
		13 => "FILE_UPLOAD_AUTO_CREATE_UPLOAD_DIR",
		14 => "FILE_UPLOAD_COPY_FILE",
		
		15 => "URL_UPLOAD_NO_URL",
		16 => "URL_UPLOAD_ERROR_URL",
		17 => "URL_UPLOAD_FILE_CREATE_FAILED",
		18 => "URL_UPLOAD_DETECT_MIME",
		
		19 => "BITMAP_NOT_ALLOWED_FORMAT",
		20 => "BITMAP_UNABLE_TO_SAVE",
		21 => "BITMAP_INVALID_BITMAPDATA",
		
		22 => "URL_UPLOAD_INVALID_URL_FORMAT",
		
		23 => "ERROR_INSERT",
		24 => "UNABLE_TO_COPY_FILE"
	);
	
	private $default_config = array("upload_url" =>  "uploads/");
	
	private $config = array(
		"max_uploads" => 1,
		"upload_type" => "file",
		"upload_url" => null,
		"allowed_update" => true,
		"allowed_types" => array("jpg", "jpeg", "png", "gif"),
		"max_upload_size" => "system",
		"store_name" => "system",
		"upload_root" =>  "uploads/",
		"upload_url" =>  "uploads/",
		"auto_create_dirs" => true,
		"check_mime_type" => true,
		
		"bitmap_width" => 400,
		"bitmap_height" => 300,
		"bitmap_format" => "jpg",
		"bitmap_quality" => 100,
		"bitmap_data" => null
	);
	
	public function __construct( $config = array() )
	{
		$this->setConfig($config);
		
		$this->config['allowed_types'] = array_flip($this->config['allowed_types']);
		$this->config['upload_root'] = ROOT . $this->config['upload_root'];
		if( $this->config['upload_type'] != "url" )
		{
			$this->config['upload_url'] = $this->config['upload_root'];
		}
		else
		{
			if( $this->default_config['upload_url'] == $this->config['upload_url'])
			{
				$this->config['upload_url'] = null;
			}
		}
		$this->file = $_FILES[$this->file_var];
		
		if( $this->config['store_name'] == "system" )
		{
			$this->store_name = time().rand(1, 999999);
		}
		else
		{
			$this->store_name = $this->config['store_name'];
		}
		
		if( $this->config["max_upload_size"] == "system" )
		{
			$this->config["max_upload_size"] = strtoupper(( ini_get("upload_max_filesize") > ini_get("max_post_size") )?ini_get("upload_max_filesize"):ini_get("max_post_size"));
			$size = str_replace(intval($this->config["max_upload_size"]), "", $this->config["max_upload_size"]);
			if($size == "M")
			{
				$this->config["max_upload_size"] = $this->config["max_upload_size"] * 1048576;
			}
		}
	}
	
	public function test_form()
	{
		$d = '';
		$d .= '<form action="" method="post" enctype="multipart/form-data">';
		if( $this->config['upload_type'] == "file" )
		{
			$d .= '<input type="file" name="'.$this->file_var.'" /><input type="submit" value="TEST UPLOAD : FILE" />';
		}
		elseif( $this->config['upload_type'] == "url" )
		{
			$d .= '<input type="text" name="'.$this->file_var.'" /><input type="submit" value="TEST UPLOAD : URL" />';
		}
		$d .= '</form>';
		$d .= '';
		return $d;
	}
	
	public function set_error( $error )
	{
		//array_push($this->errors, $error);
		$this->errors[$error] = self::$error_codes[$error];
		$this->has_erros = true;
	}
	
	public function process()
	{
		$status = array("status" => false);
		if( $this->config['upload_type'] == "file" )
		{
			$status = $this->file_upload();
		}
		elseif( $this->config['upload_type'] == "url" )
		{
			$status = $this->url_upload();
		}
		elseif(  $this->config['upload_type'] == "bitmap"  )
		{
			$status = $this->bitmap_upload();
		}
		return $status;
	}
	
	private function bitmap_upload()
	{
		$this->config['bitmap_format'] = strtolower($this->config['bitmap_format']);
		if( !isset($this->image_formats[$this->config['bitmap_format']]) )
		{
			$this->set_error(19);
		}
		else
		{
				$this->format = $this->config['bitmap_format'];
				$destination = $this->destinationPath();
				$jpg = $GLOBALS["HTTP_RAW_POST_DATA"];
				$create_status = file_put_contents($destination, $jpg);
				
				
				/*
				 if( isset($_POST[$this->file_var]) && $_POST[$this->file_var] != "" )
			{
				$this->config['bitmap_data'] = strip_tags($_POST[$this->file_var]);
			}
				 
				 if( $this->config['bitmap_data'] == null )
				{
					$this->set_error(21);
				}
				else
				{
				 
				$temp_img = imagecreatetruecolor($this->config['bitmap_width'], $this->config['bitmap_height']);
				imagefill($temp_img, 0, 0, 0xFFFFFF);
		
				$rows = 0;
				$cols = 0;
		
				$data_row = explode("|", $this->config['bitmap_data']);
				for($rows = 0; $rows < $this->config['bitmap_height']; $rows++)
				{
					for($cols = 0; $cols < $this->config['bitmap_width']; $cols++)
					{
						$value = $data_row[($rows*$this->config['bitmap_width'])+$cols];
						if($value != "")
						{
							$hex = $value;
							while(strlen($hex) < 6)
							{
								$hex = "0" . $hex;
							}
							$r = hexdec(substr($hex, 0, 2));
							$g = hexdec(substr($hex, 2, 2));
							$b = hexdec(substr($hex, 4, 2));
							$test = imagecolorallocate($temp_img, $r, $g, $b);
							imagesetpixel($temp_img, $cols, $rows, $test);
						}
					}
				}
				$create_status = false;
				switch ( $this->config['bitmap_format'] )
				{
					case "jpg":
					case "jpeg":
						$create_status = imagejpeg($temp_img, $destination, $this->config['bitmap_quality']);
					break;
					case "png":
						$create_status = imagepng($temp_img, $destination, $this->config['bitmap_quality']);
					break;
					case "gif":
						$create_status = imagegif($temp_img, $destination);
					break;
				}
			}
			*/
			if( $create_status != true  )
			{// error occured
				$this->set_error(20);
			}
			else
			{
				return $this->returnOK();
			}
		}
		return $this->returnError();
	}

	private function url_upload()
	{
		if( $this->config['upload_url'] == null )
		{
			if( !isset($_POST[$this->file_var]) && !isset($_GET[$this->file_var]))
			{
				$this->set_error(15);
			}
			else
			{
				$this->config['upload_url'] =  strip_tags( ( !isset($_POST[$this->file_var]) )?$_GET[$this->file_var]:$_POST[$this->file_var] );
			}
			
			if( $this->config['upload_url'] == "")
			{
				$this->set_error(15);
			}
		}
		
		if( $this->has_erros == false )
		{
			preg_match('@^(?:http://)?([^/]+)@i', $this->config['upload_url'], $matches);
			if( count($matches) == 0 )
			{
				$this->set_error(22);
			}
			elseif( $headers = get_headers( $this->config['upload_url'] ) )
			{
				
				preg_match('/^HTTP\/\d\.\d\s+(200|301|302)/', $headers[0], $match);
				if(!isset($match[0]))
				{
					$this->set_error(16);	
				}
				else
				{
					$send_type = null;
					foreach($headers as $cnt => $row)
					{
						if( strstr($row,"Content-Type: ") )
						{
							$send_type = str_replace("Content-Type: ", "", $row);
						}
					}
					if( $send_type != null)
					{
						$formats = upload_mime_types::allowed($send_type);
						if( isset($formats['formats']) )
						{
							$formats['formats'] = array_flip($formats['formats']);
							foreach( $this->config['allowed_types'] as $ext => $cnt )
							{
								if( isset($formats['formats'][$ext]) && $this->format == null)
								{
									$this->format = $ext;
								}
							}
						}
						else
						{
							$this->set_error(11);
						}
					}
					else
					{
						$format = $this->getFormat($this->config['upload_url']);
					
						if( isset($this->config['allowed_types'][$format]) )
						{
							$this->format = $format;
						}
						else
						{
							$this->set_error(18);	
						}
					}
				}
			}
			else
			{
				$this->set_error(16);
			}
			
			if( $this->has_erros == false )
			{
				$this->checkRoot();
			}
			
			if( $this->has_erros == false )
			{
				$destination = $this->destinationPath();
				
				$contents = file_get_contents($this->config['upload_url']);
	
				if( $fp = fopen($destination, "w+"))
				{
					fwrite($fp, $contents);
					fclose($fp);
					return $this->returnOK();
				}
				else
				{
					$this->set_error(17);
				}
			}
		}
		return $this->returnError();
	}
	
	private function file_upload()
	{
		if( $this->file['error'] > 0  )
		{// PHP error
			$this->set_error($this->file['error']);
			
		}
		else
		{
			if( $this->file['size'] > $this->config["max_upload_size"] )
			{// file bigger then allowed
				$this->set_error(9);
			}
			else
			{
				if( $this->file['size'] > $this->config["max_upload_size"] )
				{// file bigger then allowed
					$this->set_error(9);
				}
				else
				{
					$filename_format = $this->getFormat($this->file['name']);
					// ( isset($this->file['type']) && upload_mime_types::get_mime($filename_format) != $this->file['type']  )
					if( $filename_format=="")
					{
						$this->set_error(10);
					}
					else
					{
						$DISABLE_MIME = true;
						// if( !isset($this->config['allowed_types'][$filename_format])  && $DISABLE_MIME == FALSE)
						if( !isset($this->config['allowed_types'][$filename_format]) )
						{
							$this->set_error(11);
						}
						else
						{
							$this->format = $filename_format;
							$this->checkRoot();
							
							if( $this->has_erros == false)
							{
								$destination = $this->destinationPath();
								
								if(!copy($this->file['tmp_name'], $destination ) )
								{
									$this->set_error( 14 );
								}	
								else
								{
									return $this->returnOK();
								}
							}
						}
					}
				}
			}
		}
		return $this->returnError();
	}
	
	private function returnOK()
	{
		return array("status" => true, "filename" => $this->store_name, "path" => $this->config['upload_url'], "fullpath" => $this->config['upload_url'] . $this->store_name );
	}
	
	private function returnError()
	{
		return array("status" => false, "errors" => $this->errors);;
	}
	
	private function destinationPath( )
	{
		if( $this->config['store_name'] != "system" )
		{
			$this->store_name = $this->store_name . "." . $this->format;
			return $this->config['upload_root'] . $this->store_name;
		}
		else
		{
			$this->store_name = $this->store_name . "." . $this->format;
			return $this->config['upload_root'] . $this->store_name;
		}
	}
	
	private function setConfig($config = array())
	{
		foreach($this->config as $key => $value)
		{
			if( isset($config[$key]) )
			{
				$this->config[$key] = $config[$key];
			}
		}
	}
	
	private function checkRoot()
	{
		if( !is_dir($this->config['upload_root']) )
		{
			if( $this->config['auto_create_dirs'] == true )
			{
				if( !mkdir($this->config['upload_root'], 0777, true) )
				{
					$this->set_error(13);
				}
			}
			else
			{
				$this->set_error(12);
			}
		}
	}
	
	private function getFormat($filename = null, $lowercase = true )
	{
		$info = pathinfo($filename);
		if(!isset($info['extension']))
		{
			$info['extension'] = substr($info['basename'], strrpos($info['basename'], '.'));
		}
		return ($lowercase)?strtolower($info['extension']):$info['extension'];
	}
	
	########################################################
	/* YOUTUBE RELATED CODE */
	########################################################
		
	public function getMimeType($file)
	{
		require_once('MIME/Type.php');
		
		return MIME_Type::autoDetect($file);
	}

	public function getFileInfo($file_id)
	{
        global $db;

		$file =  $db->getRow("SELECT * FROM `uploads` WHERE `id` = ".(int) $file_id."");
		
		if(!PEAR::isError($file) && $file['id'] > 0)
		{
			$file['type'] = strtolower(strrchr($file['file_name'],'.'));
			$file['path'] = UPLOADS.$file['file_name'];
			$file['mime'] = self::getMimeType($file['path']);
			
			return $file;
		}
		
        return false;
    }

	public function getYouTubeID($file_id)
	{
		global $db;
		
		$id = $db->getOne("SELECT `youtube_id` FROM `uploads` WHERE `id` = ".(int) $file_id."");
		
		if(!PEAR::isError($id) && $id != ''){
			return $id;
		}
		
		return false;
	}
	
	public function getUploadID($youtube_id)
	{
		global $db;
		
		$id = $db->getOne("SELECT `id` FROM `uploads` WHERE `youtube_id` = '".mres($youtube_id)."'");
		
		if(!PEAR::isError($id) && $id != ''){
			return $id;
		}
		
		return false;
	}
	
	public function setVideoStatus($file_id, $status=1, $message='')
	{
		global $db;
		
		$set = $db->exec("UPDATE `uploads` SET `youtube_status` = ".(int) $status.", `youtube_status_message` = '".mres($message)."' WHERE `id` = ".(int) $file_id."");
		
		if(!PEAR::isError($set)){
			return true;
		}
		
		return false;
	}
	
    public function youTubeSuccess($file_id, $youTubeVideoID)
    {
        global $db;
		
		$updt = $db->exec("UPDATE `uploads` SET `youtube_id` = '".$youTubeVideoID."', `youtube_status` = 2 WHERE `id` = ".(int) $file_id."");
		
        if(!PEAR::isError($updt) && !PEAR::isError($file)){
            //@unlink(UPLOADS.$file['file_name']);
        }
    }
	
    public function deleteYouTubeVideo($file_id)
    {
        global $db;
		
		$file = $db->getRow("SELECT * FROM `uploads` WHERE `id` = ".(int) $file_id."");
		
        if(!PEAR::isError($file) && $file['id'] > 0)
		{
           $del = @unlink(UPLOADS.$file['file_name']);
		   
		   if(!PEAR::isError($del))
		   {
				$db->exec("DELETE FROM `uploads` WHERE `id` = ".(int) $file_id."");   
		   }
        }
    }
}
?>