<?php

$host='127.0.0.1';
$username='root';
$password='';
$db_name='db';

$conn=mysqli_connect($host,$username,$password,$db_name); or die('Unable to connect');

if(mysqli_connect_error($conn))
{
	echo"Failed to connect to database" .mysqli_connect_error();
}
$sql="SELECT * FROM `doctor_details`";

$result=mysqli_query($conn,$sql);
if()
{
	while($row=mysqli_fetch_array($result))
	{
		$flag[]=$row;
	}
	print(json_encode($flag));
}
mysqli_close($conn);
?>