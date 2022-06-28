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
    include('header.php');
    session_start();
    ?>

  <div style="display:flex;align-items: center; ">

      <form class="form-inline" action="Controller3.php" method="POST" style="width: 50%;margin:auto">
          <div class="input-group">
              <label for="customerid">Customer ID </label>
              <input type="customerid" id="customerid" name="customerid" value="<?= isset($_GET['customerid']) ? $_GET['customerid'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="telephone">Telephone </label>
              <input type="telephone" id="telephone" name="telephone" value="<?= isset($_GET['telephone']) ? $_GET['telephone'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="Email">Email </label>
              <input type="email" id="email" name="email" value="<?=isset($_GET['email']) ? $_GET['email'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="lastname">Last Name </label>
              <input type="lastname" id="lastname" name="lastname" value="<?= isset($_GET['lastname']) ? $_GET['lastname'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="Firstname Name">First Name </label>
              <input type="firstname" id="firstname" name="firstname" value="<?= isset($_GET['firstname']) ? $_GET['firstname'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="Address">Address </label>
              <input type="address" id="address" name="address" value="<?= isset($_GET['address']) ? $_GET['address'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="City">City </label>
              <input type="city" id="city" name="city" value="<?= isset($_GET['city']) ? $_GET['city'] : '' ?>">
          </div>

          <div class="input-group">
              <label for="state">State </label>
              <input type="state" id="state" name="state" value="<?= isset($_GET['state']) ? $_GET['state'] : '' ?>">
          </div>

          <div class="input-group">
              <label for="country">Country </label>
              <input type="country" id="country" name="country" value="<?= isset($_GET['country']) ? $_GET['country'] : '' ?>">
          </div>
          <div class="input-group">
              <label for="ZIP">Zip </label>
              <input type="zip" id="ZIP" name="zip" value="<?= isset($_GET['zip']) ? $_GET['zip'] : '' ?>">
          </div>

          <div class="input-group">
              <label for="dropdowns">Dropdowns </label>
              <select name="dropdowns" id="country" style="border:none;border-bottom:1px solid grey;width:100px">
                  <?php echo isset($_GET['dropdown']) ? "<option value='".$_GET['dropdown']."'>".$_GET['dropdown']."</option>" : '<option value="">choose</option>' ?>
                  <option value="value1">value1</option>
                  <option value="value1">value2</option>
              </select>
          </div>
          <br>
          <div class="input-group">
              <label for="comments">Comments </label>
              <textarea name="comments" id="comments" cols="20" rows="5"><?= isset($_GET['comments']) ? $_GET['comments'] : '' ?></textarea>
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
          <?php
            if (isset($_SESSION['message'])) {
            ?>
              <div class="alert" id="message" style="background-color: <?=isset($_SESSION['type'])? $_SESSION['type'] : 'blue' ?>;">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                  <?php echo $_SESSION['message'] ?>
              </div>
            <script>document.getElementById("message").scrollIntoView();</script>
          <?php
            }
            ?>
          <div class="">
              <div class="input-group">
                  <button class="button" type="submit" id="save" name="save"><span> Save</span></button>
                  <button class="button" type="submit" id="find" name="find"><span> Find</span></button>
                  <button class="button" type="submit" id="modify" name="modify"><span> Modify</span></button>
                  <button class="button" type="submit" id="delete" name="delete"><span> Delete</span></button>
                  <button class="button" id="clear" type="submit" name="clear"><span> Clear</span></button>
                  <a href=" Contact_me.php" class="button" id="Contact_me"><span> Contact_Me</span></a>
              </div>
          </div>
      </form>

      <h6>Joe doe</h6>
  </div>

  <script src="https://kit.fontawesome.com/ade0b34805.js" crossorigin="anonymous"></script>
   <script>
      // Get all elements with class="closebtn"
      var close = document.getElementsByClassName("closebtn");
      var i;

      // Loop through all close buttons
      for (i = 0; i < close.length; i++) {
          // When someone clicks on a close button
          close[i].onclick = function() {

              // Get the parent of <span class="closebtn"> (<div class="alert">)
              var div = this.parentElement;

              // Set the opacity of div to 0 (transparent)
              div.style.opacity = "0";

              // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
              setTimeout(function() {
                  div.style.display = "none";
              }, 600);
          }
      }
  </script>