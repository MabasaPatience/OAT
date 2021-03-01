<?php

// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = "";

$name = $_POST['name'];
$email_address = $_POST['email_address'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$companies = $_POST['companies'];


//assigning variables to input text from our belovered form

/** signatures */

//dynatech
 $dynatech = '<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TR>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" align="left">
                    <tr>
                        <td align="left">
                            <a href="https://www.dynatech.co.za/"><img style="margin-right:7px;" src="https://www.dynatech.co.za/wp-content/themes/dynatech/images/logo.png" nosend="1" border="0" width="195" height="71" alt="Dynatech" title="Dynatech"></a>
                        </td>
                        <td width="100%"><span style="text-align: left; color: rgb(33, 34, 36); font-family: "Arial", sans-serif; font-size: 9pt; font-weight: bold">'.$name.'</span><span style="text-align: left; margin-top: 0px; margin-bottom: 0px; color: rgb(34, 33, 32); font-family: "Arial", sans-serif; font-size: 8pt; font-weight: normal">&nbsp;<font size="2" color="#000000">|</font>&nbsp;'.$position.' </span><br>
                            <span style="text-align: left; color: rgb(49, 107, 221); font-family: Arial; font-size: 8pt; font-style: normal; font-weight: normal;"> Dynatech <br> 345 Rivonia Blvd, Edenburg, Sandton, 2191 &middot; 5 Wallnut Road SmartXchange Durban
                                <font size="2" color="#000000">&nbsp;</font><br>tel:&nbsp;
                                <font size="1" color="#4A4A4A">(011) 052 5000</font> &nbsp;
                                <font size="3" color="#000000">&middot;</font>&nbsp;Email:&nbsp;
                                <font size="1" color="#4A4A4A">'.$email_address.'</font>
                                <font size="3" color="#000000">&middot;</font>&nbsp;mobile:&nbsp;
                                <font size="1" color="#4A4A4A">'.$phone.'</font>&nbsp;
                            <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                            <td><span style="line-height: 3px; font-size: 3px;">&nbsp;<br></span><span style="text-align: left; margin-top: 0px; color: #2B67AC; font-size: 8pt; font-weight: bold; font-family: "Calibri", sans-serif;"><a style="text-decoration: none; color: #2B67AC" href="https://www.dynotech.co.za/"><font color="#2B67AC"><img src= "https://cdn11.bigcommerce.com/s-da4bb/images/stencil/892x472/uploaded_images/weblogo.png?t=1530714211" style="height:21px; width:25px;" title ="Website" alt="Website"></font></a>
                            &nbsp;<font size="1" color="#2B67AC"><font size="1" color="#2B67AC">|</font>&nbsp; <a style="text-decoration: none; color: #2B67AC"  href="https://www.google.com/maps/place/24+Goud+Cres,+Brackenfell,+Cape+Town,+7560/@-33.8636935,18.7103824,3a,75y,321.39h,92.42t/data=!3m7!1e1!3m5!1sfV3bJuXTd1Moom1Db9BCWw!2e0!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DfV3bJuXTd1Moom1Db9BCWw%26output%3Dthumbnail%26cb_client%3Dsearch.gws-prod%2Flocal-details-getcard.gps%26thumb%3D2%26w%3D86%26h%3D86%26yaw%3D302.71414%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x1dcc5158e505c55f:0x48ff0a9088cb399f!8m2!3d-33.863615!4d18.710204?hl=en-US" ><font color="#2B67AC"><img src= "https://img.etimg.com/thumb/msid-69170499,width-643,imgsize-50756,resizemode-4/googlemaps1.jpg" style="height:19px; width:29px;" title="Map" alt="Map"></font></a>
                            &nbsp;<font size="1" color="#2B67AC">|</font>&nbsp; <a style="text-decoration: none; color: #2B67AC" href="mailto:rajesh.thampy@hages.co.za"><font color="#2B67AC"><img src= "https://www.ionos.co.uk/help/fileadmin/icons/Start_Page/email_icon.svg" style="height:17px; width:23px;"title="Email" alt="Email"> | </font></a>&nbsp;&nbsp;&nbsp; </td><td><span style="text-align: left; margin-top: 0px; color: #000000; font-size: 8pt; font-weight: normal; font-family: "Arial", sans-serif;"><a href="http://www.linkedin.com/pub/rajesh-thampy"><img src="http://www.stationerycentral.com/SocialMedia/LinkedIn-21x21-right.gif" nosend="1" border="0" width="21" height="21" title="LinkedIn" alt="LinkedIn"></a></span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </td>
    </TR>
    </TABLE><br />
    <table cellspacing="0" cellpadding="0" border="0" align="left">
        <tr>
            <td align="left">
                <span style="line-height: 4px; font-size: 4px;">&nbsp;<br></span>
                <td style="padding-left: 5px; padding-top: 7px; border-top:solid 1px rgb(49, 107, 221);"><span style="color:rgb(49, 107, 221); font-family: Calibri, sans-serif; font-size: 8pt; font-weight: regular;"><b>Confidentiality Note:&nbsp;</b>This e-mail and any attachments are confidential and may be protected by legal privilege.<br>If you are not the intended recipient, be aware that any disclosure, copying, distribution or use of this e-mail or any attachment is prohibited.<br>If you have received this e-mail in error, please notify us immediately by returning it to the sender and delete this copy from your system. Thank you for your cooperation.<br></span></a>
                </td>
                </a>
                </span>
            </td>
        </tr>
    </table>
    </td>
    </tr>
    </table>
    <table><br></span>
        </td>
        </tr>
    </table>
    <style>
        a {
            color: #2B67AC;
        }
    </style>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <!--To use icons-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js "></script>
</body>

</html>';


//technodyn
  $technodyn = '<html>

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <meta http-equiv="Content-Type" content="text/html">
  
      <title>Technodyn Signature</title>
  </head>
  
  <body>
      <div class="container">
          <br>
          <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 65%;">
              <tr>
                  <td>
                      <a href="http://technodyn.co.za/">
                          <img src="http://technodyn.co.za/wp-content/uploads/2016/08/cropped-transparent_TECH_DATA1.png" nosend="1" border="0" width="300" height="93" alt="Technodyn Data Solutions" title="Technodyn Data Solutions">
                      </a>
                  </td>
                  <td>
                      <span style="text-align: left; color: rgb(5, 85, 122); font-family: "Arial", sans-serif; font-size: 9pt; font-weight: bold">
                      '.$name.'&nbsp;|&nbsp;'.$position.'
                      </span>
                      <br>
                      <span style="text-align: left; color: rgb(38, 105, 144); font-family: Arial; font-size: 8pt; font-style: normal; font-weight: normal;">
                          <strong> Technodyn Data Solutions</strong> 
                          <br>345 Rivonia Boulevard<br>Sandton<br>Johannesburg, 2128<br>
                          <strong>Phone-:</strong>
                          <font size="1" color="#000000">
                              <strong>'.$phone.'</strong>
                          </font>
                      </td>
                  <td>
                      <div class="container">
                          <table>
                              <h4 style="text-align: left; color: rgb(38, 105, 144); font-family: Arial; font-style: normal; font-weight: normal;">
                                  <strong>Get in touch:</strong>
                              </h4>
                              <tr>
                                  <a style="padding-left: 0%;" href="http://technodyn.co.za/" title="website" target="_blank">
                                      <i class="fas fa-globe-africa";"></i>
                                  </a>
                              </tr>
                              <tr>
                                  <a style="padding-left: 5%;" href="https://www.google.com/maps/place/345+Rivonia+Blvd,+Rivonia,+Johannesburg,+2128/@-26.0555239,28.0574583,17z/data=!3m1!4b1!4m5!3m4!1s0x1e9573ade1c28109:0x5ac2401dd9a5d3bd!8m2!3d-26.0555239!4d28.059647" title="Map to Technodyn" target="_blank">
                                      <i class="fas fa-map-marked-alt"></i>
                                  </a>
                              </tr>
                              <tr>
                                  <a style="padding-left: 5%;" href="mailto:nolan.seokane@technodyn.co.za" title="email" target="_blank">
                                      <i class="fas fa-envelope-open-text"></i>
                                  </a>
                              </tr>
                              <tr>
                                  <a style="padding-left: 5%;"  href="https://za.linkedin.com/in/nolan-seokane-6467a312a" title="linkedin" target="_blank">
                                      <i class="fab fa-linkedin-in"></i>
                                  </a>
                              </tr>
                          </table>
                      </div>
                  </td>
              </tr>
          </table>
          <br>
          <hr>
          <h5 class="text-center" style="color: #8A8A8A; font-family: Calibri, sans-serif; font-weight: regular;">
              <strong>Confidentiality Note:</strong>
          </h5>
          <p class="text-center" style="color: #8A8A8A; font-family: Calibri, sans-serif; font-weight: regular;font-size: 8pt">
              <strong>
                  This e-mail and any attachments are confidential and may be protected by legal privilege. If you are not the intended recipient, be aware that any disclosure, copying, distribution or use of this e-mail or any attachment is prohibited. If you have received
                  this e-mail in error, please notify us immediately by returning it to the sender and delete this copy from your system. Thank you for your cooperation.
              </strong>
          </p>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
      <!--To use icons-->
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js "></script>
  </body>
  
  </html>';

//hages
 $hages ='<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <TABLE style=" padding-bottom: 3px; border-bottom: solid 2px #E46917;" border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TR>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" align="left">
                    <tr>
                        <td align="left">
                            <a href="http://en.wikipedia.org/wiki/Hages Business Solutions"><img src="https://lh5.googleusercontent.com/-_fWdAqzML7E/UhSKrvOm64I/AAAAAAAAAKw/dNXEM5DLWcg/w296-h147-no/hages.png" nosend="1" border="0" width="105" height="75" alt="Hages Business Solutions" title="Hages Business Solutions"></a>
                        </td>
                        <td width="45%"><span style="padding-bottom:5px; text-align: left; color: rgb(37, 35, 34); font-family: "Arial", sans-serif; font-size: 10pt; font-weight: bold">'.$name.'</span><span style="text-align: left; margin-top: 0px; margin-bottom: 0px; color: rgb(128, 124, 122); font-family: Arial, sans-serif; font-size: 8pt; font-weight: normal">&nbsp;<font size="2" color="#000000">|</font>&nbsp;'.$position.' </span><br>
                            <span style="text-align: left; color: #E46917; font-family: Arial; font-size: 8pt; font-style: normal; font-weight: normal;"> Hages Business Solutions <br> Ground Floor, Building 8, The Willows Office Park, 276 George Road &nbsp;
                                <font size="3" color="#000000">&middot;</font>&nbsp;Erand Gardens, EXT 41, Midrand,<br> Postnet Suite 49, Private Bag X121,&nbsp;Halfway House,<br>GP 1685<br> tel-&nbsp;
                                <font size="1" color="#8A8A8A">(011) 3186266-69</font> &nbsp;
                                <font size="3" color="#000000">&middot;</font>&nbsp;ext-&nbsp;
                                <font size="1" color="#8A8A8A">115 </font>
                                <font size="3" color="#000000">&middot;</font>&nbsp;mobile-&nbsp;
                                <font size="1" color="#8A8A8A">'.$phone.'</font>&nbsp;
                                <font size="3" color="#000000">&middot;</font>&nbsp;fax&nbsp;
                                <font size="1" color="#8A8A8A">(011) 3186258</font><br></span>
                            <table cellspacing="0" cellpadding="0" border="0">
                            </table>
                        </td>
                        <td width="65%" style="padding-left: 3px; padding-right: 9px; border-left: solid 2px rgb(231, 137, 90);"><p style="margin-left: 5px; color: #8A8A8A; font-family: Calibri, sans-serif; font-size: 8pt; font-weight: regular;"><b> Confidentiality Note:&nbsp;</b>This e-mail and any attachments are confidential and may be protected by legal privilege.<br>If you are not the intended recipient, be aware that any disclosure, copying, distribution or use of this e-mail or any attachment is prohibited.<br>If you have received this e-mail in error, please notify us immediately by returning it to the sender and delete this copy from your system. Thank you for your cooperation.<br><p>
                        </td>
                    </tr>
                </table>
            </td>
        </TR>


        <tr>
            <td align="left">
                <a href="http://en.wikipedia.org/wiki/SAP"><img src="https://lh3.googleusercontent.com/-jC2OQcP_uIc/Uk1TU-0O0KI/AAAAAAAAANA/-osgYqZeeF4/w407-h239-no/SAP_Partner_R.png" nosend="1" border="0" width="80" height="25" alt="SAP" title="SAP"><span style="line-height: 4px; font-size: 4px;">&nbsp;<br></span></a>

                <center><span style="line-height: 3px; font-size: 3px;">&nbsp;<br></span><span style="text-align: left; margin-top: 0px; color: #2B67AC; font-size: 8pt; font-weight: bold; font-family: Calibri, sans-serif;"><a href="http://www.hages.co.za"><font color="orange"><i style="font-size:19px;" class="fas fa-globe-africa" title="Website"></i></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
                &nbsp; <a style="text-decoration: none; color: #2B67AC" href="https://maps.google.co.za/maps?q=hages+business+solutions+midrand&hl=en&ll=-25.964022,28.129404&spn=0.09646,0.123081&sll=-26.129857,27.904243&sspn=0.19388,0.246162&hq=hages+business+solutions&hnear=Midrand,+City+of+Johannesburg+Metropolitan+Municipality,+Gauteng&t=m&z=13&layer=c&cbll=-25.964022,28.129404&panoid=Xq4dorfqUOwpqq2tMeE_5w&cbp=12,119.54,,0,0"><font color="orange"><i style="font-size:19px;" class="fas fa-map-marked-alt" title="Map"></i></font></a>
                &nbsp;<font size="1" color="#2B67AC">&nbsp;&nbsp;</font>&nbsp; <a style="text-decoration: none; color: #2B67AC" href="mailto:rajesh.thampy@hages.co.za"><font color="orange"><i style="font-size:19px;" class="fas fa-envelope-open-text" title="Email"></i></font></a>
                &nbsp;&nbsp;&nbsp; <a href="http://www.linkedin.com/pub/rajesh-thampy"><font color="orange"><i style="font-size:19px; margin-bottom:5px;" class="fab fa-linkedin-in" title="LinkedIn"></i></font></a></center>

            </td>
        </tr>
    </TABLE>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <!--To use icons-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js "></script>
</body>

</html>';
//} //validtion
?>