<?php 
$servername = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$dbname = "db";
$conn=mysqli_connect($servername, $mysql_user, $mysql_pass, $dbname); 
if($conn){
	echo("Connection Success");
}
else{
	echo("Connection not success");
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Mobile=$_POST['Mobile Number'];
	$Password=$_POST['Password'];
	$Age=$_POST['Age'];
	$Gender=$_POST['Gender'];
	$Locality=$_POST['Locality'];

	$query="INSERT INTO 'registration_form1'(`Name`, `Email`, `Mobile Number`, `Password`, `Age`, `Gender`, `Locality`) VALUES ('$name', '$Email', '$Mobile', '$Password', '$Age', '$Gender', '$Locality')";
	if(mysqli_query($conn, $query)){
		echo("Registered successfully");
	}else{
		echo("Error in registration");
   	}
}else{
	echo("Error in request method"); 
}
?>