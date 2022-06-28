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
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if (isset($_POST['save'])) {
        echo 'exec';
        require('Save.php');
        header('Location: program3.php?' . $query_str);
    }
    if (isset($_POST['find'])) {
        require('Find.php');
        header('Location: program3.php?' . $query_str);
    }
    if (isset($_POST['modify'])) {
        require('modify.php');
        header('Location: program3.php?' . $query_str);
    }
    if (isset($_POST['delete'])) {
        require('delete.php');
        header('Location: program3.php?' . $query_str);
    }

    if (isset($_POST['clear'])) {
        require('clear.php');
        header('Location: program3.php?' . $query_str);
    }

    ?>