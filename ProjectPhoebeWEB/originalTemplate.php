<?php
//This file is the base/skeleton for all pages in the site. I used copies of this to make all other pages. 
	include("dbconnect.php");
?>
<html>
<head>
<title>Welcome to Phoebe's Closet</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
		include("header.php");
	?>
    <div class="maincontent">
 <!-- main content goes here-->
      <p>Best prices and discounts!</p>
  </div>
    <?php
		include("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
