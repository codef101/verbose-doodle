<?php

require('db.php');
session_start();
$query = 'delete * from customers';
$res = mysqli_query($conn, $query);
session_destroy();
?>