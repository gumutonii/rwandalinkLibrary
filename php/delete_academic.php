<?php 
include 'connection.php';

$data=$_POST['data'];
$ac_id=$data['ac_id'];
$delete_academic="DELETE FROM academic_year WHERE ac_id='$ac_id'";
$cdelete_academic=$connect->prepare($delete_academic);
$cdelete_academic->execute();
if ($cdelete_academic) {
	echo 1;
}
else
{
	echo 2;
}





 ?>