
<!DOCTYPE html>
<html>
   <head>
      <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css"/>
      <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css"/>
      <script src="/lib/js/jsfilehere.js" type="text/javascript"></script>
      <title> contact page </title>
   </head>
   <?php
include './header.html';
 ?>
      <section id="contact_hero">
         <div class="container align-center">
            <h2 class="contact-hero__headline">Send us Your Feedback here:</h2>
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
                  <label for="num" class="form-label">Phone Number</label>
                  <input type="text" id="num" class="form-input" name="num" placeholder="Phone number..">
               </div>
               <div class="form-input">
                  <label for="mail" class="form-label">Email</label>
                  <input type="text" id="mail" class="form-input" name="mail" placeholder="Email..">
               </div>
               <div class="form-textbox">
                  <label for="comment" id="comment-title" class="form-label">Questions/Comments:</label>
                  <textarea id="comment" name="comments" placeholder="Write something here.." style="height:200px"></textarea>
               </div>
               <input type="submit" value="Submit" onclick="myForm(value)" />
            </form>
         </div>
         <!-- container -->
      </section>
      <?php
include './footer.html';
 ?>
      <script type="text/javascript" src="jqhome.js"></script>
      <script type="text/javascript" src="formjsfile"></script>
   </body>
</html>