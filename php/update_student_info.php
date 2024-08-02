<?php 
include 'connection.php';
$s_id=$_POST['s_id'];
$s_fname=$_POST['s_fname'];
$s_lname=$_POST['s_lname'];
$s_gender=$_POST['s_gender'];
$s_email=$_POST['s_email'];
$s_phone=$_POST['s_phone'];
$s_password=$_POST['s_password'];
$s_profile=$_POST['s_gender'].'.jpg';
$con_password=$_POST['con_password'];
if ($con_password=!$s_password) {
      $start = 'error';
      $message ="Password does not match !!!";
      echo json_encode(array([$stat,$msg]));
}
else{

$student_email="SELECT * FROM student WHERE s_email='$s_email'";
$cstudent_email=$connect->prepare($student_email);
$cstudent_email->execute();
$row_cstudent_email=$cstudent_email->fetch(PDO::FETCH_ASSOC);
if ($row_cstudent_email) {
	 $start = 'error';
     $message ="Email has been taken";
     echo json_encode(array([$stat,$msg]));
}
else{

$student_data=[
's_fname'=>$s_fname,
's_lname'=>$s_lname,
's_gender'=>$s_gender,
's_email'=>$s_email,
's_phone'=>$s_phone,
's_password'=>$s_password,
's_profile'=>$s_profile,
    ];

$update_student="UPDATE student SET s_fname=:s_fname,s_lname=:s_lname,s_gender=:s_gender,s_email=:s_email,s_phone=:s_phone,s_password=:s_password,s_profile=:s_profile WHERE s_id='$s_id'";
$cupdate_student=$connect->prepare($update_student);
$cupdate_student->execute($student_data);
if ($cupdate_student) {
	$start = 'success';
	$message ="login.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="FAILED TO CREATE ACCOUNT TYR AGAIN";
	echo json_encode(array([$start,$message]));
}    

}
}

 ?>