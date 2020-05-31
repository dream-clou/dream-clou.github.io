<?php
	class Reg extends User{
		public function __construct($username,$password,$twopassword,$email){
			$this->_username = $username;
			$this->_password = $password;
			$this->_twopassword = $twopassword;
			$this->_email = $email;
		}

	public function zd(){
		echo $this->_username;
		echo $this->_password;
		echo $this->_twopassword;
		echo $this->_email;

		$xml = <<<_xml
<user>
	<username>$this->_username</username>
	<password>$this->_password</password>
	<email>$this->_email</email>
</user>
_xml;
		$resxml = new SimpleXMLELement($xml);
		$resxml->asXML('user.xml');
	}
}

?>
