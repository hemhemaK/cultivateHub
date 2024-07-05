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
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
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
<!----------container cards---------->
			</div>
				<div class="clearfix"></div>
		</div>


<head>
<style>
.container1{
	margin-top:10px;
	margin-bottom:40px;
	background-color:#e0ebeb;
	padding:0px;
	height:40px;
	width:650px;
    box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}
.container1 h1{
	margin-left:5px;
}

.rom-btm{
	margin-top:10px;
	margin-bottom:5px;
	background-color:#e0ebeb;
	padding:0px;
	height:150px;
	width:650px;
    box-shadow: 0px 0px 10px -1px rgba(0,0,0);
}
.room-left img{
	height:150px; 
}
.room-right{
	margin-top:5px;
}
.room-right .view {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 3px;
    margin-top: 10px;
}

.room-right .view:hover {
    background-color: #555;
}
.view1 {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 3px;
    margin-top: 10px;
}

.view1:hover {
    background-color: black;
}

.container2{
	float:right;
	margin-top:10px;
	background-color:#e0ebeb;
	padding:0px;
	height:40px;
	width:600px;
    box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}
.container2 h1{
	margin-top:1px;
}

</style>
</head>
<!---application---->

<div class="container2">
	<h1><b>New Notification</b></h1>
</div>

<div class="container1">
	<div class="holiday">
	



	
	<h1><b>Loan List</b></h1>

					
<?php $sql = "SELECT * from loanpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/packageimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h5><b>Loan Name : </b><?php echo htmlentities($result->PackageName);?></h5>
					<h5><b>Duration : </b><?php echo htmlentities($result->PackageType);?></h5>
					<p><b>Description :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Requirements :</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<a href="loan-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view"><b>Details</b></a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
</div>			
		
<div><a href="loan-list.php" class="view1"><h4><b>View More Loans</b></h4></a></div>
			<div class="clearfix"></div>
	</div>

<?php include('includes/footer.php');?>		
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
</body>
</html>