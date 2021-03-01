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
include("../../Session.php");

        $tsql = "select Firstname, Lastname, Profile_Image, Emp_ID from Employees";

        $stmt = sqlsrv_query( $conn, $tsql );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../../src/css/list.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usera</title>
</head>

<?php include("../../header.php") ?>

<body class="container">

    <!--Heading-->
    <div class="container pt-2">
        <div style="margin-top: 55px;">
            <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                <div style="margin-top: auto;">
                    <h1 class="title text-center"><strong>Users</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2" style="margin-left:10%;">
        <div class="div1">
        <?php while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
{ 
    //$empid=$row['employeeID'];
    $empid=$row['Emp_ID'];
    $image = $row['Profile_Image'];
    // $image_src = '/home/cta15/Desktop/'.$image;

    ?>
            <div class="person">
                <div>
                
                      <img class="img" src='<?php echo '../../src/img/icons/'.$row['Profile_Image'];?>'>
             
                </div>
                <div class="bdy">
                    <p class="p">Name:  <?php echo $row['Firstname']; ?> </p>
                    <p class="p">Lastname: <?php echo $row['Lastname']; ?> </p>
                    <!-- <a href="<?php  ?>">View<i class="fa fa-eye"></i></a> -->
                    <div class="eye">
                        <?php  echo"<td><a style='text-decoration: none;' href ='./profile.php?employeeid=$empid'>View</a>" ?>
                    </div>
                </div>
            </div>
<?php }?>
        </div>
    </div>

    <?php include("../../footer.php") ?>
</body>

</html>