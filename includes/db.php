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
 $host='localhost';
 $user='root';
 $password='';
 $database='program3';
 
 $conn= mysqli_connect($host,$user,$password,$database);
 if(!$conn){
     die('Could not connect to Mysql:' .mysqli_error($conn));
 }


?>