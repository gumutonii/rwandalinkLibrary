<?php 
include 'connection.php';
$data=$_POST['data'];
$l_id=$data['l_id'];
$delete_lecturer="DELETE FROM lecturer WHERE l_id='$l_id'";
$cdelete_lecturer=$connect->prepare($delete_lecturer);
$cdelete_lecturer->execute();
if ($cdelete_lecturer) {
	echo 1;
}
else
{
	echo 2;
}


 ?>