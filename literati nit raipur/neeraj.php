<?php

mysqli_connect("localhost", "root", "", "literati") or die(mysqli_error());

$error = "";
if(isset($_POST['submit'])){
	if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message'])){
		if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['message'])){
			$name = trim($_POST['name']);
			$email = $_POST['email'];
			$message = $_POST['message'];
			
			$sql = "INSERT INTO contactus('Name', 'email', 'message') values ('neeraj','mandare.neeraj5@gmail.com','xyz')";
		}else{
			$error = "all fields required";
		}
	}else{
		$error = "Problem sending try again";
	}
}
	
?>