<?php
$PageTitle = "Contact Us";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "RemediSullivan";
?>

<div style="float: left; margin-right: 10px;">
  <img src="images/contact.jpg" alt="" style="width: 206px; height: 146px;"><br>
  <br>
  Sullivan Metals<br>
  460 Cardinal Lane<br>
  Hartland, Wisconsin 53029<br>
  <br>
  Phone 262-369-7200<br>
  Fax 262-369-7219
</div>

<?php
if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
  if (
        $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
      ) {
    // All required fields have been filled, so construct the message
    $SendTo = "sales@thesullivancorp.com";
    $Subject = "Comment From Sullivan Website";
    $From = "From: Contact Form <contactform@thesullivancorp.com>\r\n";
    $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    
    $Message = "Comment / Question from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

    if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])])) $Message .= "\n" . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    $Message .= "\n\n";
    
    $Message .= $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    
    $Message = stripslashes($Message);
    
    mail($SendTo, $Subject, $Message, $From);
    //echo "<pre>$Message</pre><br><br>";
    
    echo "<span class=\"headline\">Your message has been sent!</span><br>\n<br>\nThank you for your interest in Sullivan Metals.  You will be contacted shortly.";
  } else {
    echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
  }
} else {
?>
<script type="text/javascript">
  function checkform (form) {
    if (document.getElementById('name').value == "") { alert('Name required.'); document.getElementById('name').focus(); return false ; }
    if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
    if (document.getElementById('comment').value == "") { alert('Question / Comment required.'); document.getElementById('comment').focus(); return false ; }
    return true ;
  }
</script>

<form action="contact.php" method="POST" onSubmit="return checkform(this)" id="contact">
  <div>
    <label for="name" style="font-weight: bold;">Name</label><br>
    <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name"><br>
    <br>

    <label for="company" style="font-weight: bold;">Company</label><br>
    <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company"><br>
    <br>

    <label for="email" style="font-weight: bold;">Email</label><br>
    <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email"><br>
    <br>

    <label for="comment" style="font-weight: bold;">Question / Comment</label><br>
    <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" rows="8" cols="30"></textarea><br>
    <br>

    <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
      
    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <input type="submit" name="submit" value="Send" id="button">
  </div>
</form>
<?php } ?>

<?php include "footer.php"; ?>