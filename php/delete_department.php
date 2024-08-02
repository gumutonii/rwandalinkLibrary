<?php 
include 'connection.php';

$data=$_POST['data'];
$d_id=$data['d_id'];
$delete_department="DELETE FROM department WHERE d_id='$d_id'";
$cdelete_department=$connect->prepare($delete_department);
$cdelete_department->execute();
if ($cdelete_department) {
	echo 1;
}
else
{
	echo 2;
}

 ?>