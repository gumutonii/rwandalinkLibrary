<?php 
include 'connection.php';
$data=$_POST['data'];
$s_id=$data['s_id'];
$delete_student="DELETE FROM student WHERE s_id='$s_id'";
$cdelete_student=$connect->prepare($delete_student);
$cdelete_student->execute();
if ($cdelete_student) {
	echo 1;
}
else
{
	echo 2;
}


 ?>