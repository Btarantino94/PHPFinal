<?php require "inc/db.inc.php"; ?>
<!DOCTYPE html>
<html>

<head>
   <!-- linking my reset.css -->
   <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css" />
   <!-- linking my css -->
   <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css" />
   <!-- google kaushan font -->
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   <!--  The HTML meta element represents metadata that cannot be represented by other HTML meta-related elements, like base, link, script, style or title. -->
   <meta charset="utf-8">
   <meta content="IE=edge" http-equiv="X-UA-Compatible">
   <meta content="width=device-width, initial-scale=1 user-scalable=0" name="viewport">
   <meta content="combining Formspree, jQuery, and Ajax" name="description">
   <!-- google open sans font -->
   <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> -->
   <!-- bootstrap cdn -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
   <title>contact page</title>
</head>
<?php include 'inc/header.inc.php'; ?>

<body id="contact_page">
   <section>
      <div class="container-fluid" id="contact">
         <h1 id="contact_title">Contact Us!</h1>
         <div id="contact-first">
            <p>Need to get in touch with our customer service peeps? We are here to help!</p>
            <div>
            <p class="contact_ques">Frequently Asked Questions:</p>
            <p>What's your return policy, or how do I return something?</p>
            <p class="contact_ans">~You can't. We don't except returns.</p>
            <p class="contact_ques">When will I get my shipment?</p>
            <p class="contact_ans">~Most shipments leave our warehouse within 1-2 business days of placing your order. You will also need to consider the transit time for the shipping method you chose..</p>
            </div>
            <p class="form_header">NEED MORE HELP?</p>
            <p>Send us an email below or contact us by Snail Mail or Phone:</p>
            <p>Phone #: 1-800-GEEK CHIC1</p>
            <p>Address: GeekChic, Inc. 224 TooHigh Rd Suite 100 FortMill, SC 28055s</p>
            <div class="row" id="form-wrapper">
               <form method="POST" autocomplete="on" id="contact-form" name="contact-form" action="https://formspree.io/britanny_tea2@aol.com">
                  <!--  in the input below I am giving the input a class col-md-6 and col-sm-12  which will span half the screen on mobile phone (md) and 1/2 of the screen on tablets(sm) -->
                  <input class="col-md-6 col-sm-12" id="form-name" name="name" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please complete this field.')" placeholder="Name" required="" type="text">
                  <input class="col-md-6 col-sm-12" id="form-email" name="email" placeholder="Email" required="" type="email">
                  <textarea class="col-sm-12" id="form-text" name="message" placeholder="Message" required=""></textarea>
                  <br>
                  <input class="btn btn-default btn-block col-sm-12" id="form-button" type="submit" value="Send">
               </form>
            </div>
         </div>
      </div>
      <!-- container -->
   </section>
</body>

<?php 
include 'inc/footer.inc.php';
 ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="formjsfile"></script>
</body>

</html>