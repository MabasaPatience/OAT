<?php
//include 'php/Connection.php';
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
 $EmployeeID=$_POST['EmployeeID'];

$tsql = " SELECT * FROM OATLeaves Where employeeID=$EmployeeID";

//$stmt = sqlsrv_query( $conn, $tsql);    
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $tsql , $params, $options );

?>