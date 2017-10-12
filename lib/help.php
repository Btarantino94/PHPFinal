<?php require "lib/inc/db.inc.php"; ?>
<!DOCTYPE html>
<html>

<head>
   <!-- linking my reset.css -->
   <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css" />
   <!-- linking my css -->
   <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css" />
   <!-- google kaushan font -->
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   
   <title>Help page</title>
</head>

<?php include 'lib/inc/header.inc.php'; ?>

<body id="Help_page">
   <section>
      <h1 id="Help_title">ASK US A QUESTION</h1>
      <div id="Help">
            <?php
                 if(!empty($_POST)){
                  try
                  {
                    $info = 'INSERT INTO contacts(message, fname, lname, email)
                    VALUES( :message,:fname, :lname, :email)';
                    $userInput = $db->prepare($info);
                    $userInput->bindParam(':fname',strip_tags($_POST['firstname']));
                    $userInput->bindParam(':lname',strip_tags($_POST['lastname']));
                    $userInput->bindParam(':email',strip_tags($_POST['email']));
                    $userInput->bindParam(':message',strip_tags($_POST['message']));
                    $userInput->execute();
                  } catch(Exception $e){
                    echo $e->getMessage();
                    exit;
                  }
                  try
                  {
                    $message ='SELECT message FROM contacts ORDER BY contactId DESC';
                    $messageInput = $db->prepare($message);
                    $messageInput->execute();
                    $getMessage = $messageInput->fetchAll(PDO::FETCH_ASSOC);
                    foreach($getMessage as $message){
                      echo "
                     <h3>{$message['message']}</h3>
                      ";
                    }
                  }catch(Exception $e){
                    echo $e->getMessage();
                    exit;
                  }
                } else {
                  ?>

      <form class="form-wrapper" name="form" action="help.php"  method="POST">
         <div id="help_first">
            <p>one of our customer service peeps will get back to you fast. We aim to respond to all email within 24 hours.</p>
          <div class="form-text">
            <label for="fname">First Name<input type="text" id="fname" name="firstname" placeholder="First Name" required/></label>
          </div>
          <div class="form-text">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name" required/>
          </div>
          <div class="form-text">
            <label for="email">Email<input type="email" id="email" name="email" placeholder="Email" required/></label>
          </div>
          <div class="form-text">
            <p>Question:</p>
          <textarea placeholder="Please ask your question here..." cols="80" rows="10" name="message" id="message" required></textarea>
        </div>
        <div class="form-button">
         <input type="submit" name="submit" value="Submit"/>
       </div>
         </form>
       <?php } ?>
        <?php 
include 'lib/inc/footer.inc.php';
 ?>
 </body>

</html>