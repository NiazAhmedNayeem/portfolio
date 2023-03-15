<?php
    
	$con = mysqli_connect('localhost','root','test');
	if($con)
	{ 
		 echo "Connection successful";
	}else {
		echo "No connection";
	}
	mysqli_select_db ($con, 'planetplus');
	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	
	 $query = "insert into messages (name, email, subject, message) 
	 values ('$name', '$email', '$subject', '$message')";
	
	 mysqli_query($con, $query);
	 
	 echo "$query";
	
		  
?>


