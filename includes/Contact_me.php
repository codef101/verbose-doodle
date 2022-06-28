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
session_start();
require('YourLastName_header.html');
require('../mainMenu.php');
?>
<div style="display:flex;align-items: center; ">

    <form class="form-inline" action="Contact_me_Controller.php" method="POST" style="width: 50%;margin:auto">
        <div class="input-group">
            <label for="email">Your Email </label>
            <input type="email" id="email" name="email" value="<?= isset($_GET['telephone']) ? $_GET['telephone'] : '' ?>">
        </div>
        <div class="input-group">
            <label for="lastname">Last Name </label>
            <input type="lastname" id="lastname" name="lastname" value="<?= isset($_GET['telephone']) ? $_GET['telephone'] : '' ?>">
        </div>
        <div class="input-group">
            <label for="firstname">First Name </label>
            <input type="firstname" id="firstname" name="firstname" value="<?= isset($_GET['telephone']) ? $_GET['telephone'] : '' ?>">
        </div>

        <div class="input-group">
            <label for="comments">Coffee </label>
            <div class="radio">
                <input id="light" name="coffee" type="radio" value="light" checked>
                <label for="light" class="radio-label">Light</label>
            </div>
            <div class="radio">
                <input id="cuban" name="coffee" type="radio" value="cuban">
                <label for="cuban" class="radio-label">Cuban</label>
            </div>

            <div class="radio">
                <input id="sweet" name="coffee" type="radio" value="sweet">
                <label for="sweet" class="radio-label">Sweet</label>
            </div>

            <div class="radio">
                <input id="decaf" name="coffee" type="radio" value="decaf">
                <label for="decaf" class="radio-label">Decaf</label>
            </div>
        </div>
        <div class="input-group">
            <label for="major">Major</label>
            <div class="checkbox">
                <input type="checkbox" id="it" name="major" value="It" checked>
                <label for="it">IT</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="cs" name="major" value="CS">
                <label for="cs">CS</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="robotics" name="major" value="Robotic">
                <label for="robotics">Robotics</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="Cyber" name="major" value="Cyber">
                <label for="Cyber">Cyber</label>
            </div>
        </div>
        <div class="input-group">
            <label for="comments">Comments </label>
            <textarea name="comments" id="comments" cols="20" rows="5" value="<?= isset($_GET['comments']) ? $_GET['comments'] : '' ?>"></textarea>
        </div>
        <div class="input-group">
              <label for="dropdowns">Dropdowns </label>
              <select name="dropdowns" id="country" style="border:none;border-bottom:1px solid grey;width:100px">
                  <option value="">dropdowns</option>

                  <option value="value1">value1</option>
                  <option value="value1">value2</option>
              </select>
          </div>
       
        <div class="input-group" style="padding-left: 8rem">
            <button class="button" type="submit" id="save" name="submit"><span> Submit</span></button>
            <button class="button" id="clear" type="clear" name="clear"><span> Clear</span></button>
        </div>
    </form>
</div>
<div style="margin: 3rem 0px 0px;">

<?php

require('../mainMenu.php');

?>
</div>
<?php
        if (isset($_SESSION['message'])) {
        ?>
            <div class="alert" id="message" style="background-color: <?= isset($_SESSION['type']) ? $_SESSION['type'] : 'blue' ?>;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?php echo $_SESSION['message'] ?>
            </div>
            <script>
                document.getElementById("message").scrollIntoView();
            </script>
        <?php
        }
        ?>