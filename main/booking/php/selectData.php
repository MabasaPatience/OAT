<link rel="stylesheet" href="/src/css/bootstrap/bootstrap.min.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
<link rel="stylesheet" href="/src/css/Custom.css">
<style>
    body {
        margin: auto;
        width: 100%;
        text-align: center;
        background: transparent;
    }
    
    h2 {
        color: Black;
        font-family: cursive;
    }
    
    .select-style {
        width: 200px;
        padding: 8px;
        font-size: 18px;
        margin-top: 25px;
        color: blue;
        background: azure;
        border-radius: 5px;
    }
    
    table,
    th,
    td {
        border-collapse: collapse;
    }
    
    th,
    td {
        padding: 15px;
        text-align: center;
    }
    
    table#t01 {
        width: 100%;
        background-color: #f1f1c1;
    }
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
session_start();
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
/* Connect using SQL Server Authentication. */    
//$conn = sqlsrv_connect( $serverName, $connectionInfo); 
//require_once("../../../engine/connection.php");
// if(!isset($_SESSION["employeeID"])){
//     header("location: ../../../login.html");
// }

if(isset($_SESSION["employeeID"]) && isset($_SESSION["f_name"]) && isset($_SESSION["l_name"])){

    $empid = $_SESSION['employeeID'];
    $name = $_SESSION['f_name'];
    $surname = $_SESSION['l_name'];
}

$sql=("SELECT * FROM OATBookings ORDER BY booking_id DESC");
$stmt = sqlsrv_query( $conn, $sql );
if (isset($_GET['de']) == 3) {
 
    $delmsg=' <div class="alert alert-danger alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Cancelled!</strong> You have successfully Cancelled your Booking.
   </div>';
   }
?>

    <table style="width:5%">
        <tr>
            <th>Booking Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Room Number</th>
            <th>Option</th>
        </tr>
        <?php while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))

{
  $id=$row['booking_id'];
  $bookEmployee=$row['employeeID'];
  $date=date_format($row['booking_date'], 'm-d-Y');
  $starttim=date_format($row['start_time'], 'H:i:s ');
  $endtym=date_format($row['end_time'], 'H:i:s ');
  ?>
        <tr>
            <td>
                <?php  echo date_format($row['booking_date'], 'd-m-Y'); ?>
            </td>
            <td>
                <?php echo date_format($row['start_time'], 'H:i:s ');?>
            </td>
            <td>
                <?php echo date_format($row['end_time'], 'H:i:s ');?>
            </td>
            <td>
                <?php echo $row['room_number'];?>
            </td>
            <?php  
            if($bookEmployee==$empid){
                $now = new DateTime();
                $today = date("m-d-Y");
                $time=date('H:i:s');
                // $today=date_format($now, 'd-m-Y');
if($date<=$today && $time>$starttim){
    // echo"<td><a class='btn-danger form-control' href ='./deleteData.php?bo_id=$id'>Cancel</a>";
    if($time>$starttim && $time<$endtym){
        echo"<td><a href ='./deleteData.php?bo_id=$id' class='btn btn-warning form-control disabled' role='button' aria-disabled='true'>Session</a></td>"; 
    }else{
echo"<td><a href ='./deleteData.php?bo_id=$id' class='btn btn-danger form-control disabled' role='button' aria-disabled='true'>Attended</a></td>"; 
}
}else{
    echo"<td><a class='btn-success form-control' href ='./deleteData.php?bo_id=$id'>Cancel</a>";
    // echo "<script type='text/javascript'>alert('successfully Deleted!')</script>";
}
               
          
            }else{

                if($date<=$today && $time>$starttim){
                    if($time>$starttim && $time<$endtym){
                        echo"<td><a href ='./deleteData.php?bo_id=$id' class='btn btn-warning form-control disabled' role='button' aria-disabled='true'>Session</a></td>"; 
                    }else{
                echo"<td><a href ='./deleteData.php?bo_id=$id' class='btn btn-danger form-control disabled' role='button' aria-disabled='true'>Attended</a></td>"; 
            }
        }
        }



            ?>

        </tr>
        <?php } sqlsrv_close($conn); ?>
    </table>
    <script>
    function reallySure (event) {
    var message = 'Are you sure you want to cancel your Booking?';
    action = confirm(message) ? true : event.preventDefault();
  
}
var aElems = document.getElementsByTagName('a');

for (var i = 0, len = aElems.length; i < len; i++) {
    aElems[i].addEventListener('click', reallySure);
}

</script>