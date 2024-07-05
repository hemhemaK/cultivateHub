<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$status=0;
$sql="INSERT INTO applying(PackageId,UserEmail,FromDate,ToDate,status) VALUES(:pid,:useremail,:fromdate,:todate,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg ="Now Upload Land Images in pdf formate, the file name should be your Email-Id";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Cultivate-HuB</title>
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
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

h3, h2, p {
  margin: 10px 0;
  padding: 0;
}

/* Form container */
.selectroom_top {
  display: flex; /* Use flexbox for side-by-side layout */
  margin-bottom: 20px;
  background-color:#f5f5f5;
  box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}

/* Form image */
.selectroom_left img {
  width: 100%;
margin-top:10px;  /* Adjust image width as needed */
}

/* Form details */
.selectroom_right {
  padding: 20px;
}

.selectroom_right h2 {
  font-size: 20px;
}

.dow, p {
  font-size: 14px;
  margin-bottom: 5px;
}

.ban-bottom {
  display: flex; /* Use flexbox for side-by-side labels and inputs */
  margin-top: 10px;
}

.inputLabel {
  font-weight: bold;
  margin-right: 10px;
}

.date {
  width: 100px; /* Adjust input width as needed */
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.grand {
  margin-top: 20px;
}

/* Help Needed section */
.selectroom-info {
  margin-top: 20px;
}

.selectroom-info ul li {
  list-style: none;
  margin-bottom: 10px;
}

.btn-primary {
  background-color: #007bff; /* Adjust button color as needed */
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
.btn-primary:hover{
  background-color: #00cc00;
}
.btn1 {
  background-color: #007bff; /* Adjust button color as needed */
  color: #fff;
  padding: 10px 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin:10px;
}
.btn1:hover{
  background-color: #00cc00;
}
.container{ background-color:#f5f5f5;
  box-shadow: 0px 0px 15px -1px rgba(0,0,0);
}
	

		</style>				
</head>
<body>
<!-- top-header -->
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">| Cultivate-HUB | -Loan Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong><font color="Red">ERROR</font></strong> : <?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong><font color="green">SUCCESS</font></strong> : <?php echo htmlentities($msg); ?><button class="btn1"><a href="http://localhost/cultivate/fileindex.php "><b><font color="white">Here</font></b></a></button></div>
				<?php }?>
<?php 

$pid=intval($_GET['pkgid']);
$sql = "SELECT * from loanpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/packageimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#LID-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Duratuion :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Acers :</b><?php echo htmlentities($result->PackageDetails);?> </p>	
				<p><b>Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Loan Details :</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input   type="date" placeholder="yyyy-mm-dd"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input  type="date" placeholder="yyyy-mm-dd" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
			</div>
				<div class="clearfix"></div>
		</div>
					<?php if($_SESSION['login'])
					{?>
					<button type="submit" name="submit2" class="btn-primary btn">Apply</button>
						<?php } else {?>
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Apply</a>
							<?php } ?>
					<div class="clearfix"></div>
		</form>
<?php }} ?>


	</div>
</div>
<!--- /selectroom ---->
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>