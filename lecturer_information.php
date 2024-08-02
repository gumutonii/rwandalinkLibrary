<?php 
include 'php/connection.php';
$r_email=$_GET['r_email'];

$show_student="SELECT * FROM lecturer WHERE r_email='$r_email' ";
 $cshow_student=$connect->prepare($show_student);
 $cshow_student->execute();
 $row_cshow_student=$cshow_student->fetch(PDO::FETCH_ASSOC);
if ($row_cshow_student) {
	echo "yes";
}
else
{
	echo "no";
}






 ?>