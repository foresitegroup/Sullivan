<?php
$PageTitle = "Request For Quote";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "RemediSullivan";
?>

<?php
if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
  if (
        $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('phonenumber' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST['type'] != "" &&
        $_POST['reply'] != "" &&
        $_POST['qmonth'] != "" &&
        $_POST['qday'] != "" &&
        $_POST['qyear'] != "" &&
        $_POST['smonth'] != "" &&
        $_POST['sday'] != "" &&
        $_POST['syear'] != "" &&
        $_POST['cmonth'] != "" &&
        $_POST['cday'] != "" &&
        $_POST['cyear'] != ""
      ) {
    // All required fields have been filled, so construct the message
    $SendTo = "sales@thesullivancorp.com, amoir@aol.com";
    $Subject = "Request For Quote";
    $From = "From: Quote Request Form <quoterequestform@thesullivancorp.com>\r\n";
    $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    
    $Message = $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if (!empty($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n" . $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    $Message .= "\n" . $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    $Message .= "\n" . $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ", " . $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " " . $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    $Message .= "\n\nPhone: " . $_POST[md5('phonenumber' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    if (!empty($_POST[md5('fax' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\nFax: " . $_POST[md5('fax' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    $Message .= "\nEmail: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    $Message .= "\n\nRFQ Inquiry Type: " . $_POST['type'];
    
    if (!empty($_POST[md5('services' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n\nDescription of Services Needed\n" . $_POST[md5('services' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    $Message .= "\n\nCompanies Should Reply By " . $_POST['reply'];
    
    if (!empty($_POST[md5('certification' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n\nQuality Certification\n" . $_POST[md5('certification' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    $Message .= "\n\nQuote Information Needed By " . $_POST['qmonth'] . "/" . $_POST['qday'] . "/" . $_POST['qyear'];
    $Message .= "\nService Needed To Start By " . $_POST['smonth'] . "/" . $_POST['sday'] . "/" . $_POST['syear'];
    $Message .= "\nService Needed To Be Completed By " . $_POST['cmonth'] . "/" . $_POST['cday'] . "/" . $_POST['cyear'];
    
    if (!empty($_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n\nComment / Special Instructions\n" . $_POST[md5('comment' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    $Message = stripslashes($Message);
    
    mail($SendTo, $Subject, $Message, $From);
    //echo "<pre>$Message</pre><br><br>";
    
    echo "<span class=\"headline\">Your quote has been submitted!</span><br>\n<br>\nThank you for your interest in Sullivan Metals.  A Sullivan sales engineer will follow up with this RFQ to ensure we understand the details of your manufacturing needs.";
  } else {
    echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
  }
} else {
?>

<script type="text/javascript">
  function checkRadio(field) { for(var i=0; i < field.length; i++) { if(field[i].checked) return field[i].value; } return false; }

  function checkform (form) {
    if (document.getElementById('name').value == "") { alert('Name required.'); document.getElementById('name').focus(); return false ; }
    if (document.getElementById('address').value == "") { alert('Address required.'); document.getElementById('address').focus(); return false ; }
    if (document.getElementById('city').value == "") { alert('City required.'); document.getElementById('city').focus(); return false ; }
    if (document.getElementById('state').value == "") { alert('State required.'); document.getElementById('state').focus(); return false ; }
    if (document.getElementById('zip').value == "") { alert('Zip Code required.'); document.getElementById('zip').focus(); return false ; }
    if (document.getElementById('phonenumber').value == "") { alert('Phone required.'); document.getElementById('phonenumber').focus(); return false ; }
    if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
    if (checkRadio(form.type) == "") { alert('RFQ Inquiry Type required.'); return false; }
    if (checkRadio(form.reply) == "") { alert('Reply Method required.'); return false; }
    if (form.qmonth.value == "") { alert('Quote Information Month required.'); return false; }
    if (form.qday.value == "") { alert('Quote Information Day required.'); return false; }
    if (form.qyear.value == "") { alert('Quote Information Year required.'); return false; }
    if (form.smonth.value == "") { alert('Service Start Month required.'); return false; }
    if (form.sday.value == "") { alert('Service Start Day required.'); return false; }
    if (form.syear.value == "") { alert('Service Start Year required.'); return false; }
    if (form.cmonth.value == "") { alert('Service Completion Month required.'); return false; }
    if (form.cday.value == "") { alert('Service Completion Day required.'); return false; }
    if (form.cyear.value == "") { alert('Service Completion Year required.'); return false; }
    return true ;
  }
</script>

Please fill in the fields below so we can process and send your Request For Quote (RFQ) inquiry.  A Sullivan sales engineer will follow up with this RFQ to ensure we understand the details of your manufacturing needs.<br>
<br>
<form action="rfq.php" method="POST" onSubmit="return checkform(this)" id="rfq">
  <div>
    <label for="name">Name</label> <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name"><br>
    <br>

    <label for="company">Company</label> <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company"><br>
    <br>

    <label for="address">Address</label> <input type="text" name="<?php echo md5("address" . $ip . $salt . $timestamp); ?>" id="address"><br>
    <br>

    <label for="city">City</label> <input type="text" name="<?php echo md5("city" . $ip . $salt . $timestamp); ?>" id="city"><br>
    <br>

    <label for="state">State</label> <input type="text" name="<?php echo md5("state" . $ip . $salt . $timestamp); ?>" id="state" style="float: left; width: 20px; margin-right: 30px;">
    <label for="zip">Zip Code</label> <input type="text" name="<?php echo md5("zip" . $ip . $salt . $timestamp); ?>" id="zip" style="width: 70px;"><br>
    <br>

    <label for="phonenumber">Phone</label> <input type="text" name="<?php echo md5("phonenumber" . $ip . $salt . $timestamp); ?>" id="phonenumber"><br>
    <br>

    <label for="fax">Fax</label> <input type="text" name="<?php echo md5("fax" . $ip . $salt . $timestamp); ?>" id="fax"><br>
    <br>

    <label for="email">Email</label> <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email"><br>
    <br>
    
    <strong>RFQ Inquiry Type</strong><br>
    <input type="radio" name="type" style="width: auto;" value="Bid to place order"> Bid to place order<br>
    <input type="radio" name="type" style="width: auto;" value="Request company information"> Request company information<br>
    <br>
    
    <strong>Description of Services Needed</strong><br>
    <textarea name="<?php echo md5("services" . $ip . $salt . $timestamp); ?>" id="services" rows="5" cols="39"></textarea><br>
    <br>
    
    <strong>Companies Should Reply By</strong><br>
    <input type="radio" name="reply" style="width: auto;" value="Email"> Email<br>
    <input type="radio" name="reply" style="width: auto;" value="Fax"> Fax<br>
    <input type="radio" name="reply" style="width: auto;" value="Phone"> Phone<br>
    <input type="radio" name="reply" style="width: auto;" value="Posted Mail"> Posted Mail<br>
    <br>
    
    <strong>Quality Certification (if any)</strong><br>
    <textarea name="<?php echo md5("certification" . $ip . $salt . $timestamp); ?>" id="certification" rows="5" cols="39"></textarea><br>
    <br>
    
    <strong>Quote Information Needed By</strong><br>
    <select name="qmonth">
      <option value="">Month</option>
      <?php
      $monthName = array(1=> "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      for ($theMonth = 1; $theMonth <= 12; $theMonth ++) {
        echo "<option value=\"" . $theMonth . "\">" . $monthName[$theMonth] . "\n";
      }
      ?>
    </select>
    
    <select name="qday">
      <option value="">Day</option>
      <?php
      for ($theDay = 1; $theDay <= 31; $theDay ++) {
        echo "<option value=\"" . $theDay . "\">" . $theDay . "\n";
      }
      ?>
    </select>
    
    <select name="qyear">
      <option value="">Year</option>
      <?php
      $startYear = date("Y");
      for ($theYear = $startYear; $theYear <= $startYear+5; $theYear++) {
        echo "<option value=\"" . $theYear . "\">" . $theYear . "\n";
      }
      ?>
    </select><br>
    <br>
    
    <strong>Service Needed To Start By</strong><br>
    <select name="smonth">
      <option value="">Month</option>
      <?php
      for ($theMonth = 1; $theMonth <= 12; $theMonth ++) {
        echo "<option value=\"" . $theMonth . "\">" . $monthName[$theMonth] . "\n";
      }
      ?>
    </select>
    
    <select name="sday">
      <option value="">Day</option>
      <?php
      for ($theDay = 1; $theDay <= 31; $theDay ++) {
        echo "<option value=\"" . $theDay . "\">" . $theDay . "\n";
      }
      ?>
    </select>
    
    <select name="syear">
      <option value="">Year</option>
      <?php
      $startYear = date("Y");
      for ($theYear = $startYear; $theYear <= $startYear+5; $theYear++) {
        echo "<option value=\"" . $theYear . "\">" . $theYear . "\n";
      }
      ?>
    </select><br>
    <br>
    
    <strong>Service Needed To Be Completed By</strong><br>
    <select name="cmonth">
      <option value="">Month</option>
      <?php
      for ($theMonth = 1; $theMonth <= 12; $theMonth ++) {
        echo "<option value=\"" . $theMonth . "\">" . $monthName[$theMonth] . "\n";
      }
      ?>
    </select>
    
    <select name="cday">
      <option value="">Day</option>
      <?php
      for ($theDay = 1; $theDay <= 31; $theDay ++) {
        echo "<option value=\"" . $theDay . "\">" . $theDay . "\n";
      }
      ?>
    </select>
    
    <select name="cyear">
      <option value="">Year</option>
      <?php
      $startYear = date("Y");
      for ($theYear = $startYear; $theYear <= $startYear+5; $theYear++) {
        echo "<option value=\"" . $theYear . "\">" . $theYear . "\n";
      }
      ?>
    </select><br>
    <br>
    
    <strong>Comment / Special Instructions</strong><br>
    <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" rows="5" cols="39"></textarea><br>
    <br>

    <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
      
    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <input type="submit" name="submit" value="Send" id="button">
  </div>
</form>
<?php } ?>

<?php include "footer.php"; ?>