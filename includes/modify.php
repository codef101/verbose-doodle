<?php

require('db.php');
session_start();
$query = 'select * from customers where customerid = '.$_POST['customerid'];
$res = mysqli_query($conn, $query);
$data = null;
$query_str = '';
if (!$res) {
    $_SESSION['message'] = 'An error occurred while fetching data';
}
elseif(mysqli_num_rows($res) == 0){
    $_SESSION['message'] = 'RECORD '.$_POST['customerid'].' CAN NOT BE MODIFIED, FIND IT FIRST';
}
else{
    $query = 'update customers
    set 
    telephone = "'. $_POST['telephone']. '",
    lastname = "' .$_POST['lastname'].' ",
    firstname = "'. $_POST['firstname'].' ",
    address = "'.$_POST['address'].' ", 
    city = "'.$_POST['city'].' ",
    state = "'.$_POST['state'].' ",
    dropdowns ="'.$_POST['dropdowns'].' ",
    zip = "'.$_POST['zip'].' ",
    country = "'.$_POST['country'].' ",
    comments ="'.$_POST['comments'].' ",
    coffee = "'.	$_POST['coffee'].' ",
    major = "'.$_POST['major'].'" where customerid ="'.$_POST['customerid'] .'"';

    $res = mysqli_query($conn, $query);
    if(!$res){
        $_SESSION['message'] = 'An error occurred while updating data'.mysqli_error($conn);
    }else{
        $_SESSION['message'] = 'RECORD '.$_POST['customerid'].' MODIFIED';
    }
}

foreach ($_POST as $key => $value) {
    $query_str .= $key . '=' . $value;
    $query_str .= '&&';
}
?>