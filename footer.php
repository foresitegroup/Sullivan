
  </div> <!-- END content-main -->
  
  <div id="content-right">
    <?php
    $dir = opendir($TopDir . "images/sidebar");
    
    // Read image directory and put files in array
    while(false != ($file = readdir($dir))) {
      if ((substr($file, 0, 1) != ".")) {
        $files[] = $file;
      }
    }
    
    closedir($dir);
    
    // Sort file array
    sort($files);
    
    $control = "";
    $slides = "";
    
    // List files in dropdown
    foreach ($files as $file) {
      $control .= "<span class=\"jFlowControl\">*</span>\n";
      $slides .= "<div><img src=\"" . $TopDir . "images/sidebar/" . $file . "\" alt=\"\"></div>\n";
    }
    ?>
    
    <div id="controller">
       <?php echo $control; ?>
    </div>

    <div id="slideshow">
      <div id="slides">
        <?php echo $slides; ?>
      </div>
      
      
    </div>
    <img src="<?php echo $TopDir; ?>images/prev.png" alt="Previous" class="jFlowPrev">
    <img src="<?php echo $TopDir; ?>images/next.png" alt="Next" class="jFlowNext">
    
    <a href="<?php echo $TopDir; ?>rfq.php" class="sidelink">Request a Quote</a>
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'],"iPhone") == true) { echo "<a href=\"tel:800-943-9511\">"; } ?>
    <img src="<?php echo $TopDir; ?>images/phone.png" alt="Call 800-943-9511" id="phone">
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'],"iPhone") == true) { echo "</a>\n"; } ?>
  </div> <!-- END content-right -->
  
  <div style="clear: both;"></div>
</div> <!-- END thecontent -->

<div id="footer">
  <div id="menubottom">
    <a href="<?php echo $TopDir; ?>.">home</a> | 
    <a href="<?php echo $TopDir; ?>about.php">about</a> | 
    <a href="<?php echo $TopDir; ?>services.php">services</a> | 
    <a href="<?php echo $TopDir; ?>sales.php">sales</a> | 
    <a href="<?php echo $TopDir; ?>indserved.php">industries served</a> | 
    <a href="<?php echo $TopDir; ?>specs.php">specs</a> | 
    <a href="<?php echo $TopDir; ?>rfq.php">rfq</a> | 
    <a href="<?php echo $TopDir; ?>contact.php">contact</a> | 
    <a href="<?php echo $TopDir; ?>sitemap.php">site map</a>
  </div> <!-- END menubottom -->
  
  &copy; <?php echo date("Y"); ?> Sullivan Metals Inc. All Rights Reserved<br>
  <br>
  
  <div style="text-align: center; font-size: 90%; color: #7C8485;">
    Website created and maintained by <a href="http://www.foresitegrp.com">Foresite Group</a>
  </div>
</div> <!-- END footer -->

<!-- BEGIN Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12449023-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<!-- END Google Analytics -->

</body>
</html>