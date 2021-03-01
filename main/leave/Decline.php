<?php

$serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 
error_reporting (E_ALL ^ E_NOTICE);

include("../../Session.php");

//require_once("../../engine/connection.php");


$Leaveid=$_REQUEST["Leave_ID"];



    $todaysData= date("Y-m-d");
    $approved="Declined";



    $tsql="UPDATE OATLeaves SET Employer_name='$name',Approval_date='$todaysData',Approval='$approved' WHERE Leave_ID='$Leaveid'";  

//Execute the query.    

$stmt = sqlsrv_query($conn, $tsql);    

if ( $stmt )    
    {    
        $pproved= "Information Updated.";
        
      
        include 'login.php';
    }     
    else     
    {    
        $pproved = "Update failed.";
         die(print_r(sqlsrv_errors(), true));  
           
    }  
?>