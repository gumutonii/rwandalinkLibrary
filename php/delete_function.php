<?php 
include 'connection.php';

$data=$_POST['data'];
$f_id=$data['f_id'];
$delete_function="DELETE FROM functions WHERE f_id='$f_id'";
$cdelete_function=$connect->prepare($delete_function);
$cdelete_function->execute();
if ($cdelete_function) {
	echo 1;
}
else
{
	echo 2;
}


 ?>