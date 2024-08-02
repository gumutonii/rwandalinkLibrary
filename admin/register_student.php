<?php 
include '../php/connection.php';

$s_fname=$_POST['s_fname'];
$s_lname=$_POST['s_lname'];
$s_gender=$_POST['s_gender'];
$s_email=$_POST['s_email'];
$s_regno=strtoupper($_POST['s_regno']);
$s_phone=$_POST['s_phone'];
$d_id=$_POST['d_id'];
$o_id=$_POST['o_id'];
$y_id=$_POST['y_id'];
$program=$_POST['program'];
$study_mode=$_POST['study_mode'];
$academic_year=$_POST['academic_year'];
$s_password=$_POST['s_password'];
$s_status='active';
$s_profile=$_POST['s_gender'].'.jpg';


$select_email_reg="SELECT * FROM student WHERE s_email='$s_email' or s_regno='$s_regno' ";
$cselect_email_reg=$connect->prepare($select_email_reg);
$cselect_email_reg->execute();
$row_cselect_email_reg=$cselect_email_reg->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_email_reg){
     echo "<script>alert('alread')</script>";
}
else{
 $student_data=[
's_fname'=>$s_fname,
's_lname'=>$s_lname,
's_gender'=>$s_gender,
's_email'=>$s_email,
's_regno'=>$s_regno,
's_phone'=>$s_phone,
'd_id'=>$d_id,
'o_id'=>$o_id,
'y_id'=>$y_id,
'program'=>$program,
'study_mode'=>$study_mode,
'academic_year'=>$academic_year,
's_password'=>$s_password,
's_status'=>$s_status,
's_profile'=>$s_profile,
    ];

$insert_student="INSERT INTO student(s_fname,s_lname,s_gender,s_regno,d_id,o_id,y_id,program,study_mode,academic_year,s_status,s_email,s_phone,s_password,s_profile) VALUES(:s_fname,:s_lname,:s_gender,:s_regno,:d_id,:o_id,:y_id,:program,:study_mode,:academic_year,:s_status,:s_email,:s_phone,:s_password,:s_profile)";

$cinsert_student=$connect->prepare($insert_student);
$cinsert_student->execute($student_data);
if ($cinsert_student) {
    echo "<script>alert('well')</script>";
    
}
else
{
    echo "<script>alert('failed')</script>";
}
}



 ?>