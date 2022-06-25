<?php

require('db.php');
session_start();
$query = 'select * from customers where customerid = ' . $_POST['customerid'];
$res = mysqli_query($conn, $query);
$data = null;
$query_str = '';

if (mysqli_num_rows($res) == 0) {
    $_SESSION['message'] = 'RECORD '.$_POST['customerid'].' CAN NOT BE DELETED, IT DOES NOT EXISTS';
    $_SESSION['type'] = 'red';

} else {
    $query = 'delete from customers where customerid ="'.$_POST['customerid'] .'"';

    $del = mysqli_query($conn, $query);
    if(!$del){
        $_SESSION['message'] = 'An error occurred while updating data'.mysqli_error($conn);
    }else{
        $_SESSION['message'] = 'Data Deleted successfully';
    }
}
foreach ($_POST as $key => $value) {
    $query_str .= $key . '=' . $value;
    $query_str .= '&&';
}
?>