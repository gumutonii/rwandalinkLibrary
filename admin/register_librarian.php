<?php 
include '../php/connection.php';

$lb_fname=$_POST['lb_fname'];
$lb_lname=$_POST['lb_lname'];
$lb_gender=$_POST['lb_gender'];
$lb_email=$_POST['lb_email'];
$lb_phone=$_POST['lb_phone'];
$lb_password=$_POST['lb_password'];
$lb_status='active';
$lb_profile=$lb_gender.'.jpg';

$select_email="SELECT * FROM librarian WHERE lb_email='$lb_email' ";
$cselect_email=$connect->prepare($select_email);
$cselect_email->execute();
$row_cselect_email=$cselect_email->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_email){
     echo 3;
}
else{
 $lib_data=[
'lb_fname'=>$lb_fname,
'lb_lname'=>$lb_lname,
'lb_gender'=>$lb_gender,
'lb_email'=>$lb_email,
'lb_phone'=>$lb_phone,
'lb_password'=>$lb_password,
'lb_status'=>$lb_status,
'lb_profile'=>$lb_profile,
    ];

$insert_librarian="INSERT INTO librarian(lb_fname,lb_lname,lb_gender,lb_email,lb_phone,lb_password,lb_status,lb_profile) VALUES(:lb_fname,:lb_lname,:lb_gender,:lb_email,:lb_phone,:lb_password,:lb_status,:lb_profile)";

$cinsert_librarian=$connect->prepare($insert_librarian);
$cinsert_librarian->execute($lib_data);
if ($cinsert_librarian) {
    echo 2;
    
}
else
{
    echo 1;
}
}




 ?>