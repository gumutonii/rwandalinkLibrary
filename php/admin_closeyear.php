<?php 
include 'connection.php';

$data=$_POST['data'];
$id=$data['ac_id'];
$status="CLOSED";
$update_status="UPDATE academic_year SET ac_status='$status' WHERE ac_id='$id' ";
$pupdate_status =$connect->prepare($update_status);
$pupdate_status ->execute();
if ($pupdate_status) {
	echo 1;
}
else
{
	echo 2;
}



 ?>