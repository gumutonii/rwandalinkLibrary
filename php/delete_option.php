<?php 
include 'connection.php';
$data=$_POST['data'];
$o_id=$data['o_id'];
$delete_option="DELETE FROM options WHERE o_id='$o_id'";
$cdelete_option=$connect->prepare($delete_option);
$cdelete_option->execute();
if ($cdelete_option) {
	echo 1;
}
else
{
	echo 2;
}


 ?>