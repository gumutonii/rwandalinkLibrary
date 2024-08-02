<?php 
include 'connection.php';

$data=$_POST['data'];
$y_id=$data['y_id'];
$delete="DELETE FROM year_study WHERE y_id='$y_id'";
$cdelete=$connect->prepare($delete);
$cdelete->execute();
if ($cdelete) {
	echo 1;
}
else
{
	echo 2;
}



 ?>