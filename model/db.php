<?php
  try
  {
    $db = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', '03467b6eza');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
?>
