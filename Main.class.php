<?php
	class Main{
		private $_index;
		private $_send;

		public function __construct($index=''){
			$this->_index = $index;

	if(isset($_POST['send'])){
		$this->_send = $_POST['send'];
		}
	}
	public function run(){
		$this->ui();
		$this->send();
	}
		private function ui(){
			if(empty($this->_index)){
				include_once 'start.inc.php';
			}elseif($this->_index=='login' ||$this->_index=='reg'||$this->_index=='success'){
				include_once $this->_index.'.inc.php';
			}else{
				include_once 'start.inc.php';
			}
		}
	private function send(){
		echo $this->_send;
		switch ($this->_send){
			case '注册';
				echo "注册"; 
				$reg = new Reg($_POST['username'],$_POST['password'],$_POST['twopassword'],$_POST['email']);
				$reg->zd();

			case '登录';
				echo "登录";
				$login = new Login($_POST['username'],$_POST['password']);
				$login->zd();
			}
		}
	}
?>
