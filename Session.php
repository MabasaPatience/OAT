<?php
session_start();

if(!isset($_SESSION["Email"])){
    header("location: ../../index.php");
}

if(isset($_SESSION["Emp_ID"]) && isset($_SESSION["Email"]) && isset($_SESSION["Firstname"]) && isset($_SESSION["Lastname"])){
    $empid = $_SESSION['Emp_ID'];
    $mail = $_SESSION['Email'];
   $name = $_SESSION['Firstname'];
  $surname = $_SESSION['Lastname'];
  
  }
   
//$empid=$row['Emp_ID'];
?>