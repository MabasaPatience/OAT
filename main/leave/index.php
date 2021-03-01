<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php

error_reporting (E_ALL ^ E_NOTICE);

include("../../Session.php");
?>
<head>
    <link href="pageicon.png" type="image/png" rel="icon"></link>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Leave Form</title>

    <script src="../../src/js/leaveValidate.js"></script>


    <!-- <style>
    
            body{
            
                background-image:url("../img/bg.jpg");
            }
        
        label{margin-top: 10px;}
            </style> -->


</head>
<script>
    function foo() {
        alert("submit button clicked")
        return true;
    }
</script>

<!--<div class="header"style="background-color:black;height:50px;margin-bottom:12px">-->
<?php include("../../header.php") 


?>

<body class="container leave_labels">
<div class="container pt-2 leave_labels">
        <div style="margin-top: 55px;">
            <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                <div style="margin-top: auto;">
                    <h1 class="title text-center"><strong>Apply for leave</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 pt-2">
                <nav class="navbar" style="background:linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799)); border-radius: 20px;">
                    <div class="navbar-nav" id="navb">
                        <ul class="navbar-nav text-white text-center">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./index.php" target="_blank">&nbsp;&nbsp;Apply for leave</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./php/LeaveStatus.php" target="_blank">&nbsp;&nbsp;Check status</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-md-10 pt-2" id="form1">
                <form class="container blog" name="myForm" action="./php/display.php" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST">
                    <h5>Leave type<h5>
				   <div class="row">			  
				             <div class="col-md-4 "style="font-size:15px"id="r3"><input type="radio"name="leaveType"value="Anual Leave">Annual Leave</div>
                             <div class="col-md-4 "style="font-size:15px"id=" r3"><input type="radio"name="leaveType"value="sick leave">Certified Sick Leave </div>
                             <div class="col-md-4 "style="font-size:15px"id=" r3"><input type="radio"name="leaveType" value="Uncertified sick leave">Uncertified Sick Leave</div>	                                                    
                    </div>
					<hr>
                     <div class="row ">
				  
				             <div class="col-md-4 "style="font-size:15px;"id=" r3"><input type="radio"name="leaveType" value="family Resposebility">Family Resposebility Leave</div>
                             <div class="col-md-4 "style="font-size:15px"id=" r3"><input type="radio"name="leaveType"value="Unpaid Leave" >Unpaid Leave</div>
	                         <div class="col-md-4 "style="font-size:15px"id=" r3"><input type="radio"name="leaveType"value="Unpaid Maternity leave">Unpaid Maternity Leave</div>                          
                      </div>
					  <hr>
					  <div class="row">
					  <div class="col-md-6 "style="font-size:15px"id=" r3"><label>Start date<label></div>
					 <div class="col-md-6 "><input class="form-control input" type="date" name="StartDate" id="StartDate">
					  </div> 
					  </div>
					     <div class="row">
					  <div class="col-md-6 "style="font-size:15px"id=" r3"><label>End date<label></div>
					  <div class="col-md-6 "><input class="form-control input" type="date" name="EndDate" id="EndDate">
					  </div>   
                      </div>
					  <div class="row">
					  <div class="col-md-6 "style="font-size:15px"id=" r3"><label>Number of days<label></div>
					  <div class="col-md-6 "><input class="form-control input" type="text" name="NumberOfDaysWorked">
					  </div>                               
					  </div>
					  <div class="row">
					  <div class="col-md-6 "style="font-size:15px"id=" r3"><label>Comment<label></div>
					  <div class="col-md-6 "><textarea class="form-control" style="background:transparent; border: 1px solid"  row="3" cols="30" name="comment" placeholder="Enter your comment"></textarea>
					  </div>                               
					  </div>
					  <div class="row">
					  <div class="col-md-6 "style="font-size:15px"id=" r3"><label>File<label></div>
					  <div class="col-md-6 "><input type="file"style="margin-top:5px" name="myfile" accept="pdf">
					  </div>                               
					  </div>
					  <input class="btn btn-primary" type="submit" name="submit" id="lButton">
					  
</div>					  
                                       

                </form>

                <hr>

            </div>
        </div>
    </div>
   
</body>

</html>


