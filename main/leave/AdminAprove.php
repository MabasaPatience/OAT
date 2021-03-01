

<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="pageicon.png" type="image/png" rel="icon"></link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Leave Form</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Custom1.css">
    <!--<link rel="stylesheet" href="/Welcome/src/css/Calender.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/validate.js"></script>
    

    <style>
    
            body{
            
                background-image:url("/img/bg.jpg");
            }
        
        label{margin-top: 10px;}
            </style>

</head>
  
 <!--Menu Navigation bar-->
  
                           
<!--Heading-->
                            

 <script>
 function foo(){
 alert("submit button clicked")
 return true;
 }
 </script>

 <!--<div class="header"style="background-color:black;height:50px;margin-bottom:12px">-->

<body>
<?php include 'php/header.php';?>
        <div class="container">
                <div style="margin-top: 65px;">
                    <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                        
                        <div style="margin-top: auto;">
                            <h3 class="title text-center"><strong>Apply for leave</strong></h3>
                        </div>
                    </div>
                </div>
            </div>
 <div class="container">

                <div class="row">
 
<div class="col-md-2 ">

 <nav class="navbar " style="background:black; border-radius: 20px;">
 

<div class="navbar-nav" id="navb">
         <ul class="navbar-nav text-center">
                                                                
         <li class="nav-item">
         <a class="nav-link" href="index.php" target="_blank">&nbsp;&nbsp;Apply for leave</a>
        </li><br>
        <li class="nav-item">
 <a class="nav-link" href="php/LeaveStatus.php" target="_blank">&nbsp;&nbsp;Check status</a>
</li>

  </ul>
 </div>
 </nav> 
               
</div>
 <div class="col-md-8">

<form class="container inputs" name="myForm" action="display.php"enctype="multipart/form-data" onsubmit="return validateForm()" method="POST"method="POST">
<table>
<hr>
<tr>
<th> <label style="border-top:2px;">Type of leave</label></th>
<td style="height:150px">
<input type="radio"name="leaveType"style="width:20px;margin-bottom:30px"value="Anual Leave">Approved
<input type="radio"name="leaveType"style="width:20px; margin-left:80px;" value="sick leave"> Declaine <br>
</td>
</tr>
<!--jsjsjsiji-->
<tr>
<th><label>Start Date</label></th>



 </tr>
 

</table>
<input class="btn btn-primary"type="submit" name="submit" id="lButton">

</form>




<hr>

</div>

</div>
</div>
<?php include 'php/footer.php';?>
</body>

</html>


