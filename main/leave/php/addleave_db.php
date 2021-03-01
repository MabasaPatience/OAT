<?php




error_reporting (E_ALL ^ E_NOTICE);

include("../../../Session.php");

$empid = $_SESSION['Emp_ID'];
$todaysDate=date("Y/m/d");
$leaveType = $_POST['leaveType'];
$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];

$Date1= strtotime($StartDate);
$Date2 = strtotime($EndDate);
$diff= $Date1-$Date2;
$totalDay =  floor($diff/(60*60*24));
$days_have=5;
$days_left=$days_have+($totalDay);

if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    
        //Email information   
        

    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../attachments/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $tsql = "insert into OATLeaves (Request_date, Leave_type, Starting_date,End_date,Num_days_took, Num_days_have,Days_left, Attachments,Approval_date,EmployeeID) 
    values ('$todaysDate' ,'$leaveType','$StartDate','$EndDate','$totalDay ','$days_have','$days_left','$filename','$todaysDate','$empid')";   
    
	
    //Execute the query.    
    
    $stmt = sqlsrv_query( $conn, $tsql);    
    
    if ( $stmt )    
    {    
         $something = "Submission successful.";
    }     
    else     
    {    
         $something = "Submission unsuccessful.";
         die( print_r( sqlsrv_errors(), true));  
           
    }  

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 9000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else 
    
    {
        // move the uploaded (temporary) file to the specified destination

        if (move_uploaded_file($file, $destination)) {

           
            
        } else {

            echo "Failed to upload file.";
        }
    }

}

    $output=$something;
    echo $output; 

sqlsrv_free_stmt( $stmt);    
sqlsrv_close( $conn); 



?>