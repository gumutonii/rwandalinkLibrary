<?php 
include 'connection.php';
session_start();
    $s_email=$_POST['s_email'];
    $s_password=$_POST['s_password'];
    $select_student="SELECT * FROM student WHERE s_email='$s_email' AND s_password='$s_password'";
    $cselect_student=$connect->prepare($select_student);
    $cselect_student->execute();
    $row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC);
    if ($row_cselect_student) {
        $_SESSION['s_id']=$row_cselect_student['s_id'];
        $_SESSION['s_regno']=$row_cselect_student['s_regno'];

        $start = 'success';
        $message ="Student/index.php";
        echo json_encode(array([$start,$message]));
    }
    else
    {
      $start = 'error';
      $message ="Invalid Account !!!";
      echo json_encode(array([$start,$message]));
    }






 ?>