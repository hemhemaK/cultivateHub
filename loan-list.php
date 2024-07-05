<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>| Cultivate-Hub |</title>
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
.view {
    font-size: 16px;
	text-indent: 0;
    padding: 16px 30px;
    color: #000;
    background-color:#1f8dd6;
    border: 0;
    border-radius: 2px;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    transition: all .2s;
    background-repeat: no-repeat;
    background-position: 96% center;
	top:20px;
	margin-left:45%;
    box-shadow: 0px 0px 15px -1px rgba(0,0,0);
} 
.view:hover{
    background-color:#34ad00;
    outline: 0;
	color:white;
}
.room-right{
	margin-top:90px;
}
.container2{
	margin-top:20px;
	margin-bottom:40px;
	background-color:#e0ebeb;
	padding:0px;
	height:45px;
	width:1000px;
    box-shadow: 0px 0px 15px -1px rgba(0,0,0);
	margin-left:150px;
}
.container2 h3{
	margin:10px;
	padding:5px;
	font-size:36px;
}
.rom-btm{
	margin-top:20px;
	margin-bottom:5px;
	background-color:#e0ebeb;
	padding:0px;
	height:150px;
	width:1000px;
    box-shadow: 0px 0px 10px -1px rgba(0,0,0);
}
.room-left img{
	height:150px; 
	width:100%;
}

</style>
</head>
<body>
<?php include('includes/header.php');?>
<!--- banner ---->

<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container2">
		
		<div class="room-bottom">
			<h3><b>Loan-List<b></h3>

					
<?php $sql = "SELECT * from loanpackages";
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
					<h4><b>Loan Name: <?php echo htmlentities($result->PackageName);?></b></h4>
					<p><b>Duration : </b><?php echo htmlentities($result->PackageType);?></p>
					<p><b>Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Required :</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<a href="loan-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view"><b>View</b></a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
		
		</div>
	</div>
</div>
<!--- /rooms ---->
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>