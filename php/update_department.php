<?php 
include 'connection.php';
$d_fullname=$_POST['d_fullname'];
$d_shortname=$_POST['d_shortname'];
$d_id=$_POST['d_id'];
$department_data=[
	'd_fullname'=>$d_fullname,
	'd_shortname'=>$d_shortname,
];
$update_department="UPDATE department SET d_fullname=:d_fullname,d_shortname=:d_shortname WHERE d_id='$d_id'";
$cupdate_department=$connect->prepare($update_department);
$cupdate_department->execute($department_data);
if ($cupdate_department) {
	$start = 'success';
	$message ="review_department.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}




 ?>