<?php 
include 'connection.php';

$book_type_name=$_POST['book_type_name'];
$d_id=$_POST['d_id'];
$book_type_name_data=[
'book_type_name'=>$book_type_name,
'd_id'=>$d_id,
];
$select_book_type="SELECT * FROM books_type where book_type_name='$book_type_name' AND d_id='$d_id'";
$cselect_book_type=$connect->prepare($select_book_type);
$cselect_book_type->execute($book_type_name_data);
$row_cselect_book_type=$cselect_book_type->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_book_type) {
    echo 3;
}
else{
$insert_book_type_name="INSERT INTO books_type(book_type_name,d_id) VALUES(:book_type_name,:d_id)";
$cinsert_book_type_name=$connect->prepare($insert_book_type_name);
$cinsert_book_type_name->execute($book_type_name_data);
if ($cinsert_book_type_name) {
    echo 2;
    
}
else
{
    echo 1;
}
}




 ?>