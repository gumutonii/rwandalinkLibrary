<?php 

include '../php/connection.php';

if (isset($_POST['Upload_student'])) {
$fieldSeparator=";";
$fieldEscapedBy="";
$fieldEnclosedBy='"';
$lineSeparator="\n";




$profile=$_FILES['file_upload']['name'];
  $profile_size=$_FILES['file_upload']['size'];
  $profile_type=$_FILES["file_upload"]["type"];
  $allow= array("xlsx" =>"image/xlsx", "csv" =>"image/csv");
  $ext= pathinfo($profile,PATHINFO_EXTENSION);
  if (!array_key_exists($ext, $allow)) die("<script> alert(your picture should be in formt of xlsx or Csv); window.location='admin_profile.php',</script>");
  else
  {

$select_file="select * from uploaded_class where name='$profile' ";
$pselect_file=$connect->prepare($select_file);
$pselect_file->execute();
$row_file=$pselect_file->fetch(PDO::FETCH_ASSOC);
if ($row_file) {
echo "<script>alert('This file is already exist')</script>";
echo "<script>window.location.replace('register_class.php')</script>";

}
else
{
  $data_insert=[
'profile' =>$profile,
'status_p'=>"PENDING",


  ];
move_uploaded_file($_FILES["file_upload"]['tmp_name'],"upload_class/". $profile);
$insert_class="insert into  uploaded_class(`name`,`status`) values(:profile,:status_p) ";
$pinsert_class =$connect->prepare($insert_class);
$pinsert_class ->execute($data_insert);
if ($pinsert_class) {
$file="upload_class/".$profile;

$tb="student";


$affectedRows=$connect->exec(



  "LOAD DATA LOCAL INFILE '".$file."' INTO TABLE student FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' "


);

if ($affectedRows) {
  echo "<script>alert('Load  total of $affectedRows record from this csv file')</script>";
  unlink($file);

}
else
{
    echo "<script>alert('Load  total of $affectedRows NOT record from this csv file')</script>";

}

}


}

}
}


if (isset($_POST['Upload_lecturer'])) {
$fieldSeparator=";";
$fieldEscapedBy="";
$fieldEnclosedBy='"';
$lineSeparator="\n";




$profile=$_FILES['file_upload']['name'];
  $profile_size=$_FILES['file_upload']['size'];
  $profile_type=$_FILES["file_upload"]["type"];
  $allow= array("xlsx" =>"image/xlsx", "csv" =>"image/csv");
  $ext= pathinfo($profile,PATHINFO_EXTENSION);
  if (!array_key_exists($ext, $allow)) die("<script> alert(your picture should be in formt of xlsx or Csv); window.location='admin_profile.php',</script>");
  else
  {

$select_file="select * from uploaded_lecturer where name='$profile' ";
$pselect_file=$connect->prepare($select_file);
$pselect_file->execute();
$row_file=$pselect_file->fetch(PDO::FETCH_ASSOC);
if ($row_file) {
echo "<script>alert('This file is already exist')</script>";
echo "<script>window.location.replace('register_class.php')</script>";

}
else
{
  $data_insert=[
'profile' =>$profile,
'status_p'=>"PENDING",


  ];
move_uploaded_file($_FILES["file_upload"]['tmp_name'],"upload_class/". $profile);
$insert_class="insert into  uploaded_lecturer(`name`,`status`) values(:profile,:status_p) ";
$pinsert_class =$connect->prepare($insert_class);
$pinsert_class ->execute($data_insert);
if ($pinsert_class) {
$file="upload_class/".$profile;

$tb="lecturer";


$affectedRows=$connect->exec(



  "LOAD DATA LOCAL INFILE '".$file."' INTO TABLE lecturer FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' "


);

if ($affectedRows) {
  echo "<script>alert('Load  total of $affectedRows record from this csv file')</script>";
  unlink($file);

}
else
{
    echo "<script>alert('Load  total of $affectedRows NOT record from this csv file')</script>";

}

}


}

}
}

 ?>