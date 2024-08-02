<?php 
include 'connection.php';
$o_id=$_POST['o_id'];
$o_fullname=ucwords($_POST['o_fullname']);
$o_shortname=strtoupper($_POST['o_shortname']);
$d_id=$_POST['d_id'];
$option_data=[
	'o_fullname'=>$o_fullname,
	'o_shortname'=>$o_shortname,
	'd_id'=>$d_id,
];
$update_option="UPDATE options SET o_fullname=:o_fullname,o_shortname=:o_shortname,d_id=:d_id WHERE o_id='$o_id'";
$cupdate_option=$connect->prepare($update_option);
$cupdate_option->execute($option_data);
if ($cupdate_option) {
	$start = 'success';
	$message ="review_option.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}




 ?>