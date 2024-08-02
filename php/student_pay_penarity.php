<?php 
include 'connection.php';
$bbs_id=$_POST['bbs_id'];
$s_id=$_POST['s_id'];
$sp_id=$_POST['sp_id'];
$amount_payed=$_POST['amount_payed'];
$mode_pay=$_POST['mode_pay'];
$ssp_date=date("Y-F-d");
$payed_data=[
'sp_id'=>$sp_id,
's_id'=>$s_id,
'amount_payed'=>$amount_payed,
'mode_pay'=>$mode_pay,
'ssp_date'=>$ssp_date,
];

$pay_penarity="INSERT INTO student_payed_penarity(sp_id,s_id,amount_payed,mode_pay,ssp_date) VALUES(:sp_id,:s_id,:amount_payed,:mode_pay,:ssp_date)";
$cpay_penarity=$connect->prepare($pay_penarity);
$cpay_penarity->execute($payed_data);
if ($cpay_penarity) {
	$update_penarity="UPDATE student_pernarity SET sp_status='PAYED' WHERE sp_id='$sp_id'";
	$cupdate_penarity=$connect->prepare($update_penarity);
	$cupdate_penarity->execute();
	if ($cupdate_penarity) {
	$start = 'success';
	$message ="Borrow_back.php";
	echo json_encode(array([$start,$message]));
	}
	else
	{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
	}


}




 ?>