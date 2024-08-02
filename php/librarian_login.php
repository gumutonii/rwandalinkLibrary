<?php 
session_start();
include 'connection.php';

    $lb_email=$_POST['lb_email'];
    $lb_password=$_POST['lb_password'];
    $select_librarian="SELECT * FROM librarian WHERE lb_email='$lb_email' AND  lb_password='$lb_password'";
    $cselect_librarian=$connect->prepare($select_librarian);
    $cselect_librarian->execute();
    $row_cselect_librarian=$cselect_librarian->fetch(PDO::FETCH_ASSOC);
    if ($row_cselect_librarian) {
        $_SESSION['lb_id']=$row_cselect_librarian['lb_id'];
        $start = 'success';
        $message ="Librarian/index.php";
        echo json_encode(array([$start,$message]));
    }
    else
    {
      $start = 'error';
      $message ="Invalid Account !!!";
      echo json_encode(array([$start,$message]));
    }


 ?>