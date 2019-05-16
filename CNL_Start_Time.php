<?php

if(isset($_POST['submitTime'])){


  $datepicker = $_POST['datepicker'];
  $HOTBIRD = 'HOTBIRD';
  $YAMAL = 'YAMAL';
  $USA = 'USA';
  $timecode1 = $_POST['timecode1'];
  $timecode2 = $_POST['timecode2'];
  $timecode3 = $_POST['timecode3'];


$headers = 'From: Playout2@mx1.com' . "\r\n" .
    'Reply-To: Playout2@mx1.com' . "\r\n" .
    'Cc: Playout2@mx1.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$email_subject = "CNL Start Times";

$email_body = "<html><body><p>Hello,</p> <p>Please see the start times for $datepicker - </p>
<table style=\"width:300px;border:1px solid black;border-collapse: collapse;\">
<tr style=\"background-color: #8bccef;\">
<th align=\"left\" style=\"border:1px solid black;\">Channel</th>
<th align=\"left\" style=\"border:1px solid black;\">Date</th>
<th align=\"left\" style=\"border:1px solid black;\">Start Time</th>
</tr>
<tr style=\"background-color: #cfe9f7;\">
  <td align=\"left\" style=\"border:1px solid black;\">$HOTBIRD</td>
  <td align=\"left\" style=\"border:1px solid black;\">$datepicker</td>
  <td align=\"left\" style=\"border:1px solid black;\">$timecode1</td>
</tr>
<tr style=\"background-color: #cfe9f7;\">
  <td align=\"left\" style=\"border:1px solid black;\">$YAMAL</td>
  <td align=\"left\" style=\"border:1px solid black;\">$datepicker</td>
  <td align=\"left\" style=\"border:1px solid black;\">$timecode2</td>
</tr>
<tr style=\"background-color: #cfe9f7;\">
  <td align=\"left\" style=\"border:1px solid black;\">$USA</td>
  <td align=\"left\" style=\"border:1px solid black;\">$datepicker</td>
  <td align=\"left\" style=\"border:1px solid black;\">$timecode3</td>
</tr>
</table>

<p>Regards,</p>
<p>Playout 2 <br />
Playout Center <br />
<img src=\"http://cnlemailer.stephenwillmot.com/img/mx1_logo.png\" alt=\"MX1\"><br />
T: 	+44 (0)20 8357-5425 <br />
playout2@mx1.com <br />
</p>

<p>www.mx1.com</p>

<p>DISCLAIMER:<br />
This e-mail contains proprietary information some or all of which may be legally privileged. It is for the intended recipient only.<br />
If an addressing or transmission error has misdirected this e-mail, please notify the author by replying to this e-mail.<br />
If you are not the intended recipient you must not use, disclose, distribute, copy, print, or rely on this e-mail.<br />
</p>";


$to = "playlist@cnl.tv";

if (mail($to,$email_subject,$email_body, $headers)){
  $success = "Times Successfully Sent";
}else{
  $success = "Message Not Sent Please Try Again!";
}
}

?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CNL START TIME EMAILER</title>
  <meta name="CNL Start Times" content="CNL Start Times">
  <meta name="Stephen Willmot" content="SitePoint">

  <link rel="stylesheet" href="css/main.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>

<body>


<HEADER>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">CNL EMAILER</h1>
      <p class="lead">This tool emails the start time for a new playlist to CNL. Simply fill out the required data and hit send.</p>
    </div>
  </div>

</HEADER>

<MAINCONTENT>
<form name="contactform" method="post" action="">
  <div class="container">
    <div class="row justify-content-start">
          <div class="col-3">
            <label>Date</label>
            <input type="date" required class="form-control" name="datepicker">
          </div>

          <div class="col-3">
            <label for="HOTBIRD">Channel</label>
            <input type="text" class="form-control" name="HOTBIRD" placeholder="HOTBIRD" readonly>
          </div>

          <div class="col-3">
            <label for="timecode1">Timecode</label>
            <input type="text" id="timecode" required name="timecode1" pattern="(^(?:(?:[0-1][0-9]|[0-2][0-3]):)(?:[0-5][0-9]:){2}(?:[0-2][0-9])$)" maxlength="11" class="form-control" placeholder="00:00:00:00">
          </div>
    </div>
  <br />
    <div class="row justify-content-center">
          <div class="col-3">

            <input type="text" class="form-control" name="YAMAL" placeholder="YAMAL" readonly>
          </div>

          <div class="col-3">

            <input type="text" id="timecode1" required name="timecode2" pattern="(^(?:(?:[0-1][0-9]|[0-2][0-3]):)(?:[0-5][0-9]:){2}(?:[0-2][0-9])$)" maxlength="11" class="form-control" placeholder="00:00:00:00">
          </div>
    </div>
      <br />
    <div class="row justify-content-center">
          <div class="col-3">

            <input type="text" class="form-control" name="USA" placeholder="USA" readonly>
          </div>

          <div class="col-3">

            <input type="text" id="timecode2" required name="timecode3" pattern="(^(?:(?:[0-1][0-9]|[0-2][0-3]):)(?:[0-5][0-9]:){2}(?:[0-2][0-9])$)" maxlength="11" class="form-control" placeholder="00:00:00:00">
          </div>
    </div>
<br />
    <div class="row justify-content-center">
      <div class="col-md-3 offset-md-3">
          <button class="btn btn-primary" type="submit" name="submitTime" id="submitTime"> Submit</button>
      </div>

  </div>

<br />

<div class="row justify-content-center">
<div class="col-6">
  <?php
    if (isset($success)){ echo  "<div class=\"alert alert-success\" role=\"alert\">" . $success . "</div>" ;}
  ?>
</div>

</div>
</div>

</form>

</MAINCONTENT>

</body>
<script src="js/timecode.js"></script>
</html>
