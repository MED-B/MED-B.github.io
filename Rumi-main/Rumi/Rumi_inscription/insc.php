<?php

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$confipass=$_POST['confipass'];
//database connection
$conn= new mysqli('localhost','root','','test');
if ($conn->connect_error) {
	die('Connection Failed : '.$conn->connect_error);
	# code...
}else{
	$stmt=$conn->prepare("insert into registation(firstName,lastName,email,password)values(?,?,?,?)");

    $stmt->bin_param("ssss",$firstName,$lastName,$email,$password);
    $stmt->execute();
    echo "Registration complete";
    $stmt->close();
    $conn->close();


}









?>