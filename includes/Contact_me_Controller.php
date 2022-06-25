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
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (empty($_POST['submit'])) {
      require('ContactMeSend.php');
      header('Location: Contact_me.php');
    }
  
    ?>