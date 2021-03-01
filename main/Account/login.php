<?php

error_reporting (E_ALL ^ E_NOTICE);
//starts a new session
session_start();

//includes a database connection
// DATABASE CONNECTION STUFF GOES HERE
//include_once("./engine/connection.php");

$serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 

//catches user/password submitted by html form
//$name = $_REQUEST['email'];
$user = $_POST['email'];
$password = $_POST['passcode'];
$error_fill ="";
$error_log ="";

//checks if the html form is filled
if (isset($_POST['submit'])) {
if(empty($user) || empty($password)){
    //echo "Fill all the fields!";
    $error_fill = "Fill all the fields!";
}else{

//searches for user and password in the database
$query = "SELECT * FROM Employees WHERE Email='{$user}' AND Passwords='{$password}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'


//$status = "SELECT status FROM Employees";
//$rst = sqlsrv_query($conn, $status);

//checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

//checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
      // echo "User/password not found";
       $error_log=' <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User/password not found or you are not approved yet!</strong> Check your credentials and try again..
            </div>';
}
else{
//creates sessions


    while($row = sqlsrv_fetch_array($result)){
       $_SESSION['Email'] = $row['Email'];
       $_SESSION['Emp_ID'] = $row['Emp_ID'];
       $_SESSION['Firstname'] = $row['Firstname'];
       $_SESSION['Lastname'] = $row['Lastname'];
    }
	 header("Location: welcome.php");
}
//redirects user
    //echo " you are now logged in :)";
   
}
}

?>