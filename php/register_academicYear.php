<?php 
include 'connection.php';

$ac_name=$_POST['ac_name'];
$ac_status='PENDING';
$select="SELECT * FROM academic_year WHERE ac_name='$ac_name'";
$cselect=$connect->prepare($select);
$cselect->execute();
$row_cselect=$cselect->fetch(PDO::FETCH_ASSOC);
if($row_cselect){
	echo 3;
}
else
{


$year_data=[
	'ac_name'=>$ac_name,
	'ac_status'=>$ac_status,
];
$insert_year="INSERT INTO academic_year(ac_name,ac_status) VALUES(:ac_name,:ac_status)";
$cinsert_year=$connect->prepare($insert_year);
$cinsert_year->execute($year_data);
if ($cinsert_year) {
	echo 2;
}
else
{
	echo 1;
}



}




 ?>