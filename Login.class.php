<?php
	class Login extends User{
	public function __construct($username,$password){
		$this->_username = $username;
		$this->_password = $password;
	}
	public function zd(){
		$res = simplexml_load_file('user.xml');
		if($res->username == $this->_username&& $res->password == $this->_password){
			echo $this->_username.'欢迎登录';

		Tool::locate($this->_username.'欢迎登录','?index=success');
		}else{
			echo '登录失败';
			Tool::back("登录失败");
		}
	}
}
?>
