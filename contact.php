
<?php
require "lib/inc/db.inc.php";

?>

<!DOCTYPE html>
<html>
   <head>
      <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css"/>
      <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css"/>
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <script src="/lib/js/jsfilehere.js" type="text/javascript"></script>
      <title> contact page </title>
   </head>
   <?php
include 'lib/inc/header.inc.php';
 ?>
 <body id="contact-page">
      <section>
         <div class="container align-center">
            <h2 class="contact-hero__headline">Get notified of new releases and limited items!</h2>
            <form name="theform">
               <div class="form-input">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" id="fname" class="form-input" name="firstname" placeholder="Your name..">
               </div>
               <div class="form-input">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" id="lname" class="form-input" name="lastname" placeholder="Your last name..">
               </div>
               <div class="form-input">
                  <label for="mail" class="form-label">Email</label>
                  <input type="text" id="mail" class="form-input" name="mail" placeholder="Email..">
               </div>
               <div class="form-textbox">
                  <label for="note" id="note-title" class="form-label">Notes:</label>
                  <textarea id="note" name="enots" placeholder="Write something here.." style="height:200px"></textarea>
               </div>
               <input type="submit" value="Subscribe" onclick="myForm(value)" />
            </form>
         </div>
         <!-- container -->
      </section>

</body>
      <?php
include 'lib/inc/footer.inc.php';
 ?>
      
      <script type="text/javascript" src="formjsfile"></script>
   </body>
</html>