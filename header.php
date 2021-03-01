<?php
#starts a new session

//include "./engine/connection.php";


error_reporting (E_ALL ^ E_NOTICE);

include("Session.php");
//$empid=$row['employeeID'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <base href="http://www.websrv.hages.co.za/" target="_blank"> -->
		    <link rel="stylesheet" href="/OAT/src/css/Calender.css">
			
        <link rel="stylesheet" href="/OAT/src/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/OAT/src/css/Custom.css">
		<script src="/OAT/src/js/Calender.js"></script>
        <script src="/OAT/src/js/bootstrap/bootstrap.min.js"></script>
        <script src="/OAT/src/js/Calender.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>

    <body class="">
        <header>
            <!--Menu Navigation bar-->
            <div class="fixed-top">
                <nav class="navbar navbar-expand-md navbar-dark mb-5" style="background:black; border-radius: 5px;">
                    <div class="container-fluid">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <h6 class="text-white"></h6>
      
                        <?php echo"<td><a class='nav-link text-white'  style='text-decoration: none;' href ='../profile/profile.php?employeeid=$empid' target='_blank'><i class='fas fa-user-secret'></i>&nbsp;<strong>&nbsp;&nbsp; $name $surname</strong></a>" ?>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ml-auto">
                                <ul class="navbar-nav text-center">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/welcome.php" target="_blank" style=" color: white; padding-right:20px;"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/users/list.php" target="_blank"><i class=" fas fa-users"></i>&nbsp;&nbsp;Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/portal/custom.html" target="_blank"><i class="fas fa-network-wired"></i>&nbsp;&nbsp;Network Portal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/booking/Booking.php" target="_blank"><i class=" fas fa-book"></i>&nbsp;&nbsp;Booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/leave/" target="_blank"><i class="fas fa-plane-departure"></i>&nbsp;&nbsp;Leave Request</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/blog/blog.php" target="_blank"><i class=" fas fa-blog"></i>&nbsp;&nbsp;New Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/contact/ContactsUs.php" target="_blank"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/main/about/index.php" target="_blank"><i class=" fas fa-info"></i>&nbsp;&nbsp;About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/OAT/logout.php" style="color: white;"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Sign out&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </body>

    </html>