<?php 
include 'connection.php';

$ac_id=$_POST['ac_id'];
$ac_name=$_POST['ac_name'];
$year_data=[
	'ac_name'=>$ac_name,
];
$update_year="UPDATE academic_year SET ac_name=:ac_name WHERE ac_id='$ac_id'";
$cupdate_year=$connect->prepare($update_year);
$cupdate_year->execute($year_data);
if ($cupdate_year) {
	
	$start = 'success';
	$message ="review_academicYear.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}




 ?>