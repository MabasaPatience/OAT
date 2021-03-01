<?php 
error_reporting (E_ALL ^ E_NOTICE);
include("./php/validation.php");
//require_once("../../engine/connection.php");
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

//include("controls/datetimepicker/index.html"); 
$tomorrow = mktime(0,0,0,date("m")+1,date("d"),date("Y"));
$tdate= date("Y/m/d", $tomorrow);

 if (isset($_GET['ed']) == 2) {
 
 $msg=' <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> You have successfully booked a room.
</div>';
}elseif (isset($_GET['check']) == 1){
    $msg=' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Already booked!</strong> Sorry the booking date and time that you selected has already been booked.
  </div>';
}

if (isset($_GET['de']) == 3) {
 
    $delmsg=' <div class="alert alert-danger alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Cancelled!</strong> You have successfully Cancelled your Booking.
   </div>';
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking page</title>
</head>



<body >
<?php include("../../header.php") ?>
<div class="container">
    <div class=" pt-2">
    <?php
        function create_time_range($start, $end, $interval = '30 mins', $format = '24') {
            $time_to_Start = strtotime($start); 
            $time_to_End   = strtotime($end);
            $time_Format = ($format == '12')?'g:i:s A':'G:i:s';
        
            $current_time   = time(); 
            $time_adding   = strtotime('+'.$interval, $current_time); 
            $difference_time      = $time_adding - $current_time;
        
            $time_lists = array(); 
            while ($time_to_Start < $time_to_End) { 
                $time_lists[] = date($time_Format, $time_to_Start); 
                $time_to_Start += $difference_time; 
            } 
            $time_lists[] = date($time_Format, $time_to_Start); 
            return $time_lists; 
        }
        
        $time_lists = create_time_range('8:00', '16:30', '15 mins');
        
        ?>
        <!--Heading-->
        <div class="container mt-4">
            <div style="margin-top: 55px;">
                <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                    <div style="margin-top: auto;">
                        <h1 class="title text-center"><strong>Booking</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-2" style="margin-bottom: 20px;">
            <div class="row">
                
                <div class="col-md-6">

              <?php echo $msg ?>
                    <form class="blog formular" id="formID" method="post" onsubmit="Compare()" action="./php/insertData.php">
                        <div class="container enter" style="margin-top: 5%;">
                            <fieldset>
                                <h3 class="text-center"><strong>
                                Room</strong>
                                </h3>
                                <select class="input form-control" onclick="Compare()" name="room" id="sport" required>
                                <option value="">Choose Room</option>
                                <option value="001">001</option> 
                                <!-- <option value="002">002</option>        -->
                            </select>
                            </fieldset>
                     
                                <fieldset>
                                    <div class="text-center">
                                        <h3><strong> Time And Date
                                    </strong>
                                        </h3>
                                    </div>

                                    <div>
                                        <select class="input form-control" onclick="Compare()" name="starttime" id="txtStartTime" class="validate[required]" required >
                                    <option value="">Select Start time</option>
                                    <?php foreach($time_lists as $time_of_Key=>$time_Value){ ?>
                                    <option value="<?php echo $time_Value; ?>"><?php echo $time_Value; ?></option>
                                    <?php } ?>
                                </select>

                                        <select class="input form-control" onclick="Compare()" name="endtime" id="txtEndTime" class="validate[required]" required >
                                    <option value="">Select End time</option>
                                    <?php foreach($time_lists as $time_of_Key=>$time_Value){ ?>
                                    <option value="<?php echo $time_Value; ?>"><?php echo $time_Value; ?></option>
                                    <?php } ?>
                                </select>
                                    </div>

                                    <script src="/src/js/datetimepicker_css.js"></script>

                                    <div class="text-center">
                                        <h3><strong>Booking Date:</strong></h3>
                                        <!-- <input type="hidden" name="todate" id="todate" value="<?php echo $tdate;?>">
                                        <input class="input form-control" onclick="show_alert()" style="background:lightgrey" type="Text" id="demo1" name="dateofbirth" maxlength="25" class="validate[required]" onchange="CheckDate()" required size="25" />
                                        <a style=" cursor:pointer" onclick="javascript:NewCssCal ('demo1','yyyyMMdd','','','','','future')"><i class="fas fa-calendar-alt" style="font-size: 50px;"></i></a>
                                     -->

                                     <input type="hidden" name="todate" id="todate" value="<?php echo $tdate;?>">
 

    <input type="date" id="demo1" maxlength="25" size="25"  name="dateofbirth"  style="background:lightgrey"  class="input form-control"  />
    <a style=" cursor:pointer" onclick="javascript:NewCssCal ('demo1','yyyyMMdd','','','','','future')"><i class="fas fa-calendar-alt" style="font-size: 50px;"></i></a>
  <br /> 

                                    </div>
                                </fieldset>
                        </div>

                        <div class="btn1">
                            <button class="login form-control" type="submit" name="button" id="btnCompare" value="Submit" onclick="Compare()">Submit</button>
                        </div>
                    </form>
                </div>
                <br>

                <div class="col-md-6 pt-5">
   <?php echo $delmsg; ?>
                    <div class="blog">
                    <?php echo $delmsg; ?>
                        <h2 class="content-title"><strong>Booking posts</strong></h2>
                        <iframe src="./php/selectData.php" style="border-radius:5px; background-color:transparent; margin-bottom: 15px; width:100%; height:385px; border:0; border:0px solid;"></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php 
            include("../bot/booking.php")
        ?>
</div>

<?php include("../../footer.php") ?>

        <script type="text/javascript">
            function Compare() {
                var strStartTime = document.getElementById("txtStartTime").value;
                var strEndTime = document.getElementById("txtEndTime").value;

                var startTime = new Date().setHours(GetHours(strStartTime), GetMinutes(strStartTime), 0);
                var endTime = new Date(startTime)
                endTime = endTime.setHours(GetHours(strEndTime), GetMinutes(strEndTime), 0);
                //        if (startTime > endTime) {
                //            alert("Start Time is greater than end time");
                //        }
                if (startTime == endTime) {
                    alert("Start Time equals end time");
                    var dropDown = document.getElementById("txtStartTime");
                     dropDown.selectedIndex = 0;
                     var dropDown = document.getElementById("txtEndTime");
                     dropDown.selectedIndex = 0;
                }
                //        if (startTime < endTime) {
                //            alert("Start Time is less than end time");
                //        }

                if (endTime < startTime) {
                    alert("Start Time is less than end time");
               
                    var dropDown = document.getElementById("txtStartTime");
                     dropDown.selectedIndex = 0;
                     var dropDown = document.getElementById("txtEndTime");
                     dropDown.selectedIndex = 0;
                }
            }

            function GetHours(d) {
                var h = parseInt(d.split(':')[0]);
                if (d.split(':')[1].split(' ')[1] == "PM") {
                    h = h + 12;
                }
                return h;
            }

            function GetMinutes(d) {
                return parseInt(d.split(':')[1].split(' ')[0]);
            }
        </script>

<Script Language=Javascript>
	 function CheckDate()
  {
var str1  = document.getElementById("demo1");
var str2  = document.getElementById("todate");
var string1 = str1.value;
var string2 = str2.value;

var arrfromdate = string1.split("-");
var fdate = arrfromdate[0];
var fmonth = arrfromdate[1];
var fyear = arrfromdate[2]; 

var arrtodate = string2.split("/");
var tdate = arrtodate[0];
var tmonth= arrtodate[1];
var tyear = arrtodate[2];

var date1 = new Date(fyear, fmonth, fdate); 
var date2 = new Date(tyear, tmonth, tdate);
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");


var dmonth = fmonth-1;

var date3 = new Date(fyear, dmonth, fdate); 
var dayname  = dayNames[date3.getDay()];

 if(date1 > date2)
 {
  alert("You cant make a booking for this date");
   document.getElementById("demo1").style.backgroundColor="#FFFFE0"; 
  document.getElementById("demo1").value = "";
 return false;
 }
 else if(dayname =="Sunday" || dayname=="Saturday")
 {
  alert("You cant make a booking for this date..");
   document.getElementById("demo1").style.backgroundColor="#FFFFE0"; 
  document.getElementById("demo1").value = "";
 return false;
 }
 }
    </Script>
<script type="text/javascript">
//function show_alert()
//{
//	alert("Please select Date Time Picker");
//}
</script>

</body>

</html>
