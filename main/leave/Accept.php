
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
$Leaveid=$_REQUEST["Leave_ID"];

    $todaysDate= date("Y/m/d");
    $approved="Approved";

    $tsql="UPDATE OATLeaves SET Employer_name='$name',Approval_date='$todaysDate',Approval='$approved' WHERE Leave_ID='$Leaveid'";  

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
         die( print_r( sqlsrv_errors(), true));  
           
    }  
?>
