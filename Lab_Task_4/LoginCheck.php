<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$dd = $_REQUEST['dd'];
		$mm = $_REQUEST['mm'];
		$yyyy = $_REQUEST['yyyy'];

		if(empty($uname) || empty($password)){
			//echo "null submission";
			header('location: Login.php?msg=null');
		}else{

			if($uname == $password){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['uname'] = $uname;
				$_SESSION['email'] =$email;
		        $_SESSION['gender'] =$gender;
		        $_SESSION['dd'] = $dd ;
		        $_SESSION['mm'] = $mm ;
		        $_SESSION['yyyy'] = $yyyy;

				header('location: LoginDash.php');
			}else{
				header('location: Login.php?msg=invalid');
			}
		}
	}else{
		header('location: Login.php');
	}	
?>