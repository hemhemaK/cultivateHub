<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>| Cultivate_HUB |</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/headerstyle.css" rel='stylesheet' type='text/css' />
<link href="css/homestyle.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<style>
		
* {
	box-sizing: border-box;
}
body {
	font-family: Verdana, sans-serif;
}
.mySlides {
	display: none;
	box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}

img {
	height:500px;
	box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}

/* Slideshow container */
.slideshow-container {
  position: static;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 20px;
  padding: 18px 22px;
  position: absolute;
  top: 350px;
  width: 100%;
  text-align: left;
  background: rgba(76, 175, 80, 0.2);
  box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}

/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<?php include('includes/header.php');?>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/bg1.jpg" style="width:100%">
  <div class="text"><h1><b><hr>"The ultimate goal of farming is not the growing of crops <br>but the cultivation and perfection of human beings."</b><hr></h1></div>
</div>

<div class="mySlides fade">
  <img src="images/bg2.jpg" style="width:100%">
  <div class="text"><h1><b><hr>Farming looks mighty easy when your plow is a pencil,<br> and you’re a thousand miles from the cornfield</b><hr></h1></div>
</div>

<div class="mySlides fade">
  <img src="images/bg3.jpg" style="width:100%">
  <div class="text"><h1><b><hr>Agriculture, manufactures, commerce, and navigation, <br>the four pillars of our prosperity, are the most thriving <br>when left most free to individual enterprise.</b><hr></h1></div>
</div>

</div>
<hr>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
 <!-- Container cards ------->
<hr>	
	
<?php include('includes/footer.php');?>	
