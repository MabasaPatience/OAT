<?php
error_reporting (E_ALL ^ E_NOTICE);
#starts a new session

//include "./engine/connection.php";
$serverName = " DESKTOP-EF9OI8N\SQLEXPRESS";   
$uid = "";     
$pwd = "";    
$databaseName = "OAT";   

$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo); 



include("Session.php");

$date=date_default_timezone_set("South Africa/Johannesburg");
//$date=date('Y-m-d');
 $empid = $_SESSION['Emp_ID'];
 
$sql=("SELECT OATPosts.post_date,OATPosts.Post_messages,OATPosts.title,Employees.Email, Employees.Firstname
FROM OATPosts 
INNER JOIN Employees ON OATPosts.EmployeeID = Employees.Emp_ID 
ORDER BY post_date DESC");
$stmt = sqlsrv_query( $conn, $sql );

//$rst = array();
$smg = array();
$title= array();
$time= array();
$date= array();
$email= array();
$Firstname = array();
  
//echo "<span style ='margin-bottom:55px;font-size: 17px;'>" . $row['message'].'</span><br>';
while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
    {
        
        $smg[] =  $row['Post_messages'];
        $title[]= $row['title'];
       // $time[]= date_format($row['post_date'], 'H:i:s ');
        $date[]= date_format($row['post_date'], 'Y-m-d ');
        $email[]=  $row['Email'];
        $Firstname[]=$row['Firstname'];
        
        //$rst[] = $row['email'], $row['message'], $row['tittle'], date_format($row['post_date'], 'Y-m-d '), date_format($row['post_date'], 'H:i:s ');
    }

    //Fetching the profile image
    $spp = ("SELECT Profile_Image from Employees WHERE Emp_ID = $empid;");

    $stmtpp = sqlsrv_query( $conn, $spp );

    while($row = sqlsrv_fetch_array( $stmtpp, SQLSRV_FETCH_ASSOC)){ 
       $pp = $row['Profile_Image'];
    }

  sqlsrv_close($conn);

?>

    <!DOCTYPE html>
    <html lang="en">

   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usera</title>
</head>

<?php include("header.php") ?>

    <body class="container">
	
        <!--Heading-->
        <div class="container pt-2">
		
            <div style="margin-top: 55px;">
                <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                    <div style="margin-top: auto;">
                        <h1 class="title text-center"><strong>Welcome to OAT Project</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <main class="main pt-1" role="main">
           
                <div class="row">
                    <div class="col-md-8">
                         <!-- /.card -->
                         <article class="card mb-4 text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                            <header class="card-header" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-meta">
                                    <span style="float: left;">
                                       
                                     <strong style="padding-left: 20px; top: -100px;"><?php echo $Firstname[0] ?></strong>
                                    </span>
                                    <strong style="padding-left: 20px; top: -100px;"><?php echo $email[0] ?></strong>
                                    <span style="float: right;">
                                        <h3><strong><?php echo $title[0] ?></strong></h3>
                                        <strong>Posted on</strong>&nbsp;&nbsp;
                                        <?php echo $date[0] ?>&nbsp;&nbsp;<strong>at</strong>&nbsp;&nbsp;<?php echo $time[0] ?>
                                    </span>
                                </div>
                            </header>
                            <div class="card-body" style="float: right;">
                                <?php echo $smg[0] ?>
                            </div>
                        </article>
               
                        <!-- /.card -->
                        <article class="card mb-4 text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                            <header class="card-header" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-meta">
                                    <span style="float: left;">
                                       
                                    <strong style="padding-left: 20px; top: -100px;"><?php echo $Firstname[1] ?></strong>
                                    </span>
                                    <strong style="padding-left: 20px; top: -100px;"><?php echo $email[1] ?></strong>
                                    <span style="float: right;">
                                        <h3><strong><?php echo $title[1] ?></strong></h3>
                                        <strong>Posted on</strong>&nbsp;&nbsp;
                                        <?php echo $date[1] ?>&nbsp;&nbsp;<strong>at</strong>&nbsp;&nbsp;<?php echo $time[1] ?>
                                    </span>
                                </div>
                            </header>
                            <div class="card-body" style="float: right;">
                                <?php echo $smg[1] ?>
                            </div>
                        </article>
                        <!-- /.card -->
                        <article class="card mb-4 text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                            <header class="card-header" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-meta">
                                    <span style="float: left;">
                                       <strong style="padding-left: 20px; top: -100px;"><?php echo $Firstname[2] ?></strong>
                                    </span>
                                    <strong style="padding-left: 20px; top: -100px;"><?php echo $email[2] ?></strong>
                                    <span style="float: right;">
                                        <h3><strong><?php echo $title[2] ?></strong></h3>
                                        <strong>Posted on</strong>&nbsp;&nbsp;
                                        <?php echo $date[2] ?>&nbsp;&nbsp;<strong>at</strong>&nbsp;&nbsp;<?php echo $time[2] ?>
                                    </span>
                                </div>
                            </header>
                            <div class="card-body" style="float: right;">
                                <?php echo $smg[2] ?>
                            </div>
                        </article>
                        <article class="card mb-4 text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                            <header class="card-header" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-meta">
                                    <span style="float: left;">
                                         <strong style="padding-left: 20px; top: -100px;"><?php echo $Firstname[3] ?></strong>
                                    
                                    </span>
                                    <strong style="padding-left: 20px; top: -100px;"><?php echo $email[3] ?></strong>
                                    <span style="float: right;">
                                        <h3><strong><?php echo $title[3] ?></strong></h3>
                                        <strong>Posted on</strong>&nbsp;&nbsp;
                                        <?php echo $date[3] ?>&nbsp;&nbsp;<strong>at</strong>&nbsp;&nbsp;<?php echo $time[3] ?>
                                    </span>
                                </div>
                            </header>
                            <div class="card-body" style="float: right;">
                                <?php echo $smg[3] ?>
                            </div>
                        </article>
                        <!-- /.card -->
                        <article class="card mb-4 text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                            <header class="card-header" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-meta">
                                    <span style="float: left;">
                                        <img class="rounded-circle smaller-img" src="<?php echo '../../src/img/icons/'.$img[4];?>" alt="Profile Picture">
                                    
                                    </span>
                                    <strong style="padding-left: 20px; top: -100px;"><?php echo $email[4] ?></strong>
                                    <span style="float: right;">
                                        <h3><strong><?php echo $title[4] ?></strong></h3>
                                        <strong>Posted on</strong>&nbsp;&nbsp;
                                        <?php echo $date[4] ?>&nbsp;&nbsp;<strong>at</strong>&nbsp;&nbsp;<?php echo $time[4] ?>
                                    </span>
                                </div>
                            </header>
                            <div class="card-body" style="float: right;">
                                <?php echo $smg[4] ?>
                            </div>
                        </article>
                        <!-- /.card -->
                    </div>

                    <!--Side Cards-->
                    <div class="col-md-4 ml-auto">
                        <aside class="sidebar">
                            <div class="card mb-4 text-white text-center" style="border-radius:20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-header">
                                    <h1 class="card-text" style="margin-bottom: -35px;">Calender</h1>
                                </div>
                                <div class="card-body">
                                    <div class="calendar-wrapper" style="align-content: auto;">
                                        <button id="btnPrev" type="button">Prev</button>
                                        <button id="btnNow" type="button">Now</button>
                                        <button id="btnNext" type="button">Next</button>
                                        <div id="divCal"></div>
                                    </div>
                                </div>
                            </div>

                        </aside>

                        <!-- <aside class="sidebar sidebar-sticky">
                            
                            <div class="card mb-4 text-white text-center" style="border-radius:20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-body">
                                    <h1 class="card-title">Special days of this month</h1>
                                </div>
                            </div>
                          
                            <div class="card mb-4 text-white text-center" style="border-radius:20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                                <div class="card-body">
                                    <h1>Things to do today</h1>
                                </div>
                            </div>
                            /.card -->
                        </aside>
                    </div>

                </div>
            
        </main>

        <script>
            var today = new Date();
            document.getElementById("today").innerHTML = today;
        </script>
        <script src="/OATFinalTHATO/Welcome/src/js/Calender.js"></script>

        <?php 
            include("./main/bot/welcome.php") 
        ?>
        
    </body>
    <?php include("footer.php") ?>

    </html>
