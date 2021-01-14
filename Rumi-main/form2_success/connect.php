
<?php
$progress=false;
$errors=array();
if (isset($_POST['Sign'])) {
	# notofication variables

#  inputs
$name=$_POST['name'];

$email=$_POST['email'];
$password=$_POST['password'];
$confipass=$_POST['confipass'];
//database connection
$conn= new mysqli('localhost','root','mohamed','test');
if ($conn->connect_error) {
	die('Connection Failed : '.$conn->connect_error);
	
}else{
	   if ($password!=$confipass) {
	   	#check password....
	   	array_push($errors, "The two passwords do not match !");
	   }
		

	   else{
	   # insert values....
		$stmt=$conn->prepare("INSERT INTO sign_up(name, email, password)
		values(?, ?, ?)");
     
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
    
        $stmt->close();
        $conn->close();
        $progress=true;
	}


}}
?>

