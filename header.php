<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <META http-equiv="Content-Type" content="text/html;charset=utf-8">
  <META http-equiv="pragma" content="no-cache">
  <META http-equiv="imagetoolbar" content="no">
  <META name="language" content="en">
  <META name="author" content="Remedi Creative">
  <META name="description" content="Sullivan provides a full range of grinding, saw cutting and other metal manufacturing capabilities. Call 800.943.9511">
  <META name="keywords" content="<?php echo ($keywords != "") ? $keywords : "Sullivan,Sullivan Corp,metal grinding,Blanchard,Blanchard grinding,grinding,grinder,flame cutting,steel plate,full service,saw cutting,stress relief,Wisconsin,Chicago,Milwaukee"; ?>">
  <title>Sullivan Metals<?php if ($PageTitle != "") { echo " - " . $PageTitle; } ?></title>
  <link rel="shortcut icon" href="<?php echo $TopDir; ?>images/favicon.ico">
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/sm2009.css" type="text/css" media="screen,print">
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/menu.css" type="text/css" media="screen,print">
  <?php if (basename(dirname($_SERVER['PHP_SELF'])) == "news") echo '<link rel="stylesheet" type="text/css" media="all" href="wp-content/themes/sullivan/style.css" />'; ?>
  <script src="<?php echo $TopDir; ?>inc/swfobject.js" type="text/javascript"></script>
  <script src="<?php echo $TopDir; ?>inc/jquery-1.2.6.pack.js" type="text/javascript"></script>
  <script src="<?php echo $TopDir; ?>inc/jquery.flow.1.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(function() {
      $("div#controller").jFlow({ slides: "#slides", width: "214px", height: "147px" });
    });
  </script>
  <!--[if lt IE 7]>
    <script src="inc/IE7.js" type="text/javascript"></script>
  <![endif]-->
</head>
<body>

<div id="header">
  <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Sullivan Metals" id="logo"></a>
  
  <div id="menutop">
    <a href="<?php echo $TopDir; ?>.">Home</a>
    <a href="<?php echo $TopDir; ?>news/">News</a>
    <a href="<?php echo $TopDir; ?>contact.php">Contact Us</a>
    <a href="<?php echo $TopDir; ?>sitemap.php">Site Map</a>
  </div> <!-- END menutop -->
  
  <div class="menu">
    <ul>
      <li><a href="<?php echo $TopDir; ?>about.php">About</a></li>
      <li>
        <a href="<?php echo $TopDir; ?>services.php">Services<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
        <ul>
          <li><a href="<?php echo $TopDir; ?>serv-grinding.php">Grinding</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-flamecut.php">Flame-Cut Material</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-stress.php">Stress Relieving</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-fabricating.php">Fabricating</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-machining.php">Machining</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-sawing.php">Sawing</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-blasting.php">Abrasive Blasting</a></li>
          <li><a href="<?php echo $TopDir; ?>serv-waterjet.php">Water Jet</a></li>
        </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
      </li>
      <li><a href="<?php echo $TopDir; ?>sales.php">Sales</a></li>
      <li><a href="<?php echo $TopDir; ?>indserved.php">Industries Served</a></li>
      <li><a href="<?php echo $TopDir; ?>specs.php">Specs</a></li>
      <li><a href="<?php echo $TopDir; ?>rfq.php">RFQ</a></li>
    </ul>
  </div> <!-- END menu -->
</div> <!-- END header -->

<?php if ($PageTitle == "") { ?>
<div id="flash-main">
  <img src="images/flash-main.jpg" alt="Metals processed to your exact specifications" usemap="#flash-main">
  <map name="flash-main">
    <area shape="rect" coords="731,161,756,185" href="services.php" alt="->">
  </map>
</div> <!-- END flash-main -->
<script type="text/javascript">
  var fla = new SWFObject("images/flash-main.swf", "flash-main", "820", "279", "6");
  fla.addParam("wmode", "transparent");
  fla.write("flash-main");
</script>
<?php } ?>

<div id="thecontent<?php if ($PageTitle == '') { echo '-main'; } ?>">
  <div id="title-left">
    <div id="title">
      <?php echo ($PageTitle == "") ? "Services" : $PageTitle; ?>
    </div> <!-- END title -->
  </div> <!-- END title-left -->
  
  <div id="title-right">
    <img src="<?php echo $TopDir; ?>images/WorldsLargest.png" alt="World's Largest" id="wl">
    Blanchard 200 inch Rotary Surface Grinder.
  </div> <!-- END title-right -->
  
  <div style="clear: both; height: 24px;"></div>
  
  <?php if ($PageTitle == "") { ?>
  <div id="content-left">
    <a href="serv-grinding.php" style="color: #2A2B2B;">Grinding</a><br>
    <a href="serv-flamecut.php" style="color: #2A2B2B;">Flame-Cut Material</a><br>
    <a href="serv-stress.php" style="color: #2A2B2B;">Stress Relieving</a><br>
    <a href="serv-fabricating.php" style="color: #2A2B2B;">Fabricating</a><br>
    <a href="serv-machining.php" style="color: #2A2B2B;">Machining</a><br>
    <a href="serv-sawing.php" style="color: #2A2B2B;">Sawing</a><br>
    <a href="serv-blasting.php" style="color: #2A2B2B;">Abrasive Blasting</a><br>
    <a href="serv-waterjet.php" style="color: #2A2B2B;">Water Jet</a><br>
    <br>
    <a href="services.php">More...</a>
  </div> <!-- END content-left -->
  <?php } ?>
  
  <div id="content-mid<?php if ($PageTitle == '') { echo '-main'; } ?>">
