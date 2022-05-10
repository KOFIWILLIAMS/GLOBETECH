<?php

//include "connection.php";
require "connection.php";

if(isset ($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if($_POST["password"] == $_POST["Cpassword"]){
	

$sql = "INSERT into new_user value ('$name', '$email', '$password' )";

} else {echo "check your password";}


	if (mysqli_query($conn, $sql)){
	//echo "Inserting is successful!";
	header("location: ..\Html\home.php");
	}else {
	echo "Inserting is unsuccessful";
}
mysqli_close ($conn);
} else{
	header("location: index.php");
}

?>
