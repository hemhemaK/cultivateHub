<?php include 'filesLogic.php';?>
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
<link href="http://localhost/cultivate/css/headerstyle.css" rel='stylesheet' type='text/css' />
<link href="http://localhost/cultivate/css/homestyle.css" rel='stylesheet' type='text/css' />
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
.cont1 { 
			position: absolute; 
			left: 50%; 
			transform: translate(-50%, -50%); 
			margin-top: 250px; 
			padding: 0; 
			width: 900px; 
			height: 130px;
			box-shadow: 0px 0px 15px -1px rgba(0,0,0); 
		} 
		
		/* Assigning transform to each element 
		of conta for tilt */ 
		.cont1 li { 
			list-style: none; 
			position: absolute; 
			width: 220px; 
			height: 220px; 
			background: #000; 
			transform: rotate(45deg); 
			transition: 0.5s; 
			margin: -100px; 
			overflow: hidden; 
			opacity: 1; 
	        box-shadow: 0px 0px 15px -1px rgba(0,0,0);
		} 
		/* Set opacity to one on mouse hover */ 
		.cont1 li:hover { 
			opacity: 0.5; 
		} 
		/* Assigning position individually 
		to all item of all list */ 
		.cont1 li.item1 { 
			top: 0; 
			left: 0; 
		} 

		.cont1 li.item2 { 
			bottom: 0; 
			left: 25%; 
		} 

		.cont1 li.item3 { 
			top: 0; 
			left: 50%; 
		} 

		.cont1 li.item4 { 
			bottom: 0; 
			left: 75%; 
		} 

		.cont1 li.item5 { 
			top: 0; 
			left: 100%; 
		} 
		/* Assigning transform to each div inside li */ 
		.cont1 li .bg { 
			width: 100%; 
			height: 100%; 
			transform: scale(1.1); 
		} 
		/* Setting background image for every item */ 
		.cont1 li.item1 .bg { 
			background: url('images/facility.jpg'); 
			background-size: cover; 
			background-position: center; 
		} 

		.cont1 li.item2 .bg { 
			background: url('images/aboutus.jpg'); 
			background-size: cover; 
			background-position: center; 
		} 

		.cont1 li.item3 .bg { 
			background: url( 'images/contact.jpg'); 
			background-size: cover; 
			background-position: center; 
		} 

		.cont1 li.item4 .bg { 
			background: url( 'images/apply.jpg'); 
			background-size: cover; 
			background-position: center; 
		} 

		.cont1 li.item5 .bg { 
			background: url( 'images/help.png'); 
			background-size: cover; 
			background-position: center; 
		}
		
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
.btn1 {
  background-color: #007bff; /* Adjust button color as needed */
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin:10px;
}
.btn1:hover{
  background-color: #00cc00;
}
</style>
</head>
<body>
<?php include('includes/header.php');?>
    <div class="container">
      <div class="row">
        <form action="fileindex.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button class="btn1" type="submit" name="save"><b>Upload</b></button>
        </form>
      </div>
    </div>
  
 <!-- Container cards ------->
<hr>		<ul class="cont1"> 
			
			<!-- All li for items -->
			<li class="item1"> 
				<div class="bg"><a href="page.php?type=aboutus"></a></div> 
			</li> 
			<li class="item2"> 
				<div class="bg"><a href="http://localhost/cultivate/loan-list.php"></a></div> 
			</li> 
			<li class="item3"> 
				<div class="bg"><a href=""></a></div> 
			</li> 
			<li class="item4"> 
				<div class="bg"><a href=""></a></div> 
			</li> 
			<li class="item5"> 
				<div class="bg"><a href="http://localhost/cultivate/loan-list.php"></a></div> 
			</li> 
		</ul> 
<!----------container cards---------->
		
