<?php

require_once('config.php');


if ($_POST["password"]!=$_POST["confirmpassword"]) {
	
	// header("Location :signup.php");
	echo "<script>alert('Enter correct password');</script>";
	// echo "<html><head><title>alert</title></head><body action='signup.php'>

	// <script>alert('Enter correct password');</script>
	// <div style='background-color:#373866; width:100%; height:50px;'><p><a href='signup.php' style='color:white; text-decoration:none; float:right; margin-top:15px;'>Back</a></p></div>


	// </body></html>";
	header("Location :login.php");

}

else{

	if (isset($_POST["create"])) {
			
			$username  =$_POST["username"];
			
			$email      =$_POST["email"];
			
			$password   =sha1($_POST["password"]);

			//echo $username. " " .$email;

			//sql query
			$sql="INSERT INTO user(username,email,password) VALUES('$username', '$email', '$password')";

			// prepare
			$stmtinsert=$db->prepare($sql);

			// binding params
			//$stmt->bind_param("sss", $username, $email, $password);


			// execute
			$result=$stmtinsert->execute([$username,$email,$password]);


			if($result){
				//echo "Succesfully Saved.";
				header('Location: signup-confirm.php');

				

			}
			else{
				header('Location: signup-error.php'); 
			}
}
else{
	echo "No Data";
}
}

?>