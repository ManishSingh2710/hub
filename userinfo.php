<?php

$con = mysqli_connect('localhost','root');

if($con)
{
	echo "Connection successful";
}else
{
	echo "No connection";
}

mysqli_select_db($con, 'gec2020');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$clg = $_POST['clg'];
$psw = $_POST['psw'];
//$id = $_POST['id'];
//var_dump($email);
$query = "insert into userinfo (name, email, phone, clg, psw)
		  values('$name', '$email', '$phone', '$clg', '$psw') ";

mysqli_query($con,$query);

header('location:index.html');

?>
