<?php 
include 'connection.php';

$data=$_POST['data'];
$sr_id=$data['sr_id'];
$update_borrowed="UPDATE borrowed_book_student SET bbs_status='RETURNED' WHERE sr_id='$sr_id'";
$cupdate_borrowed=$connect->prepare($update_borrowed);
$cupdate_borrowed->execute();
if ($cupdate_borrowed) {
	$update_student_request="UPDATE student_request SET sr_status='DONE' WHERE sr_id='$sr_id'";
	$cupdate_student_request=$connect->prepare($update_student_request);
	$cupdate_student_request->execute();
	if ($cupdate_student_request) {
		$select_before="SELECT * FROM student_request WHERE sr_id='$sr_id'";
		$cselect_before=$connect->prepare($select_before);
		$cselect_before->execute();
		$row_cselect_before=$cselect_before->fetch(PDO::FETCH_ASSOC);
		if ($row_cselect_before) {
			$update_stock="UPDATE book_in_stock SET b_status='available' where b_SN='".$row_cselect_before['b_SN']."'";
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
	}
}






 ?>