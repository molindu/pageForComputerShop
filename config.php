<?php 

// $db_user="root";
// $db_pass="1234";
// $db_name="register";

// $db= new PDO("mysql:host=localhost;dbname=".$db_name.";charset=utf8",$db_user,$db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $db = new PDO("mysql:host=$servername;dbname=register", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    }
