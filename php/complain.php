<?php

	$name = $_POST['cname'];
	$from = $_POST['cmail'];
	$msg = $_POST['message'];
	$to = 'bhaveshkothari.19.cs@iite.indusuni.ac.in';
	$header = 'From: bkj281@gmail.com';
	
	$msg = 'Name: '.$name.'
'.'Mail: '.$from.'

'.$msg;

	$msg = wordwrap($msg, 50);

	$email = mail($to, 'Complaint', $msg, $header);

	if ($email) {
		echo '<script type="text/javascript">alert("Complain Sent");</script>';
		header ("location:../index.html");
	}
	else {
		echo '<script type="text/javascript">alert("An Error Occured");</script>';
		header ("location:../index.html");
	}

?>