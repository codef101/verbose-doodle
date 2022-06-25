  <!-- *****************************
  Page Name  : current page name 
  Author     : Your Name 
  Your URL   : ocelot-aul.fiu/~____
  Course     : CGS 4854 session, date, and time
  Program #  : Assignment #
  Purpose    : Describe what this page does 

  Due Date   : MM/DD/YYYY 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your full name }..........
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