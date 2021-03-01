<?php
error_reporting (E_ALL ^ E_NOTICE);
//require_once("../../../engine/connection.php");
$serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 
include './Status_db.php';
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Leave Status
        </title>
    </head>
    <?php include '../../../header.php';?>
    <body>
       
<!--Heading-->
<div class="pt-2 "style="width:100%">
            <div style="margin-top: 55px;">
                <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                    <div style="margin-top: auto;">
                        <h1 class="title text-center"><strong>Leave Status</strong></h1>
                    </div>
                </div>
            </div>
      
      
            <div class="row" style="">
                <div class="col-md-2 mb-3">
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

                <div class="col-md-10">
                    <?php
                        if (sqlsrv_num_rows($stmt) > 0) {
                            //for ($i=0; $i < sqlsrv_num_rows($stmt); $i++) {  
                    ?>
                        <table class="table table-striped table-dark" style="border-radius:2px">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Type of leave</th>
                                    <th scope="col">start date</th>
                                    <th scope="col">end date</th>
                                    <th scope="col">days off</th>
                                    <th scope="col">days have</th>
                                        <th scope="col">days left</th>
                                        <th scope="col">attachment</th>
                                        <th scope="col">HR name</th>
                                        <th scope="col">appoval date</th>
                                        <th scope="col">appoval status</th>



                                </tr>
                            </thead>
                            <?php

//while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC )) {
    for ($i=0; $i < sqlsrv_num_rows($stmt); $i++) {
    
        $row = sqlsrv_fetch_array( $stmt,SQLSRV_FETCH_NUMERIC,   SQLSRV_SCROLL_ABSOLUTE   ,  $i  );
?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo  trim($row[0])?>
                                        </td>
                                        <td>
                                            <?php echo date_format($row[1],'Y-m-d');?>
                                        </td>
                                        <td>
                                            <?php echo  trim($row[2]);?>
                                        </td>
                                        <td>
                                            <?php echo date_format($row[3],'Y-m-d');?>
                                        </td>
                                        <td>
                                            <?php echo date_format($row[4],'Y-m-d');?>
                                        </td>
                                        <td>
                                            <?php echo  trim($row[5]);?>
                                        </td>
                                        <td>
                                            <?php echo trim($row[6]);?>
                                        </td>
                                        <td>
                                            <?php echo trim($row[7]);?>
                                        </td>
                                        <td>
                                            <?php echo trim($row[8]);?>
                                        </td>
                                        <td>
                                            <?php echo trim($row[9]);?>
                                        </td>
                                        <td>
                                            <?php echo date_format($row[10],'Y-m-d');?>
                                        </td>
                                        <td>
                                            <?php echo trim($row[11]);?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php

}
?>

                        </table>

                        <?php
}
else{
    echo "No result found";
}
sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);  
?>
                
            </div>

        </div>
</div>


        </div>
        </div>
       
    </body>

    </html>