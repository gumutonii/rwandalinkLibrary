<?php 
include 'connection.php';
$s_id=$_POST['s_id'];
$s_fname=$_POST['s_fname'];
$s_lname=$_POST['s_lname'];
$s_gender=$_POST['s_gender'];
$s_email=$_POST['s_email'];
$s_regno=strtoupper($_POST['s_regno']);
$s_phone=$_POST['s_phone'];
$s_password=$_POST['s_password'];
$s_profile=$_POST['s_gender'].'.jpg';

 $student_data=[
's_fname'=>$s_fname,
's_lname'=>$s_lname,
's_gender'=>$s_gender,
's_email'=>$s_email,
's_regno'=>$s_regno,
's_phone'=>$s_phone,
's_password'=>$s_password,
's_profile'=>$s_profile,
    ];

$update_student="UPDATE student SET s_fname=:s_fname,s_lname=:s_lname,s_gender=:s_gender,s_email=:s_email,s_regno=:s_regno,s_phone=:s_phone,s_password=:s_password,s_profile=:s_profile WHERE s_id='$s_id'";
$cupdate_student=$connect->prepare($update_student);
$cupdate_student->execute($student_data);
if ($cupdate_student) {
	$start = 'success';
	$message ="review_student.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}




 ?>