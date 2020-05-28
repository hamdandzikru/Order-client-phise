<?php
    $servername='localhost';
    $username='id13741183_client123';
    $password='8AAr4O$TTkxSz9x3';
    $dbname = "id13741183_phise";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>