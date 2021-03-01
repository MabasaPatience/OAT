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

session_start();




#catches user/password submitted by html form
$user = $_POST['email'];
$password = $_POST['passcode'];
$EmployeeID=$_POST['EmployeeID'];

#checks if the html form is filled
if(empty($_POST['email']) || empty($_POST['passcode'])){
    echo "Fill all the fields!";
   // header("Location: login.php");
}else{

#searches for user and password in the database
$query = "SELECT * FROM Employees WHERE Email='{$user}' AND Passwords='{$password}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

#checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       echo "User/password not found";
}else{

#creates sessions
     while($row = sqlsrv_fetch_array($result)){
       $_SESSION['Email'] = $row['Email'];
       $_SESSION['Emp_ID'] = $row['Emp_ID'];
       $_SESSION['Firstname'] = $row['Firstname'];
       $_SESSION['Lastname'] = $row['Lastname'];
    }
#redirects user
    //echo " you are now logged in :)";
   include 'LeaveAdmin.php';
}
}

?>