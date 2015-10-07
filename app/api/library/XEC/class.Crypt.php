<?php
final class Crypt {
    /**
     * ! WARNING ! WARNING ! WARNING ! WARNING ! WARNING ! WARNING ! WARNING !
     *
     * Do not change this key after we are in production unless you know what
     * the hell you are doing!! If you change this key, no one can process
     * payments!
     *
     * If you want to change your key every so often, decrypt all the data that
     * has been previously encrypted and store as plain text somewhere, change
     * the key and then re-encrypt it.
     *
     * ! WARNING ! WARNING ! WARNING ! WARNING ! WARNING ! WARNING ! WARNING !
     */
	var $running = true;
    var $key = '202D287A814224A39F4251D8BEE35248790C84A7F0D40FC08E744170';
	
    /**
     * This function will encrypt the string that is passed to it
     *
     * @param String $data The string to be encrypted.
     * @return String Returns the encrypted string or false
     * @access public
     */
    function e($data = null)
	{
		if(!$this->running){
			return $data;	
		}
		
        if ($data != null) {
            // Make an encryption resource using a cipher
            $td = mcrypt_module_open('blowfish', '', 'ecb', '');
            // Create and encryption vector based on the $td size and random
            $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
            // Initialize the module using the resource, my key and the string vector
            mcrypt_generic_init($td, $this->key, $iv);
            // Encrypt the data using the $td resource
            $encrypted_data = mcrypt_generic($td, $data);
            // Encode in base64 for DB storage
            $encoded = bin2hex($encrypted_data);
            // Make sure the encryption modules get un-loaded
            if (!mcrypt_generic_deinit($td) || !mcrypt_module_close($td)) {
                $encoded = false;
            }
        } else {
            $encoded = false;
        }
        return $encoded;
    }
    /**
     * This function will de-crypt the string that is passed to it
     *
     * @param String $data The string to be encrypted.
     * @return String Returns the encrypted string or false
     */
    function d($data = null)
	{
		if(!$this->running){
			return $data;	
		}
		
        if ($data != null) {
            // The reverse of encrypt. See that function for details
            $data = (string) pack("H*" ,trim($data));
            $td = mcrypt_module_open('blowfish', '', 'ecb', '');
            $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
            mcrypt_generic_init($td, $this->key, $iv);
            $data = (string) trim(mdecrypt_generic($td, $data));
            // Make sure the encryption modules get un-loaded
            if (!mcrypt_generic_deinit($td) || !mcrypt_module_close($td)) {
                $data = false;
            }
        } else {
            $data = false;
        }
        return $data;
    }
}

?>