<?php 
include 'connection.php';

$l_id=$_POST['l_id'];
$l_fname=$_POST['l_fname'];
$l_lname=$_POST['l_lname'];
$l_gender=$_POST['l_gender'];
$l_email=$_POST['l_email'];
$l_phone=$_POST['l_phone'];
$l_password=$_POST['l_password'];
$l_profile=$l_gender.'.jpg';

$lecturer_data=[
'l_fname'=>$l_fname,
'l_lname'=>$l_lname,
'l_gender'=>$l_gender,
'l_email'=>$l_email,
'l_phone'=>$l_phone,
'l_password'=>$l_password,
'l_profile'=>$l_profile,
    ];
$update_lecturer="UPDATE lecturer SET l_fname=:l_fname,l_lname=:l_lname,l_gender=:l_gender,l_email=:l_email,l_phone=:l_phone,l_password=:l_password,l_profile=:l_profile WHERE l_id='$l_id'";    
$cupdate_lecturer=$connect->prepare($update_lecturer);
$cupdate_lecturer->execute($lecturer_data);
if ($cupdate_lecturer) {
	$start = 'success';
	$message ="review_lecturer.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}

 ?>