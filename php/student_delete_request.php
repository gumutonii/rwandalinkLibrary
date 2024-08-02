<?php 
include 'connection.php';

$data=$_POST['data'];
$b_SN=$data['b_SN'];

$student_delete_request="DELETE FROM student_request WHERE b_SN='$b_SN' AND sr_status='SENT'";
$cstudent_delete_request=$connect->prepare($student_delete_request);
$cstudent_delete_request->execute();
if ($cstudent_delete_request) {
	$update_stock="UPDATE book_in_stock SET b_status='available' WHERE b_SN='$b_SN'";
	$cupdate_stock=$connect->prepare($update_stock);
	$cupdate_stock->execute();
	if ($cupdate_stock) {
		echo 1;
	}
	else
	{
		echo 2;
	}
}




 ?>