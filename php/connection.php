<?php 
$servername ="localhost";
$username = "root";
$password = "";
// error_reporting(0);
try {
  $connect = new PDO("mysql:host=$servername;dbname=rwanda_link_library", $username, $password,
    array(
  PDO::MYSQL_ATTR_LOCAL_INFILE =>true,
  PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
)
);

 
} catch(PDOException $e) {
  echo "Connection failed";
}

 ?>