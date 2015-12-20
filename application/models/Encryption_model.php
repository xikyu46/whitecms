<?php
	Class Encryption_model extends CI_Model{
		function encrypt($string=false, $key=false){
			if($string){
				$td = MCRYPT_BLOWFISH;
				$iv = $this->getkeyid();
				if(!$key){
					$key = $this->getkey();
				}
				return $this->criptData($string,$td,$key,$iv);	
			}
			return false;
		}
		
		function decrypt($string=false,$key=false){
			if($string){
				$td = MCRYPT_BLOWFISH;
				$iv = $this->getkeyid();
				if(!$key){
					$key = $this->getkey();
				}
				return $this->decriptData($string,$td,$key,$iv);
			}
			return false;
		}
		
		private function getkey(){
			return '123456678890';
		}
		
		private function getkeyid(){
			return '50731620';
		}

		private function hexFromBin($data){
			return bin2hex($data);
		}

		private function binFromHex($data){
			$len = strlen($data);
			return pack("H" . $len, $data);
		}

		private function criptData($data,$td,$key,$iv){
			return $this->hexFromBin(mcrypt_encrypt($td, $key, $data, MCRYPT_MODE_CBC, $iv));
		}
		
		private function decriptData($eData,$td,$key,$iv){
			return trim(mcrypt_decrypt($td, $key, $this->binFromHex($eData), MCRYPT_MODE_CBC, $iv));
		}
	}
