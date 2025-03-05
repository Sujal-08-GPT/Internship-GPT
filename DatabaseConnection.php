//database connection 
<?php


	//below is database connection 


	$con=mysqli_connect('localhost','root','','internship');


	//host, username, password, database name


	if(!$con){


	  echo "Error in database connection ";


	}


If($_SERVER['REQUESTED_METHOD']=='POST')


{


$name=$_POST['name'];


$email=$_POST['email'];


$contactno=$_POST['contactno'];


$message=$_POST['message'];


$ins="insert into feedback(name,email, contactno, message, datetime,Values('$name','$email','$contactno','$message',now())";


}




?>