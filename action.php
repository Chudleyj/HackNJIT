<?php
require_once('phpmailer/PHPMailerAutoload.php');

    $number = $_POST['phonenumber'];
    $carrier = $_POST['carrier'];
    $message = $_POST['message'];
    $remindTime = $_POST['remindTime'];
    $remindAmount = $_POST['remindAmount'];
    $address;

 switch($carrier)
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
      $address = "@txt.att.net";
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

//Make Address
$sendTo = $number.$address;

 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->Host = "smtp.gmail.com";
 $mail->SMTPAuth = true;
 $mail->Username = 'remindmeow@gmail.com';
 $mail->Password = 'hacknjit';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = '465';
 $mail->SetFrom('remindmeow@gmail.com');
 $mail->Subject = 'Hello';
 $mail->Body = $message;
 $mail->AddAddress($sendTo);

$count = 0;
$wait;
switch ($remindAmount) {

  case '1':
    $wait = 0;
    break;

  default:
    $wait=60;
    break;
}
$waitWhen;
switch ($remindTime) {

  case '1':
    $waitWhen = 0;
    break;

  case '2':
    $waitWhen = 0.42857143;
    break;

  case '3':
    $waitWhen = 1.28571429;
    break;

  case '4':
    $waitWhen = 2.57142857;
    break;

  case '5':
    $waitWhen = 5.14285714;
    break;

  case '6':
    $waitWhen = 12.8571429;
    break;

  case '7':
    $waitWhen = 60;
    break;
}

while($count < $remindAmount)
{
   sleep($wait + $waitWhen);
   //Send mail
   if(!$mail->send()){
     echo 'Error:' . $mail->ErrorInfo;
   }

  $count++;
}
?>

<html>
    <head>

      <!-- Bootstrap core CSS -->
      <link href="assets/css/bootstrap.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="assets/css/not_main.css" rel="stylesheet">

          <!-- Fonts from Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

      <title>Notify me</title>

    </head>

    <body>

      <center>
        <div class="form-group">
          <form action = "action.php" method ="post">
            Phone number:<br>
            <input type="text" name="phonenumber"><br>

            Message:<br>
            <input type ="text" name="message"><br>

            Carrier:<br/>
            <select name = "carrier">
              <option value="Verizon">Verizon</option>
              <option value="AT&T">AT&T</option>
              <option value="Boost Mobile">Boost Mobile</option>
              <option value="Sprint">Sprint</option>
              <option value="T-Mobile">T-Mobile</option>
              <option value="U.S. Cellular">U.S. Celluar</option>
              <option value="Altel">Altel</option>
              <option value="Virgin Mobile">Virgin Mobile</option>
              <option value="Tracfone">Tracfone</option>
            </select>
            <br/>

            <br>When would you like to be reminded?<br/>
            <select name = "remindTime">
              <option value="1">Now</option>
              <option value="2">Ten minutes from now</option>
              <option value="3">Half an hour from now</option>
              <option value="4">An hour from now</option>
              <option value="5">Two hours from now</option>
              <option value="6">Five hours from now</option>
              <option value="7">This time tomorrow</option>
            </select>
            <br/>

            <br>How often would you like to be reminded?<br/>
            <select name = "remindAmount">
              <option value="1">Just once</option>
              <option value="2">Today and tomorrow</option>
              <option value="5">Every day for a week</option>
              <option value="30">Every day for a month</option>
            </select>
            <br/>
            <br>

            <input type="submit" value="Submit">
          </form>
        </center>
      </div>
    </body>
  </html>
