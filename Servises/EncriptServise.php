<?php 
	
	class EncriptServise
	{
		private $hashCode;
		function __construct()
		{
			$this->hashCode = "8d90ed4abd44356251e8f61163fdff00";
		}

		function EncriptData($text)
		{
    		$textEncoded = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $this->hashCode ), $text, MCRYPT_MODE_CBC, md5( md5( $this->hashCode ) ) ) );
   			return( $textEncoded );
		}
		function Decriptdata($text)
		{
			$textDecoded= rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $this->hashCode ), base64_decode( $text ), MCRYPT_MODE_CBC, md5( md5( $this->hashCode ) ) ), "\0");
    		return( $text );
		}
	}

 ?>