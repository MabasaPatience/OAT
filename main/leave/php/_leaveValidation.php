<?php
// define variables and set to empty values
$leaveTypeErr =  $StartDateErr =  $EndDateErr  = "";
$leavType =  $StartDate=  $EndDate = "";
 $Date1= strtotime($StartDate);
 $Date2 = strtotime($EndDate);
 $diff= $Date1-$Date2;
$totalDay =  floor($diff/(60*60*24));
$days_have=5;
$days_left=$days_have+($totalDay);

if (isset($_POST["submit"])) {
  // process the form contents...
  if (empty($_POST['leaveType'])) {
    $leaveTypeErr = "Leave type  is required";
  }else{
    $leaveType = test_input($_POST['leaveType']);
  }
  
  if (empty($_POST['StartDate'])) {
    $StartDateErr = "Date required";
  } else {
    $StartDate = test_input($_POST['StartDate']);
  }
    
  if (empty($_POST['EndDate'] )) {
    $EndDateErr  = "Date required";
  } else {
    $EndDate = test_input($_POST['EndDate']);
  }


 
}
