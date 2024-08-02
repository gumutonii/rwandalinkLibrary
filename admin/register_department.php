<?php 
include '../php/connection.php';

$d_fullname=ucwords($_POST['d_fullname']);
$d_shortname=strtoupper($_POST['d_shortname']);

$select_department="SELECT * FROM department WHERE d_fullname='$d_fullname'";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
$row_cselect_dpartment=$cselect_department->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_dpartment) {
     echo 3;
}
else{
 $data_insert=[
'd_fullname'=>$d_fullname,
'd_shortname'=>$d_shortname,
    ];

$insert_department="INSERT INTO department(d_fullname,d_shortname)VALUES(:d_fullname,:d_shortname)";
$cinsert_department=$connect->prepare($insert_department);
$cinsert_department->execute($data_insert);
if ($cinsert_department) {
    echo 2;
    
}
else
{
    echo 1;
}
}




 ?>