<?php

#starts a new session
session_start();
error_reporting (E_ALL ^ E_NOTICE);
$serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 

include("../../../Session.php");

$empid = $_SESSION['Emp_ID'];
$title = $_POST['title'];
$messages= $_POST['messages'];


//require_once("../../../engine/connection.php");
//date_default_timezone_set("South Africa/Johannesburg");
//$date=date('Y-m-d');
$date=date("Y/m/d");
$query = "INSERT INTO OATPosts
        (post_date,title,Post_messages,EmployeeID)
        VALUES('$date','$title','$messages','$empid')";
		// $stmt = sqlsrv_query( $conn, $tsql);    
//$params1 = array($date,$_POST['messages'],$_POST['title'],$id);                       
$result = sqlsrv_query($conn,$query);

 if ( $result)    
    {    
         $something = "Submission successful.";
    }     
    else     
    {    
         $something = "Submission unsuccessful.";
         die( print_r( sqlsrv_errors(), true));  
           
    }  

//Execute the query 
 
sqlsrv_free_stmt( $result);    
sqlsrv_close( $conn); 


header("Location: ../blog.php");

?>