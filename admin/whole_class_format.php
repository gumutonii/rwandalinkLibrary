<?php 

include '../php/connection.php';


	$d_id=$_POST['d_id'];
	$o_id=$_POST['o_id'];
	$y_id=$_POST['y_id'];
	$academic_year=$_POST['academic_year'];
	$program=$_POST['program'];
	$study_mode=$_POST['study_mode'];
	$s_status=$_POST['s_status'];
	echo "upload_whole_class.php?&&d_id=$d_id&&o_id=$o_id&&y_id=$y_id&&program=$program&&study_mode=$study_mode&&academic_year=$academic_year&&s_status=$s_status";



 ?>