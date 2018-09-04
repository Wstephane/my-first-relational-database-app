<?php
  try
  {
    $db = new PDO('mysql:host=mysqldb;dbname=cogip;charset=utf8', 'root', 'root'); 
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
?>

