<?php 
$sql = "SELECT * FROM doctor_details";
require_once('DbConnect.php');
//$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$r = mysqli_query($con,$sql);
$result = array();
while($row = mysqli_fetch_array($r)){
 array_push($result,array(
'Doc_Name'=>$row['Doc_Name']
    ));
}
echo json_encode(array('result'=>$result));
mysqli_close($con);?>
