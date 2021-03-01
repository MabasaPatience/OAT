

<?php 
session_start();

include("./validation.php");
$serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 
//require_once("../../../engine/connection.php");
include("Session.php");
$empid = $_SESSION['Emp_ID'];
$room=$_REQUEST["room"];
$date=$_REQUEST["dateofbirth"];
$starttime=$_REQUEST["starttime"];
$endtime=$_REQUEST["endtime"];

 
#searches for user and password in the database
// $query = ("SELECT * FROM OATBookings WHERE booking_date = '$date' AND start_time='$starttime' And end_time='$endtime'");
 $query = ("SELECT * FROM OATBookings WHERE booking_date = '$date'  And end_time>'$starttime'");


$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
$today = date("m-d-Y");
$time=date('H:i:s');
if(sqlsrv_has_rows($result) != 1){
 
     //die( print_r( sqlsrv_errors(), true));
     $tsql="INSERT INTO OATBookings(booking_date,start_time,end_time,room_number,EmployeeID)
                             VALUES('$date','$starttime','$endtime','$room','$empid')";

/* Execute the query. */    

$stmt = sqlsrv_query( $conn, $tsql);    
    header("location:../Booking.php");
  
}else{

    header("location:../Booking.php?check=1");
}
  
sqlsrv_free_stmt( $stmt);  
sqlsrv_close($conn);

?>