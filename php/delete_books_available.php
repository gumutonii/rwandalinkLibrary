<?php 
include 'connection.php';

$data=$_POST['data'];
$b_SN=$data['b_SN'];
$deletebook="DELETE FROM books WHERE b_SN='$b_SN'";
$cdeletebook=$connect->prepare($deletebook);
$cdeletebook->execute();
if ($cdeletebook) {
	$delete_in_stock="DELETE FROM book_in_stock WHERE b_SN='$b_SN'";
	$cdelete_in_stock=$connect->prepare($delete_in_stock);
	$cdelete_in_stock->execute();
	if ($cdelete_in_stock) {
		echo 1;
	}
	else
	{
		echo 2;
	}
}



 ?>