<?php 
include 'connection.php';
$sr_id=$_POST['sr_id'];
$bbs_return_date=$_POST['bbs_return_date'];
$bbs_status="BORROWED";
$bbs_date=date("Y-F-d");
$bbs_month=date("Y-F");

$select_offer="SELECT * FROM student_request WHERE sr_id='$sr_id' and sr_status='SENT'";
$cselect_offer=$connect->prepare($select_offer);
$cselect_offer->execute();
$row_cselect_offer=$cselect_offer->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_offer) {
	$update_request="UPDATE student_request SET sr_status='ACCEPTED' WHERE sr_id='$sr_id'";
	$cupdate_request=$connect->prepare($update_request);
	$cupdate_request->execute();
	if ($cupdate_request) {
		$borrow_data=[
'sr_id'=>$sr_id,
'bbs_return_date'=>$bbs_return_date,
'bbs_date'=>$bbs_date,
'bbs_month'=>$bbs_month,
'bbs_status'=>$bbs_status,
		];
		$insert_borrowed="INSERT INTO borrowed_book_student(sr_id,bbs_return_date,bbs_date,bbs_month,bbs_status) VALUES(:sr_id,:bbs_return_date,:bbs_date,:bbs_month,:bbs_status)";
		$cinsert_borrowed=$connect->prepare($insert_borrowed);
		$cinsert_borrowed->execute($borrow_data);
		if ($cinsert_borrowed) {
			$start = 'success';
	        $message ="requested_books.php";
	        echo json_encode(array([$start,$message]));
		}
		else
		{
			$start = 'error';
	        $message ="failed";
	        echo json_encode(array([$start,$message]));
		}

	}
}




 ?>