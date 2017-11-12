<?php
 $path = 'data.txt';
 if (isset($_POST['phonenumber'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['phonenumber'];
    fwrite($fh,$string); // Write information to the file
    fwrite($fh,"  ");
    fclose($fh); // Close the file
 }
 if (isset($_POST['carrier'])) {
    $fh = fopen($path,"a+");
    $string2 = $_POST['carrier'];
    fwrite($fh,$string2); // Write information to the file
    fwrite($fh,"\n");
    fclose($fh); // Close the file
 }

$address;
 switch($string2)
 {
   case "Altel":
    $address = "@sms.alltelwireless.com";
    break;

   case "AT&T":
     $address = "@txt.att.net";
     break;

   case "Boost Mobile":
      $address = "@sms.myboostmobile.com";
      break;

    case "Sprint":
      $address = "@messaging.sprintpcs.com";
      break;

    case "T-Mobile":
      $address = "@tmomail.net";
      break;

    case "Tracfone":
      $address = "@mmst5.tracfone.com";
      break;

    case "U.S. Cellular":
      $address = "@email.uscc.net";
      break;

   case "Verizon":
    $address = "@vtext.com";
    break;

  case "Virgin Mobile":
    $address = "@vmobl.com";
    break;
 }

mail("9089145014@vtext.com","My subject","TEST PLEASE WORK");
?>
