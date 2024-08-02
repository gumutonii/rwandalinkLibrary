<?php 
include 'connection.php';

$lb_id=$_POST['lb_id'];
$lb_fname=$_POST['lb_fname'];
$lb_lname=$_POST['lb_lname'];
$lb_gender=$_POST['lb_gender'];
$lb_email=$_POST['lb_email'];
$lb_phone=$_POST['lb_phone'];
$lb_password=$_POST['lb_password'];
$lb_profile=$lb_gender.'.jpg';
$librarian_data=[
'lb_fname'=>$lb_fname,
'lb_lname'=>$lb_lname,
'lb_gender'=>$lb_gender,
'lb_email'=>$lb_email,
'lb_phone'=>$lb_phone,
'lb_password'=>$lb_password,
'lb_profile'=>$lb_profile,
];
$update_librarians="UPDATE librarian SET lb_fname=:lb_fname,lb_lname=:lb_lname,lb_gender=:lb_gender,lb_email=:lb_email,lb_phone=:lb_phone,lb_password=:lb_password,lb_profile=:lb_profile WHERE lb_id='$lb_id'";
$cupdate_librarians=$connect->prepare($update_librarians);
$cupdate_librarians->execute($librarian_data);
if ($cupdate_librarians) {
	$start = 'success';
	$message ="review_Librarian.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}

	# code...









 ?>