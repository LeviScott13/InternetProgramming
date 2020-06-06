<?php
//main/index layout
	include("dbconnect.php");
?>
<html>
<main>
<head>
<title>Welcome to Pheobe's Closet</title>
<script type="text/javascript" src="main.js"></script>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
		include("header.php");
	?>
    <div class="maincontent">
 <!-- main content goes here-->
      <?php 
		if(!isset($_GET['page'])) {
			include("home.php");
		} else {
			$page=$_GET['page'];
			include("$page.php");
		}
	  
	  ?>
  </div>
    <?php
		include("seccontent.php");
	?>
    <!--gotcha- used unsplash.com to import a gallery of images that shaffle at every page reload-->
	<div id="images", width = 999px>
      <div id="header">
      </div>

      <img src="https://source.unsplash.com/1600x900/?Fashion, Ladies, models" alt="", width = 999px>
      <div id="caption">
        <h3>SIMPLY FASHION.</h3>
      </div>
      <img src="https://source.unsplash.com/1600x900/?Bikini, bathing suit" alt="", width = 999px>
      </div>
    </div>
</main>


	<div class="footer">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		<footer>
	    <h3>Reach Us?</h3>
	    <p>Email or call us for more information</p>
	    <p>Email:
	      <strong>phoebescloset@mangadze_sutton.hi</strong>
	    </p>
	    <p>Phone:
	      <strong>(123) 4567890</strong>
	    </p>
	  </footer>
	</div>
</div><!-- Container ends here-->
</body>
</html>
