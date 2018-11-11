<?php
    $title = "Fight IQ - Contact Us";
    $mainHeader = "";
    $metaKeywords = "";
    $metaDescription = "";
?>

<?php include 'includes/head2.php'; ?>
<?php include 'includes/header.php'; ?>

<main id="contactForm">

  <form name="contactForm" method="post" action="contact-proc.php">
    
    <table width="400px" cellpadding="10px" align="center" style="margin: 0 auto;">
        
    <tr>
      <th>
        <h1>Contact Us</h1>  
      </th>    
    </tr>
        
    <tr>
      <td>
        <h3>* An asterik shows a required field.</h3>  
      </td>    
    </tr>
        
    <tr>
      <td>
        <input type="text" name="firstName" placeholder="First Name">  
      </td>    
    </tr>
        
    <tr>
      <td>
        <input type="text" name="lastName" placeholder="Last Name">  
      </td>    
    </tr>
        
    <tr>
      <td>
        <input type="email" name="email" placeholder="* Email" required>  
      </td>    
    </tr>
        
    <tr>
      <td>
        <textarea name="message" cols="60" rows="5" placeholder="* Message" required></textarea>  
      </td>    
    </tr>
        
    <tr>
      <td>
        <input type="submit" name="submit" value="Send Message"/>  
      </td>    
    </tr>
      
    </table>  
  
  </form>

</main>

<?php include 'includes/footer2.php'; ?>