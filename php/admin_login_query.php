<?php
session_start();
include "connection.php";

 $a_email=$_POST['a_email'];
 $a_password=$_POST['a_password'];

$data_select=[
'a_email'=>$a_email,
'a_password' =>$a_password,
];
$select_admin="SELECT * FROM admin WHERE a_email=:a_email AND a_password=:a_password ";  
$cselect_admin=$connect->prepare($select_admin);
$cselect_admin->execute($data_select);
$row_fetch=$cselect_admin->fetch(PDO::FETCH_ASSOC);
// if ($row_fetch) {
//  $_SESSION['a_id']=$row_fetch['a_id'];
//  $_SESSION['a_email']=$row_fetch['a_email'];
//  $_SESSION['a_last_name']=$row_fetch['a_last_name'];
//  $folder=$row_fetch['a_function'];
//  header("location:$folder/./");
// }
// else
// {
// $Login_admin="<div class='alert alert-danger alert-dismissible' role='alert'>
//                      Invalid Account
//                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//                    </div>";
// }

if ($row_fetch) {
    
 $_SESSION['a_id']=$row_fetch['a_id'];
 $_SESSION['a_email']=$row_fetch['a_email'];
 $_SESSION['a_last_name']=$row_fetch['a_last_name'];
    $start = 'success';
    $message ="admin/index.php";
    echo json_encode(array([$start,$message]));
}
else
{
  $start = 'error';
  $message ="Invalid Account !!!";
  echo json_encode(array([$start,$message]));
}


?>