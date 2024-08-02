<?php 
include '../php/connection.php';

$function_name=ucwords($_POST['function_name']);
$function_data=['function_name'=>$function_name,];

$select_function="SELECT * FROM functions WHERE function_name='$function_name'";
$cselect_function=$connect->prepare($select_function);
$cselect_function->execute();
$row_cselect_function=$cselect_function->fetch(PDO::FETCH_ASSOC);
if ($row_cselect_function) {
	echo 3;
}
else{
$insert_function="INSERT INTO functions(function_name) VALUES(:function_name)";
$cinsert_function=$connect->prepare($insert_function);
$cinsert_function->execute($function_data);

if ($cinsert_function) {
	echo 2;
}
else
{
	echo 1;
}
}

 ?>