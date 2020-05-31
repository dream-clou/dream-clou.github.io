<?php
	final class Tool{
		static public function locate($info,$url){
			echo "<script type=\"text/javascript\">alert('$info');location.href='$url';</script>";
			exit();
		}
		static public function back($info1){
			echo "<script type=\"text/javascript\">alert('$info1');history.back();</script>";
			exit();
		}
	}
?>
