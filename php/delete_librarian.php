<?php 
include 'connection.php';
$data=$_POST['data'];
$lb_id=$data['lb_id'];
$delete_librarian="DELETE FROM librarian WHERE lb_id='$lb_id'";
$cdelete_librarian=$connect->prepare($delete_librarian);
$cdelete_librarian->execute();
if ($cdelete_librarian) {
	echo 1;
}
else
{
	echo 2;
}





 ?>