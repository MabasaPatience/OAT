<style>

/* width */
::-webkit-scrollbar {
  width: 0px;
  height: 5px
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(2, 162, 255); 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #fff; 
}
</style>
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

            $date=date_default_timezone_set("South Africa/Johannesburg");
            //$date=date('Y-m-d');

            $sql=("SELECT OATPosts.post_date,OATPosts.Post_messages,OATPosts.title, Employees.Email 
            FROM OATPosts 
            INNER JOIN Employees ON OATPosts.EmployeeID = Employees.Emp_ID 
            ORDER BY post_date DESC");
            $stmt = sqlsrv_query( $conn, $sql );


            while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
                {
                    echo "<span style ='font-size: 17px;'> <strong>Email Address:</strong>&nbsp;&nbsp;" . $row['Email'].'</span><br>';
                    echo "<span style ='color:rgb(59, 58, 58); font-size: 13px;' ><strong> Date posted:</strong>&nbsp;" . date_format($row['post_date'], 'Y-m-d').'</span><br><br>';
                    echo "<span style ='font-size: 15px;'> <strong>Title:</strong>&nbsp;" . $row['title'].'</span><br>';
                    echo "<span style ='font-size: 17px;'>" . $row['Post_messages'].'</span><br>';
                    echo '<hr>';
                }

              sqlsrv_close($conn);
?>