<?php
//require_once("../../../engine/connection.php");
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
include './addleave_db.php'; //addited
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>

        </title>
        <style>
            td {
                border: 2px solid black;
            }
            
            body {
                background-image: url("../img/bg.jpg");
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/Custom1.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>


    <?php include '../../../header.php';?>

    <body>
        <div class="container">
            <div style="margin-top: 55px;">
                <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                    <div style="margin-top: auto;">
                        <h1 class="title text-center"><strong>Submitted Leave</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-md-2 ">
                    <nav class="navbar " style="background:linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799)); border-radius: 20px;">
                        <div class="navbar-nav" id="navb">
                            <ul class="navbar-nav text-center">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="../index.php" target="_blank">&nbsp;&nbsp;Apply for leave</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="./LeaveStatus.php" target="_blank">&nbsp;&nbsp;Check status</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-8 inputs" id="form1">


                    <table class="table table-striped table-dark" style="color:white; border-radius:20px">
                        <tbody>
                            <tr>
                                <th scope="col"><label>Leave type :</th>
<td ><?php echo  $leaveType; ?></td>
</tr>
<tr >
        <th scope="col">Date requested:</th>
<td ><?php echo  $todaysDate; ?></td>
</tr>

<tr>
    <th scope="col"class="col-md-2" >Start Date:</th>
<td class="col-md-2"><?php echo $StartDate; ?></td>
</tr>
<tr>
    <th scope="col">End Date</td>

    <td><?php echo $EndDate; ?></td>
</tr>


<tr>
    <th scope="col">Number of days you took:</th>
 <td><?php echo $totalDay; ?></td>
</tr>
<tr>
        <th scope="col">Number of days you have:</th>
<td ><?php echo $days_have; ?></td>
</tr>
<tr>
        <th scope="col">number of days left :</th>
<td ><?php echo $days_left; ?></td>
</tr>

</table>

</div>

<div class="col-md-2">

               
</div>
</div>
</div>
<?php include '../../../footer.php';?>
</body>
</html>