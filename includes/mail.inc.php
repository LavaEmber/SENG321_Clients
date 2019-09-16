<?php

if(isset($_POST['submit'])){
	$name= $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo='xxyhcmxf@gmail.com';
	$headers="From: ".$mailFrom;
	$txt = "You have received contact request from ".$name.".\n\nThe E-mail is ".$mailFrom."\n\n".$message."\n\nThe Website is: ".$website;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: ../index.html?mailsend");
}