<?php 
include 'connection.php';
    $b_id=$_POST['b_id'];
    $b_SN=$_POST['b_SN'];
    $b_Author=ucwords($_POST['b_Author']);
    $b_title=ucwords($_POST['b_title']);
    $b_Year_Publisher=$_POST['b_Year_Publisher'];
    $b_Publisher=ucwords($_POST['b_Publisher']);
    $b_Edition=ucwords($_POST['b_Edition']);
    $b_ISBN_ISSN=$_POST['b_ISBN_ISSN'];
    $b_Call_no=$_POST['b_Call_no'];
    $d_id=$_POST['d_id'];
    $book_type_id=$_POST['book_type_id'];
    $book_data=[
        'b_SN'=>$b_SN,
         'b_Author'=>$b_Author,
         'b_title'=>$b_title,
         'b_Year_Publisher'=>$b_Year_Publisher,
         'b_Publisher'=>$b_Publisher,
         'b_Edition'=>$b_Edition,
         'b_ISBN_ISSN'=>$b_ISBN_ISSN,
         'b_Call_no'=>$b_Call_no,
         'book_type_id'=>$book_type_id,
         'd_id'=>$d_id,
        ];


$update_book="UPDATE books  SET b_SN=:b_SN,b_Author=:b_Author,b_title=:b_title,b_Year_Publisher=:b_Year_Publisher,b_Publisher=:b_Publisher,b_Edition=:b_Edition,b_ISBN_ISSN=:b_ISBN_ISSN,b_Call_no=:b_Call_no,d_id=:d_id,book_type_id=:book_type_id WHERE b_id='$b_id'";
$cupdate_book=$connect->prepare($update_book);
$cupdate_book->execute($book_data);
if($cupdate_book){
    $start = 'success';
    $message ="review_books.php";
    echo json_encode(array([$start,$message]));
    }
    else
    {
    $start = 'error';
    $message ="failed";
    echo json_encode(array([$start,$message]));
    }




 ?>