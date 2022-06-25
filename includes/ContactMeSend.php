<?php
$to = "email@example.com";
$subject = "Contact me";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table>
<tr>
<td>Your Email </td>
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
echo $mail;
exit;
if(!$result) {   
    echo 'failed';
} else {
    echo 'success';
}
?>