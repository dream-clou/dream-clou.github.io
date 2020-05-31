<?php
	abstract class User{
		protected $_username;
		protected $_password;
		protected $_twicepassword;
		protected $_email;

		abstract function zd();
		}
		class username extends User{
		public function zd(){
			include_once 'Login.inc.php';
		}
	}
	$username = new username();
	$username->zd();
?>
