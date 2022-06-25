<?php

require('db.php');
session_start();
$query = 'select * from customers where customerid = ' . $_POST['customerid'];
$res = mysqli_query($conn, $query);
$data = null;
$query_str = '';
if (!$res) {
    $_SESSION['message'] = 'An error occurred while fetching data';
} else if (mysqli_num_rows($res) == 0) {
    $_SESSION['message'] = 'RECORD ' . $_POST['customerid'] . ' not FOUND';
} else {
    $_SESSION['message'] = 'RECORD ' . $_POST['customerid'] . ' FOUND';
    $_SESSION['type'] = 'blue';
    $data = mysqli_fetch_assoc($res);
    foreach ($data as $key => $value) {
        $query_str .= $key . '=' . $value;
        $query_str .= '&&';
    }
}
