<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "phise";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>