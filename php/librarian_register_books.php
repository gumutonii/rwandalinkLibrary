<?php 
include '../php/connection.php';
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
    $b_status='available';
    $b_appiarence='non-damaged';
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


$insert_book="INSERT INTO books(`b_SN`,`b_Author`,`b_title`,`b_Year_Publisher`,`b_Publisher`,`b_Edition`,`b_ISBN_ISSN`,`b_Call_no`,`d_id`,`book_type_id`)
 VALUES(:b_SN,:b_Author,:b_title,:b_Year_Publisher,:b_Publisher,:b_Edition,:b_ISBN_ISSN,:b_Call_no,:d_id,:book_type_id)";
$cinsert_book=$connect->prepare($insert_book);
$cinsert_book->execute($book_data);
if($cinsert_book){

 $books_data_in=[
 'b_SN'=>$b_SN,
 'b_status'=>$b_status,
 'b_appiarence'=>$b_appiarence,
];
$insert_instock="INSERT INTO book_in_stock(`b_SN`,`b_status`,`b_appiarence`)
 VALUES(:b_SN,:b_status,:b_appiarence)";
$cinsert_instock=$connect->prepare($insert_instock);
$cinsert_instock->execute($books_data_in);

        echo 1;
    }
    else{
        echo 2;
    }




 ?>