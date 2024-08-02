<?php 
include 'connection.php';

$data=$_POST['data'];
$b_SN=$data['b_SN'];
$s_id=$data['s_id'];
$sr_order_no=$data['sr_order_no'];
$sr_status=$data['sr_status'];
$sr_date=$data['sr_date'];

$select_request="SELECT * FROM student_request where s_id='$s_id' and sr_date='$sr_date' and sr_status='$sr_status'";
$cselect_request=$connect->prepare($select_request);
$cselect_request->execute();
$row_cselect_request=$cselect_request->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_request) {
	$select_max_order_no="SELECT max(sr_order_no) as max_no FROM student_request where s_id='$s_id' and sr_date='$sr_date' and sr_status='$sr_status'";
	$cselect_max_order_no=$connect->prepare($select_max_order_no);
	$cselect_max_order_no->execute();
	$row_cselect_max_order_no=$cselect_max_order_no->fetch(PDO::FETCH_ASSOC);
	$max_no=$row_cselect_max_order_no['max_no']+1;
$data_insert2=[
'b_SN'=>$b_SN,
's_id'=>$s_id,
'sr_order_no'=>$max_no,
'sr_status'=>$sr_status,
'sr_date'=>$sr_date,
];
$insert_request="INSERT INTO student_request(b_SN,s_id,sr_order_no,sr_status,sr_date) VALUES(:b_SN,:s_id,:sr_order_no,:sr_status,:sr_date)";
$cinsert_request=$connect->prepare($insert_request);
$cinsert_request->execute($data_insert2);
if ($cinsert_request) {
	$update_stock="UPDATE book_in_stock SET b_status='BOOKED' WHERE b_SN='$b_SN'";
	$cupdate_stock=$connect->prepare($update_stock);
	$cupdate_stock->execute();
	if($cupdate_stock) {
		echo 1;
	}
	else
    {
	echo 2;
    }

}



}
else{




$data_insert1=[
'b_SN'=>$b_SN,
's_id'=>$s_id,
'sr_order_no'=>$sr_order_no,
'sr_status'=>$sr_status,
'sr_date'=>$sr_date,
];
$insert_request="INSERT INTO student_request(b_SN,s_id,sr_order_no,sr_status,sr_date) VALUES(:b_SN,:s_id,:sr_order_no,:sr_status,:sr_date)";
$cinsert_request=$connect->prepare($insert_request);
$cinsert_request->execute($data_insert1);
if ($cinsert_request) {
	$update_stock="UPDATE book_in_stock SET b_status='BOOKED' WHERE b_SN='$b_SN'";
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
 ?>