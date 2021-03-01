<?php

//require_once("../../engine/connection.php");
include ("StatusAdmin_db.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Leave Status
        </title>
        <style>
         .approve {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 5px 5px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 15px;
         margin: 2px 2px;
         cursor: pointer;
         border-radius: 12px;
         }
         .Decline{
         background-color: red;
         border: none;
         color: white;
         padding: 5px 5px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 15px;
         margin: 2px 2px;
         cursor: pointer;
         border-radius: 12px;
         }
         </style>
    </head>
    <?php include '../../header.php';?>
    <body>
       
<!--Heading-->
<div class=" pt-2">
<div class="row" >
               
                <div class="col-md-12">

            <div style="margin-top: 55px;">
                <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                    <div style="margin-top: auto;">
                        <h1 class="title text-center"><strong>Leave Status</strong></h1>
                    </div>
                </div>
            </div>
        </div>
		</div>
		</div>
        <div class="">
            <div class="row" >
               
                <div class="col-md-12">
                    <?php
                        if (sqlsrv_num_rows($stmt) > 0) {
                            //for ($i=0; $i < sqlsrv_num_rows($stmt); $i++) {  
                    ?>
                        <table class="table table-striped table-dark" style="border-radius:20px">
                            <thead>
                                <tr>
                                
                                    <th scope="col">Date</th>
                                    <th scope="col">Type of leave</th>
                                    <th scope="col">start date</th>
                                    <th scope="col">end date</th>
                                    <th scope="col">days off</th>
                                    <th scope="col">days have</th>
                                    <th scope="col">days left</th>
                                    <th scope="col">attachment</th>
                                    <th scope="col">HR Name</th> 
                                    <th scope="col">appoval Date</th> 
                                    <th scope="col">appoval status</th> 

                                </tr>
                            </thead>
                            <?php

//while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC )) {
    for ($i=0; $i < sqlsrv_num_rows($stmt); $i++) {
    
        $row = sqlsrv_fetch_array( $stmt,SQLSRV_FETCH_NUMERIC,   SQLSRV_SCROLL_ABSOLUTE   ,  $i  );
       
        
        $LeaveID= trim($row[0]); 
    
?>
                                <tbody>
                                    <tr>
                                        
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
                                        <td>
                                            
                                       
                                        <?php  echo"<td><a class='approve'style='text-decoration: none;' href ='Accept.php?Leave_ID=$LeaveID'>Approve</a>"?>
          
                                        </td>
                                        <td>
                                        
                                        <?php  echo"<td><a class='Decline'style='text-decoration: none;' href ='Decline.php?Leave_ID=$LeaveID'>Decline</a>"?>               
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