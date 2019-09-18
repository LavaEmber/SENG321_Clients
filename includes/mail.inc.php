<?php

if(isset($_POST['submit'])){
	$name= $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$subject="contact form received";
	$mailTo='grahamjsela@gmail.com';
	$headers="From: ".$mailFrom;
	$txt = "You have received contact request from ".$name.".\n\nThe E-mail is ".$mailFrom."\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: ../index.html?su=sucess");
}else{
	header("Location: ../index.html?su=failed");
}