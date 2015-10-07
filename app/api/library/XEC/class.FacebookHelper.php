<?php
final class FacebookHelper
{
	public $api;
	public $locale 			= 'en_US';
	public $user			= NULL;
	public $signed			= NULL;
	public $session			= NULL;
	public $facebook		= NULL;
	public $requests		= array();
	public $error			= NULL;
	public $needPermissions = false;
	
	public function __construct($api)
	{
		global $tpl, $navrequest, $uriParser;
		
		$needPermissions = $api['prelike'] && (!in_array(current($navrequest), array('tab', 'admin', 'cms')) && $uriParser['isDirect'] == 0);
		
		// Allow FB Robot!
		if(preg_match("/facebook/i", $_SERVER['HTTP_USER_AGENT'])){
			$needPermissions = false;	
		}
		
		$this->api = $api;
		$this->needPermissions = $needPermissions;
		
		$fbInit['appId']  = $api['appid'];
		$fbInit['secret'] = $api['secret'];
		$fbInit['cookie'] = true;
		
		try {
			$this->facebook = new Facebook($fbInit);
			
			// set token after JS login
			if($_REQUEST['setAccessTokenTo'] != ''){
				$this->facebook->setAccessToken($_REQUEST['setAccessTokenTo']);	
			}
			
			// try cleanup
			$this->signed 	= $this->facebook->getSignedRequest();
			$this->locale 	= $this->signed['user']['locale'];
			
			// try get some user details
			$this->session = $this->facebook->getUser();
			
			// redirect if not liked first
			if(!$this->hasLiked() && $needPermissions)
			{
				if(((int) $_GET['rttp'] == 1 || $_GET['fb_comment_id'] != '') && !$api['canvas']){
					$_SESSION['FB_REQUEST_URI'] = $_SERVER['REQUEST_URI'];
				}
				
				//Common::redirect(($api['canvas'] ? $api['canvas'] : $api['tab']), 'parent', true);
			}
			
			
			// user has granted permissions
			if($this->session)
			{
				$this->user 	= $this->facebook->api('/me?fields=id,email,birthday,location,name,first_name,last_name,link,gender,timezone,locale,picture,relationship_status,significant_other&type=square');
				$this->locale 	= $this->user['locale'];
				$this->requests = $this->getRequests();
			}
			else {
				if($needPermissions){
					self::login();
				}
			}
		} catch (Exception $e) {
			$this->error = $e;
		}
	}
	
	public function sendNotifi($msg){
		global $api;
		$token_url =    "https://graph.facebook.com/oauth/access_token?" .
        				"client_id=" . $api['appid'] .
            			"&client_secret=" . $api['secret'] .
            			"&grant_type=client_credentials";
		$app_token = file_get_contents($token_url);
		$app_token = str_replace("access_token=", "", $app_token);
		
		$data = array(
		    'href'=> $api['tab'],
		    'access_token'=> $app_token,
		    'template'=> $msg
		);
		try {
		   $res = $this->facebook->api('/10202083747124390/notifications', 'post', $data);
		
		} catch (FacebookApiException $e) {
		    var_dump($e);
		}
		return $res; 
	}
	
	public function login()
	{
		Common::redirect(($this->api['canvas'] ? $this->api['canvas'] : $this->api['tab']), 'facebook', $this->api);
	}
	
	public function getAccessToken()
	{
		$token = $this->facebook->getAccessToken();
		return $token;
	}
	
	public function getUser()
	{
		return $this->user;
	}
	
	public function getUserData($key, $fql=false)
	{
		return ($this->session && $this->user ? $this->user[$key] : false);
	}
	
	public function hasLiked($key='pageid', $dbg=false)
	{
		global $api;
		
		
		try {
			// non approved app - hack 1
			if(isset($this->signed['page']['id']))
			{
				if($this->signed['page']['id'] == $api[$key])
				{
					$liked = (bool) $this->signed['page']['liked'];
					
					if($liked){
						$_SESSION['hasLikedPage'] = true;
					}
					else {
						unset($_SESSION['hasLikedPage']);
					}
					
					return (bool) $this->signed['page']['liked'];
				}
			}
			
			// approved app
			if($this->session)
			{
				$likes = $this->facebook->api('/me/likes?access_token='.$this->getAccessToken());
				
				if(isset($likes['data']) && sizeof($likes['data']) > 0)
				{
					unset($_SESSION['hasLikedPage']);
					
					foreach($likes['data'] as $like){
						if($like['id'] == $api[$key]){
							$_SESSION['hasLikedPage'] = true;
							return true;
						}
					}
				}
			}
		}
		catch(Exception $e){
			$this->error = $e;	
		}
		
		// FUCK FACEBOOK!
		if(isset($_SESSION['hasLikedPage']) && $_SESSION['hasLikedPage']){
			return true;	
		}
		
		return false;
	}
	
