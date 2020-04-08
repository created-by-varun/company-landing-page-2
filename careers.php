<?php 
	$name = $_POST['name'];
	$grad = $_POST['grad'];
	$college = $_POST['college'];
	$specialization = $_POST['specialization'];
	$num = $_POST['num'];
	$num2 = $_POST['alt-num'];
	$email = $_POST['email'];
	$email2 = $_POST['alt-email'];
	$resume = $_POST['resume'];
	$cover = $_POST['cover'];

	$to = 'careers@cognitiveworks.ai';

	$subject = 'Job Application';

	$message = "Name of Candidate: ".$name."\n" . "College Name: ".$college."\n" . "Year of Graduation: ".$grad."\n" . "Graduation Specialiation: ".$specialization."\n" ."\n"."Email: ".$email."\n". "Mobile Number: ".$num. "Alternate Number: ".$num2."\n". "E-mail: ".$email."\n". "Alternate e-mail: ".$email2."\n"."Resume Link: ".$resume."\n". "Cover Letter Link: ".$cover;
	
	mail($to, $subject, $message);
?>