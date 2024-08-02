<?php 
include '../php/connection.php';

$o_fullname=ucwords($_POST['o_fullname']);
$o_shortname=strtoupper($_POST['o_shortname']);
$d_id=$_POST['d_id'];

$select_option="SELECT * FROM options WHERE o_fullname='$o_fullname' AND o_shortname='$o_shortname'";
$cselect_option=$connect->prepare($select_option);
$cselect_option->execute();
$row_cselect_dpartment=$cselect_option->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_dpartment){
     echo 3;
}
else{
 $data_option=[
'o_fullname'=>$o_fullname,
'o_shortname'=>$o_shortname,
'd_id'=>$d_id,
    ];

$insert_option="INSERT INTO options(o_fullname,o_shortname,d_id) VALUES(:o_fullname,:o_shortname,:d_id)";

$cinsert_option=$connect->prepare($insert_option);
$cinsert_option->execute($data_option);
if ($cinsert_option) {
    echo 2;
    
}
else
{
    echo 1;
}
}




 ?>