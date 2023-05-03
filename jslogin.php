<?php 
session_start();
require_once('config.php');
	// echo "Hello from jslogin.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM user WHERE username='$username' AND password='$password' ";
$stmtselect=$db->prepare($sql);
$result=$stmtselect->execute([$username,$password]);

if($result){
	// echo 'Success';
	$user=$stmtselect->fetch(PDO::FETCH_ASSOC);
	// var_dump($user);
	if ($stmtselect->rowCount()>0) {
		$_SESSION['New_folder']=$username;
		echo "1";
	}
	else{
		echo "There no user for that combo";
	}
}
else{
	echo 'There were errors while connecting to database.';
}
 
?>
