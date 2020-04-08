<?php 
	$name = $_POST['name'];
	$grad = $_POST['grad'];
	$num = $_POST['num'];
	$email = $_POST['email'];
	$resume = $_POST['resume'];
	$cover = $_POST['cover'];

	$to = 'careers@cognitiveworks.ai';
	$subject = 'Job Application';
	$message = "Name of Candidate: ".$name."\n" . "Year of Graduation:".$grad."\n"."Email:".$email."\n". "Mobile Number:".$num."\n". "E-mail:".$email."\n"."Resume Link:".$resume."\n". "Cover Letter:".$cover;
	
	mail($to, $subject, $message);
?>