<?php 
include 'connection.php';

$y_name=strtoupper($_POST['y_name']);
$select="SELECT * FROM year_study WHERE y_name='$y_name'";
$cselect=$connect->prepare($select);
$cselect->execute();
$row_cselect=$cselect->fetch(PDO::FETCH_ASSOC);
if ($row_cselect) {
	echo 3;
}else
{


$year_data=[
	'y_name'=>$y_name,
];
$insert="INSERT INTO year_study(y_name) VALUES(:y_name)";
$cinsert=$connect->prepare($insert);
$cinsert->execute($year_data);
if ($cinsert) {
	echo 2;
}
else
{
	echo 1;
}
}





 ?>