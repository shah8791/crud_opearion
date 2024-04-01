<?php
  define("HOSTNAME", "localhost");
  define("USERNAME", "root");
  // define("CONNECT", "root");
  define("PASSWORD", "");
  define("DATABASE", "crud_operations");


  $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

  if(!$connection){
  	die("Connection Failed");
  }
  // else{
  // 	echo "Yes, Connected";
  // }

?>