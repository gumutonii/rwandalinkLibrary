<?php 
include 'connection.php';

$data=$_POST['data'];
$book_type_id=$data['book_type_id'];
$delete_book_type="DELETE FROM books_type WHERE book_type_id='$book_type_id'";
$cdelete_book_type=$connect->prepare($delete_book_type);
$cdelete_book_type->execute();
if ($cdelete_book_type) {
	echo 1;
}
else
{
	echo 2;
}

 ?>