	public function getRequests($request_id=0)
	{
		global $api;
		
		if(!$this->user){
			return false;	
		}
		
		try{
			$requests = $this->facebook->api('/me/apprequests?access_token='.$this->getAccessToken());
			
			if($requests && $requests['data'] && sizeof($requests['data']) > 0)
			{
				// if specific request - return params
				if($request_id > 0)
				{
					foreach($requests['data'] as $req)
					{
						if($req['application']['id'] == $api['appid'] && $req['id'] == $request_id)
						{
							parse_str($req['data'], $requestParams);
							return $requestParams;
						}
					}
				}
				else {
					return $requests;	
				}
			} 
		}
		catch(Exception $e)
		{
			$this->error = $e;
			return false;
		}
		
		return false;
	}
	
	public function deleteRequest($request_id)
	{
		global $api;
		
		if(!$this->user || (int) $request_id == 0){
			return false;	
		}
		
		return $this->facebook->api('/'.$request_id, 'DELETE');
	}

	public function getFriends($countOnly=false)
	{
		$friends = $this->facebook->api('/me/friends?fields=id,name,first_name,last_name,link,gender,timezone,locale,picture&type=square?access_token='.$this->getAccessToken());
		
		if($friends && count($friends['data']) > 0){
			return ($countOnly ? count($friends['data']) : $friends['data']);
		}
		
		return ($countOnly ? 0 : false);
	}
	
