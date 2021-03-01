<?php


require_once("../../../engine/connection.php");
// if(!isset($_SESSION["employeeID"])){
//     header("location: ../../login.html");
// }

// if(isset($_SESSION["email"]) && isset($_SESSION["f_name"]) && isset($_SESSION["l_name"])){
//     $mail = $_SESSION['email'];
//     $name = $_SESSION['f_name'];
//     $surname = $_SESSION['l_name'];
// }
	$id=$_REQUEST['bo_id'];
    
    $sql=("DELETE FROM OATBookings WHERE booking_id=$id") or(sqlsrv_error("record not deleted"));

	$stmt = sqlsrv_query( $conn, $sql );
    
    header("location:./selectData.php?de=3");

sqlsrv_close($conn); 
?>