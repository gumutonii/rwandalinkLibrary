<?php 
include 'connection.php';
$book_type_id=$_POST['book_type_id'];
$book_type_name=$_POST['book_type_name'];
$d_id=$_POST['d_id'];
$book_type_name_data=[
'book_type_name'=>$book_type_name,
'd_id'=>$d_id,
];
$update_book_type_name="UPDATE books_type SET book_type_name=:book_type_name,d_id=:d_id WHERE book_type_id='$book_type_id'";
$cupdate_book_type_name=$connect->prepare($update_book_type_name);
$cupdate_book_type_name->execute($book_type_name_data);
if ($cupdate_book_type_name) {
    $start = 'success';
	$message ="librarian_review_bookType.php";
	echo json_encode(array([$start,$message]));
    
}
else
{
    $start = 'error';
	$message ="failed";
	echo json_encode(array([$start,$message]));
}













 ?>