	public function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
		$sort_col = array();
		foreach ($arr as $key=> $row) {
			$sort_col[$key] = $row[$col];
		}
		array_multisort($sort_col, $dir, $arr);
	}
	
	public function getUserStatus($sort_like_or_comment)
	{	
		if(!$this->user){
			return array();	
		}
		$return = array();		
		$data = $this->getAllUserStatus();
		if($data && sizeof($data) > 0)
		{
			foreach($data as $k=>$v){
				if($v['type'] == 'status' && isset($v['message']) && !empty($v['message']) && $v['from']['id'] == $this->user['id']){
								
					$v['comments']['count'] = (isset($v['comments']['count']) && !empty($v['comments']['count'])) ? $v['comments']['count'] : 0 ;
					$v['likes']['count'] = (isset($v['likes']['count']) && !empty($v['likes']['count'])) ? $v['likes']['count'] : 0 ;					

					$return[$k] = array(
						'message' 	=> $v['message'],
						'comments'	=> $v['comments']['count'],
						'likes'		=> $v['likes']['count'],
					);
				}
			}
		}
		$this->array_sort_by_column($return, $sort_like_or_comment);
		return $return['0']['message'];
	}
	
	public function getAllUserStatus($params="", $newdata=array()){

		$params = (isset($params) && !empty($params) ) ? $params : "access_token=".$this->getAccessToken() ;
		$data = $this->facebook->api('/me/feed?'.$params);	
		if($data['data'] && sizeof($data['data']) > 0){
			$newdata = array_merge($newdata, $data['data']);
			if($data['paging']['next'] && sizeof($data['paging']['next']) > 0){
				$parse_url = parse_url($data['paging']['next']);
				$newdata = $this->getAllUserStatus($parse_url['query'], $newdata);
			}			
		}
		return $newdata;
	}
	
	
	
	public function getMostPhotoTags()
	{
		if(!$this->user){
			return array();	
		}
		$person = array();
		$data = $this->facebook->api('me/photos?access_token='.$this->getAccessToken());
		if($data['data'] && sizeof($data['data']) > 0)
		{		
			foreach ( $data['data'] as $v )
			{
				if($v['tags']['data'] && sizeof($v['tags']['data']) > 0){
					foreach ( $v['tags']['data'] as $v1){
						if( $v1['id']!=  $this->user['id'] )
						{
							$person[$v1['id']]['name'] 	=	$v1['name'];
							$person[$v1['id']]['count']	=	$person[$v1['id']]['count']+1;
						}
					}
				}
			}
			if($person && sizeof($person) > 0)
			{
				$count=0;
				foreach ($person as $k=>$v)
				{
					$count++;
					$persons[$count] = $v;
				}
			}
		}
		$this->array_sort_by_column($persons, "count");
		return $persons['0']['name'];
	}
	
	
	//start most popular picture 
	public function getAlbums()
	{
		if(!$this->user){
			return array();	
		}
		
		$data 	= $this->facebook->api('/me/albums?access_token='.$this->getAccessToken());
		$albums = array();
		
		if($data['data'] && sizeof($data['data']) > 0)
		{
			foreach($data['data'] as $d)
			{
				$album['id'] 		= $d['id'];
				$album['name'] 		= $d['name'];
				
				if($d['count'] > 0){
					$album['size'] 	= $d['count'];
					$album['items'] = self::getPictures($d['id']);
				}
				
				array_push($albums, $album);
			}
		}

		return $albums;
	}	
	
	public function getPictures($aid)
	{
		if(!$this->user || (int) $aid == 0){
			return array();	
		}
		
		$data 	= $this->facebook->api('/'.$aid.'/photos?access_token='.$this->getAccessToken());
		$photos = array();
		
		if($data['data'] && sizeof($data['data']) > 0)
		{
			foreach($data['data'] as $d)
			{
				$photo['id'] 		= $d['id'];
				$photo['name'] 		= $d['name'];
				$photo['picture'] 	= $d['picture'];
				$photo['source'] 	= $d['source'];
				$photo['width'] 	= $d['width'];
				$photo['height'] 	= $d['height'];
				//$photo['images'] 	= $d['images'];

				$photos[] 	= $photo;
			}
		}
		
		return $photos;
	}
	
	public function getPhotoComments($photo_id, $params="", $count_comments=0)
	{	

		$params = (isset($params) && !empty($params) ) ? $params : "access_token=".$this->getAccessToken();
					
		$comments = $this->facebook->api('/'.$photo_id.'/comments?'.$params);	
		if($comments['data'] && sizeof($comments['data']) > 0){
			$count_comments += count($comments['data']);
		}
		if($comments['paging']['next'] && sizeof($comments['paging']['next']) > 0){
			$parse_url = parse_url($comments['paging']['next']);
			$count_comments = $this->getPhotoComments($photo_id, $parse_url['query'], $count_comments);
			
		}
		return $count_comments;
	}
	
	public function getPhotoLikes($photo_id, $params="", $count_likes=0)
	{	

		$params = (isset($params) && !empty($params) ) ? $params : "access_token=".$this->getAccessToken() ;
					
		$likes = $this->facebook->api('/'.$photo_id.'/likes?'.$params);	
		if($likes['data'] && sizeof($likes['data']) > 0){
			$count_likes += count($likes['data']);
		}
		if($likes['paging']['next'] && sizeof($likes['paging']['next']) > 0){
			$parse_url = parse_url($likes['paging']['next']);
			$count_likes = $this->getPhotoLikes($photo_id, $parse_url['query'], $count_likes);
			
		}
		return $count_likes;
	}
	
	//end most popular picture 
	
	public function getFrendsSex()
	{
		if(!$this->user){
			return array();	
		}
		$return = array(
			"female"=>0,
			"male"=>0,
			"unknown"=>0
		);
		$data = $this->facebook->api(array('method' => 'fql.query', 'query' => 'SELECT uid , sex, name FROM user WHERE uid = me() OR uid IN (SELECT uid2 FROM friend WHERE uid1 = me())'));
		
		if($data && sizeof($data) > 0)
		{
			foreach( $data as $k=>$v )
			{
				if($v['sex']=="female")
					$return['female'] += 1;
				if($v['sex']=="male")
					$return['male'] += 1;
				if($v['sex']=="unknown")
					$return['unknown'] += 1;										 
			}
		}
		return $return;	
	}
	
	public function getRelationship()
	{	
		if($this->user['relationship_status'] && sizeof($this->user['relationship_status']) > 0)
		{
			$return['status'] = $this->user['relationship_status'];
		}
		if($this->user['significant_other']['name'] && sizeof($this->user['significant_other']['name']) > 0)
		{
			$return['name'] = $this->user['significant_other']['name'];
		}
		//
		return $return;	
	}
	
	public function getNotification($is_read=null, $is_hidden=null, $for_app=false)
	{
		return false;
	}
	
	public function publishToWall($content, $params = array())
	{
		global $api;
		
		$attachment = array(
			'message' 		=> $content,
			'name' 			=> isset($params['app_name']) ? $params['app_name'] : $api['title'],
			'caption' 		=> isset($params['caption']) ? $params['caption'] : $api['caption'],
			'link' 			=> isset($params['link']) ? $params['link'] : $api['lurl'],
			'description' 	=> isset($params['description']) ? $params['description'] : $api['description'],
			'picture' 		=> isset($params['app_picture']) ? $params['app_picture'] : $api['lurl']."assets/img/smartlibs.png",
			'actions' 		=> array(array('name' => isset($params['action_name']) ? $params['action_name'] : "visit", 'link' => isset($params['action_link']) ? $params['action_link'] : $api['caption_link']))
		);
		
		$result = $this->facebook->api('/me/feed/', 'post', $attachment);
		
		if(isset($result['id'])){
			return $result['id'];
		}
		
		return false;
	}
	
	private function call()
	{
		var_dump(1);die();
		global $facebook;
		
		$args = func_get_args();
		
		try {
			return call_user_func_array(array($facebook->facebook, "api"), $args);
		} 
		catch(Exception $e)
		{
			dbg($e->getMessage());
			return false;	
		}
	}
}
?>
