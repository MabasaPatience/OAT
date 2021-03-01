<?php 
        $serverName = "filesrv.hages.co.za\HU1";   
        $uid = "sa";     
        $pwd = "Hages12345!";    
        $databaseName = "OAT";

        $connectionInfo = array( "UID"=>$uid,                              
        "PWD"=>$pwd,                              
        "Database"=>$databaseName); 

        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        
        $empid = $_REQUEST['employeeid'];

        $tsql = "DELETE FROM Employees WHERE employeeID = '$empid' ";

        $stmt = sqlsrv_query( $conn, $tsql );
        

?>
        <script>
                window.location = 'list.php';
        </script>
<?php 

?>
