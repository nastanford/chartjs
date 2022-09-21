<?php
  $db_src    = "mysql:host=localhost;dbname=php_todo";
  $db_user   = "root";
  $db_pass   = "";

  try{
    $connect = new PDO($db_src, $db_user, $db_pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOEXCEPTION $err){
    echo "Failed To Connect. Error " . $err->getMessage();
  }


?>