<?php if($_SESSION['login'])
{?>
<head>
<style>
.tp-hd-lft li{
	margin-left:20px;
}
.container1 {
  width: 100%;
  margin: 0 auto;
padding:10px;  
}
</style>
</head>
<div class="top-header">
	<div class="container1">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="prnt"><a href="profile.php"><i class="fa fa-home"></i><b>Profile</b></a></li>
				<li class="prnt"><a href="change-password.php"><i class="fa fa-edit"></i><b>Change Password<b></a></li>
			<li class="prnt"><a href="loan-history.php"><i class="fa fa-chevron-circle-right"></i><b>History</b></a></li>
			<li class="prnt"><a href="issues.php"><i class="fa fa-comments-o"></i><b>Issues Update</b></a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol"></b>Welcome:</b></li>				
			<li class="sig"><b><?php echo htmlentities($_SESSION['login']);?></b></li> 
			<li class="sigi"><a href="logout.php" ><i class="fa fa-external-link"></i><b>Logout</b></a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="head">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Cultivate<span>-HUB</span></a>	
			<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="sig"><a href="signup.php" data-toggle="modal" data-target="#myModal" ><font size="4px"><b>Sign Up</b></font></a></li> 
			<li class="sigi"><a href="signin.php" data-toggle="modal" data-target="#myModal4" ><font size="4px"><b>/Sign In</b></font></a></li>
      
        </ul>
		</div>

		<div class="clearfix"></div>
	</div>
<div class="top-header">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="hm"><a href="admin/index.php"><i class="fa fa-home"></i><b>Admin Login</b></a></li>
				<li class="hm"><a href="http://localhost/cultivate/staff/pages_staff_index.php"><i class="fa fa-home"></i><b>Staff Login</b></a></li>
				
		</ul>
		<div class="clearfix"></div>
	</div>

<?php }?>
<!--- /top-header ---->
<!--- footer-btm ---->
<div class="footer wow fadeInLeft animated" data-wow-delay=".5s">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="container4" id="bs-example-navbar-collapse-1">
					<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
							<li><a href="page.php?type=aboutus"><i class="fa fa-info-circle"></i><font size="4px" color="blue"><b>About</b></font></a></li>
								<li><a href="loan-list.php"><i class="fa fa-list-alt"></i><font size="4px" color="blue"><b>Loan List</b></font></a></li>
			                  </ul>
							  <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
							  <button class="btn btn-sm"><i class="fa fa-android"></i>
							  <li class="sig">
							  <a href="chat_index.php"><font size="3px"><b>ChatBot</b></font></a>
							  </li>
							  </button>
							   
							   </ul>
							   <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
								<?php if($_SESSION['login'])
									
{?>                             
                                
							    <li><a href="userhome.php"><i class="fa fa-cogs"></i><font size="4px" color="blue"><b>Home</b></font></a></li>
                                <li><a href="http://localhost/cultivate/client/pages_client_index.php"><i class="fa fa-inr"></i><font size="4px" color="blue"><b>Loan Details<b></font></a></li>
								<li><a href="enquiry.php"><i class="fa fa-edit"></i><font size="4px" color="blue"><b>Contact US<b></font></a></li>
								<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-comments-o"></i> <b>Help/Write Us</b> </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"><i class="fa fa-exclamation-triangle"></i><font size="4px" color="blue"><b>Enquiry<b></font></a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul></b>
				</div><!-- /.navbar-collapse -->	
	
		
		<div class="clearfix"></div>
	</div>
</div>