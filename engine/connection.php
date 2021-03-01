<?php
$serverName = "filesrv.hages.co.za\HU1";   
$uid = "sa";     
$pwd = "Hages12345!";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 
?>