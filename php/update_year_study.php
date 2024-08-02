<?php 
include 'connection.php';
$y_id=$_POST['y_id'];
$y_name=$_POST['y_name'];
$year_data=[
	'y_name'=>$y_name,
];
$update_year_study="UPDATE year_study SET y_name=:y_name WHERE y_id='$y_id'";
$cupdate_year_study=$connect->prepare($update_year_study);
$cupdate_year_study->execute($year_data);
if ($cupdate_year_study) {
	$start = 'success';
	$message ="review_Year_Of_Study.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}




 ?>