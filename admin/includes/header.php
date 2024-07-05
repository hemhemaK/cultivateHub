<head>
<style>
.header-main {
    background-color: #333;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.logo-w3-agile {
    flex: 1;
}

.logo-w3-agile h1 {
    margin: 0;
}

.profile_details {
    flex: 1;
    display: flex;
    justify-content: flex-end;
    align-items: left;
}

.profile_details ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.profile_details li {
    display: inline-block;
    margin-right: 20px;
}

.profile_details .dropdown {
    position: relative;
}
</style>
</head>

<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="http://localhost/cultivate/admin/dashboard.php"><b>| Cultivate_HUB |</b></a></h1>
							</div>
				
						
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="http://localhost/cultivate/admin/images/User-icon.png" alt=""> </span> 
												<div class="user-name">
													<p>Welcome</p>
													<span><b>Administrator</b></span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="http://localhost/cultivate/admin/change-password.php"><i class="fa fa-lock"></i> Setting</a> </li> 
											<li> <a href="http://localhost/cultivate/admin/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>