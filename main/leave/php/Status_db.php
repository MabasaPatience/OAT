<?php
//include 'php/Connection.php';
session_start();

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

include("../../../Session.php");

 //$todaysDate=date("Y/m/d");
 //$leaveType = $_POST['leaveType'];
// $StartDate = $_POST['StartDate'];
// $EndDate = $_POST['EndDate'];

// $Date1= strtotime($StartDate);
// $Date2 = strtotime($EndDate);
// $diff= $Date1-$Date2;
//$totalDay =  floor($diff/(60*60*24));
//$days_have=5;
//$days_left=$days_have+($totalDay);
//attachment




$tsql = "SELECT * FROM OATLeaves where EmployeeID= $empid ";

//$stmt = sqlsrv_query( $conn, $tsql);    
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $tsql , $params, $options );
 
?>