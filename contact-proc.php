<?php

  // handle incoming form vars from contact.php
  // see book ph 12
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // concatenate the form vars into a message
  $msg = "Email from Fight IQ Contact Us";
  $msg .= "\nFirst Name: " . $firstName;
  $msg .= "\nLast Name: " . $lastName;
  $msg .= "\nEmail: " . $email;
  $msg .= "\nMessage:\n" . $message;

  // set vars for the mail() method
//  $to = "marcus.sauceda@codeimmersives.com";
  $to = "";
  $subject = "Contact Form from Website";
  $mailheaders = "From: " . $email;
  $mailheaders .= "\Reply-to: " . $email;

  // send the mail
  mail($to, $subject, $msg, $mailheaders);

?>

<?php
    $title = "Fight IQ - Contact Us";
    $metaKeywords = "";
    $metaDescription = "";
?>

<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main id="messageSent">
    
  <h1> Your message was sent successfuly, we'll reply asap. <br> Thank you for using FightIQ.</h1>  
      
</main>

<?php include 'includes/footer.php'; ?>