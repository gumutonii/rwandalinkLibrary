<?php 
include 'connection.php';

$f_id=$_POST['f_id'];
$function_name=$_POST['function_name'];
$comment_data=
[
	'function_name'=>$function_name,
	'f_id'=>$f_id,
];
$update_comment="UPDATE functions SET function_name=:function_name WHERE f_id=:f_id";
$cupdate_comment=$connect->prepare($update_comment);
$cupdate_comment->execute($comment_data);
if ($cupdate_comment){
	$start = 'success';
	$message ="review_functions.php";
	echo json_encode(array([$start,$message]));
}
else
{
	$start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}

 ?>