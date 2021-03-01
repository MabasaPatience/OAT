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

    $name = $_REQUEST['name'];
    $Lname = $_REQUEST['lastname'];
	 $Identity_no = $_REQUEST['Identity_no'];
    $email = $_REQUEST['email'];
    $dob = $_POST['dob'];
    $gender = $_REQUEST['gender'];
    $role = $_REQUEST['position'];
    $manager = $_REQUEST['manager'];
    $pass = $_REQUEST['passcode'];
    //$pic = $_REQUEST['image'];
    $cell = $_REQUEST['cellphone'];
	  $image = $_FILES['image']['name'];
//     $image = $_FILES['image']['tmp_name'];
//     $pic = file_get_contents($image);

    //Password_hash() capacity is beyond 60 characters,
    //setting the column size to 255 might be a good choice.

    $options = array("cost"=>4);
    $passHashed = password_hash($pass,PASSWORD_BCRYPT,$options);
    //$passHashed = password_hash($pass,PASSWORD_DEFAULT);

if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
  

    // destination of the file on the server
   
    // get the file extension
    $extension = pathinfo($image, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
   $target = "src/img/icons/" .basename($_FILES['image']['name']);
    //$destination = 'imge/'.basename($image);
    $tsql = "insert into Employees (Firstname, Lastname,Identity_no, Email, Birth_Date, Passwords, Gender, Position, Managers_name,Contact_no,Profile_Image) 
    values ('$name','$Lname','$Identity_no','$email','$dob', '$pass', '$gender', '$role', '$manager', '$cell','$image')";

    //Execute the query. 
    $stmt = sqlsrv_query( $conn, $tsql);

    if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
        echo "You file extension must be jpg jpeg png";
    
    } else 
          {
        // move the uploaded (temporary) file to the specified destination

        if (move_uploaded_file($file,$target)) {
			
          header("location: index.php");
            
               
            }     
            else     
            {    
               
                 die( print_r( sqlsrv_errors(), true));  
                   
            }         
    }

}
    
       // $output=$something;
       // echo $output;
    /* Free statement and connection resources. */    
    sqlsrv_free_stmt( $stmt);    
    sqlsrv_close( $conn);
?>       