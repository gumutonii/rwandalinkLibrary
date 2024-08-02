<?php 
include '../php/connection.php';

$l_fname=$_POST['l_fname'];
$l_lname=$_POST['l_lname'];
$l_gender=$_POST['l_gender'];
$l_email=$_POST['l_email'];
$l_phone=$_POST['l_phone'];
$l_password=$_POST['l_password'];
$l_status='active';
$l_position=$_POST['l_position'];
$l_d_id=$_POST['l_d_id'];
$o_id=$_POST['o_id'];
$l_profile=$l_gender.'.jpg';

$select_email="SELECT * FROM lecturer WHERE l_email='$l_email' ";
$cselect_email=$connect->prepare($select_email);
$cselect_email->execute();
$row_cselect_email=$cselect_email->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_email){
     echo 3;
}
else{
 $lecturer_data=[
'l_fname'=>$l_fname,
'l_lname'=>$l_lname,
'l_gender'=>$l_gender,
'l_email'=>$l_email,
'l_phone'=>$l_phone,
'l_password'=>$l_password,
'l_status'=>$l_status,
'l_profile'=>$l_profile,
'l_position'=>$l_position,
'l_d_id'=>$l_d_id,
'o_id'=>$o_id,
    ];
$insert_lecturer="INSERT INTO lecturer(l_fname,l_lname,l_gender,l_email,l_phone,l_password,l_status,l_position,l_d_id,o_id,l_profile) VALUES(:l_fname,:l_lname,:l_gender,:l_email,:l_phone,:l_password,:l_status,:l_position,:l_d_id,:o_id,:l_profile)";
$cinsert_lecturer=$connect->prepare($insert_lecturer);
$cinsert_lecturer->execute($lecturer_data);
if ($cinsert_lecturer) {
    echo 2;
    
}
else
{
     echo 1;
}
}



 ?>