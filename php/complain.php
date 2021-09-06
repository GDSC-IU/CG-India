<?php

	$name = $_POST['cname'];
	$from = $_POST['cmail'];
	$msg = $_POST['message'];
	$to = 'bkj281@gmail.com';
	$header = 'From: bkj281@gmail.com';
	
	$msg = 'Name: '.$name.'
'.'Mail: '.$from.'
'.$msg;

	$msg = wordwrap($msg, 50);

	$email = mail($to, 'Complaint from ', $msg, $header);

	if ($email) {
		echo '<script type="text/javascript">alert("Complain Sent");</script>';
	}
	else {
		echo '<script type="text/javascript">alert("An Error Occured");</script>';
	}

	header ("location:../index.html");

?>