<?php 
        $serverName = "filesrv.hages.co.za\HU1";   
        $uid = "sa";     
        $pwd = "Hages12345!";    
        $databaseName = "OAT";

        $connectionInfo = array( "UID"=>$uid,                              
        "PWD"=>$pwd,                              
        "Database"=>$databaseName); 

        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        
        $emp=$_REQUEST["employeeid"];
        $role = $_REQUEST['position'];
        $manager = $_REQUEST['manager'];
        $status = "Approved";

        $tsql = "update Employees
        set job_type = '$role', employer_name = '$manager', status = '$status'
        where employeeID = '$emp'";

        $stmt = sqlsrv_query( $conn, $tsql );
?>
        <script>
                window.location = 'list.php';
        </script>
<?php 

?>