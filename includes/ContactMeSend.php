 <!-- *****************************
  Page Name  : Contact_me_Controller
  Author     : Juwane Jules
  Your URL   : ocelot.aul.fiu.edu/~jjule017
  Course     : CGS 4854  Pgm3b_4
  Purpose    : Calls ContactMeSend.php 

  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........Juwane Jules..........
  ***************************** -->
<?php
session_start();

$to = 'michael.robinson@cs.fiu.edu';
$subject = "Contact me";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table>
<tr>
<td> Email </td>
<td>".$_POST['email']."</td>
</tr>

<tr>
<td>Last Name </td>
<td>".$_POST['lastname']."</td>
</tr>

<tr>
<td>First Name </td>
<td>".$_POST['firstname']."</td>
</tr>

<tr>
<td>Coffee </td>
<td>".$_POST['coffee']."</td>
</tr>


<tr>
<td>Coffee </td>
<td>".$_POST['major']."</td>
</tr>

<tr>
<td>Dropdowns </td>
<td>".$_POST['dropdowns']."</td>
</tr>

<tr>
<td>Comments </td>
<td>".$_POST['comments']."</td>
</tr>

</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$_POST['email'] . "\r\n";

$mail = mail($to,$subject,$message,$headers);
if(!$mail) {   
    $_SESSION['message'] = 'An error occurred while sending email';
} else {
    $_SESSION['message'] ='Your message has been submitted to michael.robinson@cs.fiu.edu
    <br>         
thank you';
}
?>