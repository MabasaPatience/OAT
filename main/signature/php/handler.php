<?php 

//requesting signature page
require_once("../php/signatures.php");


/**validation*/
//making sure the fields are not empty

/*if (isset($_POST['email_address'] !== "") && isset($_POST['name'] !== "") && isset($_POST['position'] !== "") && isset($_POST['phone'] !== "")){
 print "You can not leave the fields empty"
}
else{ */


/*
if(isset($_POST['submit']))
  {
    $from_add = "submit@webdesignrepo.com"; 
    $to_add = $email_address; 
    $subject = "Notification email";
    $message = "Name:$name \n Sites: $email_address";

    $headers = 'From: submit@webdesign.com' . "\r\n" .
    'Reply-To: thato@webdesignrepo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if(mail($to_add,$subject,$message,$headers)) 
    {
      $msg = "Mail sent";

      echo $msg;
    } 
  }

*/

//we attempt to send notification e-mail when the submit/print button is evoke
$recipientEmail = "$email_address";
$emailSubject = "Signatures";

if($companies == "dynatech") {

  //print $dynatech;
  $emailContext = "$dynatech";
 
 }

 else if($companies == "technodyn") {

  //print $technodyn;
  $emailContext = "$technodyn";
 
 }
 
 else if($companies == "hages") {
 
  //print $hages;
  $emailContext = "$hages";
 
 }
 //just in case there is no signature availabe for selected content
else{

  $emailContext = "Unfortunately we dont have logo for you based on your company selection";

}


$emailHeaders = "Cc: Replace email address" . "\r\n";
$emailHeaders .= "Bcc: Replace email address" . "\r\n";

$fromAddress = "-fpostmaster@localhost";
$emailStatus = mail($recipientEmail, $emailSubject, $emailContext, $emailHeaders, $fromAddress);
if($emailStatus) {
echo "<p>Thanks <b>$name</b>, notification email was sent to <b>$email_address</b></p>";
} else {
echo "No Email is sent";
}

//print "<p>Thanks <b>$name</b>, notification email was sent to <b>$email_address</b></p><br /><br />" ;

/**comparing the values submited */
//selection is made based on what a user has selected in the form
if($companies == "dynatech") {

 print $dynatech;

}

else if($companies == "technodyn") {

 print $technodyn;

}

else if($companies == "hages") {

 print $hages;

}

//just in case there is no selection made
else{

  print "Unfortunately we dont have logo for you";

}
//}
?>
