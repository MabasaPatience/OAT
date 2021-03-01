<?php 
       error_reporting (E_ALL ^ E_NOTICE);
	   $serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 
        $emp=$_REQUEST["employeeid"];
		//header("location: ../../index.php");
        // if ($conn){
        //     // echo "Connection Successful";
        // }
        // else{
        //     echo "Failed to connect to database!";
        //     die (print_r(sqlsrv_errors(),true));
        // }
        $tsql = "select * from Employees where Emp_ID = $emp ";

        // $params = array();
        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        // $stmt = sqlsrv_query( $conn, $tsql , $params, $options );

        // if($stmt == false){
        //     die (print_r(sqlsrv_errors(),true));
        // }

        $stmt = sqlsrv_query( $conn, $tsql );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/OATFinalTHATO/src/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/OATFinalTHATO/src/css/Custom.css">
    <script src="/OATFinalTHATO/src/js/bootstrap/bootstrap.min.js"></script>
    <script src="/OATFinalTHATO/src/js/Calender.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>

<body class="body">
    <div class="container5">
        <div class="top"></div>
        <div class="bottom"></div>
        <?php while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
        { 
        $emp=$row['Emp_ID']; 
        ?>
        <!-- <div class="inner">
            <div class="info">
                <form action="">
                    <p class="p">
                        <?php echo $row['Firstname']; ?>
                        <?php echo $row['Lastname']; ?>
                    </p>
                    <h2 class="h2">General Info:</h2>
                    <h4 class="h4">Date Of Birth:
                        <?php echo date_format($row['Birth_Date'],'Y-m-d'); ?>
                    </h4>
                    <h4 class="h4">Email:
                        <a href="" class="email">
                            <?php echo $row['Email']; ?>
                        </a>
                    </h4>
                    <h4 class="h4">Gender:
                        <?php echo $row['Gender']; ?>
                    </h4>
                    <h4 class="h4">Role:
                        <?php echo $row['Position']; ?>
                    </h4>

                    <div class="enter">
                        Position:<select name="position" class="input">
                            <option name = "position" value="administrator">Administrator</option>
                            <option name = "position" value="intern">Intern</option>
                            <option name = "position" value="hr">HR</option>
                            <option name = "position" value="network administrator">Network Administrator</option>
                    </select>
                    </div>

                    <div class="enter">
                        Employer:<select name="manager" class="input">
                            <option name = "manager" value="administrator">Ayo</option>
                            <option name = "manager" value="intern">Mercy</option>
                            <option name = "manager" value="hr">Kgomotso</option>
                    </select>
                    </div>

                    <div class="buttons">
                        <input type="submit" value="Approve" class="accept">
                        <?php  echo"<td><a class='decline' style='text-decoration: none;' href ='delete.php?employeeid=$emp'>Disapprove</a>" ?>
                    </div>
                </form>
            </div>
            <div class="photo">
                <img class="img" src='<?php echo ' ../../src/img/icons/ '.$row['imagees '];?>'>
                <img class="img" src="../../src/img/david-beckham-lede.jpg" alt="no-photo"> 
            </div>
        </div> -->
        <div class="container inner">
            <div class="info ">
                <div class="row">
                    <form method ="post" action="approve.php" class="col-sm">
                        <div class="container">
                        <p class="p">
                            <strong>
                            <?php echo $row['Firstname']; ?>
                            <?php echo $row['Lastname']; ?>
                            </strong>                        </p>
							
                        <h2 class="h2">General Info:</h2>
                        <h4 class="h4">Date Of Birth:
                            <?php echo date_format($row['Birth_Date'],'Y-m-d'); ?>
                        </h4>
                        <h4 class="h4">Email:
                            <a href="" class="email">
                                <?php echo $row['Email']; ?>
                            </a>
                        </h4>
                        <h4 class="h4">Gender:
                            <?php echo $row['Gender']; ?>
                        </h4>
                        <!-- <h4 class="h4">Role:
                            <?php echo $row['Position']; ?>
                        </h4> -->
                        <br>
                        <br>
                        <div class="h4 drop">
                            Position:<select name="position" class="input">
                                            <option name = "position" value="administrator">Administrator</option>
                                            <option name = "position" value="intern">Intern</option>
                                            <option name = "position" value="hr">HR</option>
                                            <option name = "position" value="network administrator">Network Administrator</option>
                                    </select>
                        </div>
                        <div class="h4 drop">
                            Employer:<select name="Managers_name" class="input">
                                            <option name = "Managers_name" value="administrator">Ayo</option>
                                            <option name = "Managers_name" value="intern">Mercy</option>
                                            <option name = "Managers_name" value="hr">Kgomotso</option>
                                    </select>
                        </div>

                        <div class="buttons">
                        <?php  echo"<td><a class='approve' style='text-decoration: none;' href ='approve.php?employeeid=$emp'>Approve</a>" ?> 
                        
                         <!-- <input type="submit" name="submit" class="login" value="Submit"> -->
                            <?php  echo"<td><a class='decline' style='text-decoration: none;' href ='delete.php?employeeid=$emp'>Disapprove</a>" ?>
                        </div>
                        </div>
                    </form>
                    <div class="col-sm">
                        <div class="container mt-5">
                        <div class="photo">
                            <img class="img" src='<?php echo '../../src/img/icons/'.$row['Profile_Image'];?>'>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</body>

</html>