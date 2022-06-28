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

require('db.php');
session_start();

$query = 'select * from customers where customerid = ' . $_POST['customerid'];
$res = mysqli_query($conn, $query);
$data = null;
$query_str = '';

if (mysqli_num_rows($res) > 0) {
    $_SESSION['message'] = 'RECORD '.$_POST['customerid'].' ALREADY EXISTS';
    $_SESSION['type'] = 'red';

} else {

    $query = 'insert into customers
    (customerid,telephone,email,lastname,firstname,address,city,state,dropdowns,zip,country,comments,coffee,major)

    values("
    ' . $_POST['customerid'] . '",
    "' . $_POST['telephone'] . '",
    "'. $_POST['email'] . '",
    "' . $_POST['lastname'] . ' ",
    "' . $_POST['firstname'] . ' ",
    "' . $_POST['address'] . ' ",
    "' . $_POST['city'] . ' ",
    "' . $_POST['state'] . ' ",
    "' . $_POST['dropdowns'] . ' ",
    "' . $_POST['zip'] . ' ",
    "' . $_POST['country'] . ' ",
    "' . $_POST['comments'] . ' ",
    "' .    $_POST['coffee'] . ' ",
    "' . $_POST['major'] . '")';
    $cur = mysqli_query($conn, $query);


    if (!$cur) {
        $_SESSION['message'] = 'An error occurred while inserting data: ' . mysqli_error($conn);
        $_SESSION['type'] = 'red';
    } else {

        $_SESSION['message'] = 'Data saved successfully';
        $_SESSION['type'] = 'blue';
    }
}
foreach ($_POST as $key => $value) {
    $query_str .= $key . '=' . $value;
    $query_str .= '&&';
}
