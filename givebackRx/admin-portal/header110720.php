<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>givebackRx.com</title>
    <!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
  </head>
  <body>
  
	<div class="admin-portal-wrapper">
		<div class="admin-left-menu" id="mobile_adminnav">
			<a href="index.html" class="mobile-adminlogo"><img class="p-4" src="../assets/images/ic_logo_home.png" alt="" width="100%"></a>
			<ul>
				<li class="close_btn d-block d-xl-none" onclick="closeNav()"><img src="../assets/panel-img/close-white.png" alt="" width="25"> </li>
				<li><a class="active" href="dashboard.php">
					<img class="default-icon" src="../assets/panel-img/ic_dashboard.svg" alt="">
					<img class="active-icon" src="../assets/panel-img/ic_dashboard_active.svg" alt=""> 
					Dashboard</a>
				</li>
				<li><a href="favority-medicatioin.php">
					<img class="default-icon" src="../assets/panel-img/ic_fav.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_fav_active.svg" alt=""> 
					Favorite Medications</a>
				</li>
				<li><a href="recent-purchase.php">
					<img class="default-icon" src="../assets/panel-img/ic_recent_purchases.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_recent_purchases_active.svg" alt=""> 
					Recent Purchases</a>
				</li>
				<li><a href="update-card.php">
					<img class="default-icon" src="../assets/panel-img/ic_card.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_card_active.svg" alt=""> 
					Update Card</a>
				</li>
				<li><a href="my-charity.php">
					<img class="default-icon" src="../assets/panel-img/ic_charity.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_charity_active.svg" alt=""> 
					My Charity</a>
				</li>
				<li><a href="my-referral.php">
					<img class="default-icon" src="../assets/panel-img/ic_referrals.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_referrals_active.svg" alt=""> 
					My Referrals</a>
				</li>
				<li><a href="my-task.php">
					<img class="default-icon" src="../assets/panel-img/ic_tasks.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_tasks_active.svg" alt=""> 
					My Tasks</a>
				</li>
				<li><a href="my-notice.php">
					<img class="default-icon" src="../assets/panel-img/ic_notices.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_notices_active.svg" alt=""> 
					My Notices</a>
				</li>
				<li><a href="my-profile.php">
					<img class="default-icon" src="../assets/panel-img/ic_profile.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_profile_active.svg" alt=""> 
					My Profile</a>
				</li>
				<li><a href="get-help.php">
					<img class="default-icon" src="../assets/panel-img/ic_help.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_help_active.svg" alt=""> 
					Get Help</a>
				</li>
				<li><a href="faq.php">
					<img class="default-icon" src="../assets/panel-img/ic_faq.svg" alt=""> 
					<img class="active-icon" src="../assets/panel-img/ic_faq_active.svg" alt=""> 
					FAQ's</a>
				</li>
				<li><a href="#" data-toggle="modal" data-target="#logout-popup">
					<img class="default-icon ml-1" src="../assets/panel-img/logout.svg" alt="" width="20"> 
					<img class="active-icon ml-1" src="../assets/panel-img/logout.svg" alt="" width="22"> 
					Logout</a>
				</li>
			</ul>
		</div>
		<div class="admin-right-wrapper">
			<nav class="admin-portal-header">
			  <div class="toggle_nav d-block d-xl-none">
			    <span onclick="openNav()"><img src="../assets/panel-img/open-menu.png" alt="" width="32"></span>
			  </div>
			  <div class="justify-content-end d-flex w-100">
				<ul class="navbar-nav">
				  <li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				  </li>
				  <li class="nav-item d-none d-md-block">
					<a class="nav-link" href="#">How It Works</a>
				  </li>
				  <li class="nav-item d-none d-md-block">
					<a class="nav-link" href="#">Marketplace Search</a>
				  </li>
				  <li class="nav-item d-none d-md-block">
					<a class="nav-link" href="#">Get Mobile App</a>
				  </li>
				  <li class="nav-item dropdown header-dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 More
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Special offers</a>
					  <a class="dropdown-item" href="#">Giveback store</a>
					  <a class="dropdown-item" href="#">Refer a friend</a>
					  <a class="dropdown-item" href="#">Pharmacies near me</a>
					  <a class="dropdown-item" href="#">Search charities</a>
					  <a class="dropdown-item" href="#">Charity organization sign up</a>
					  <a class="dropdown-item" href="#">Help center</a>
					  <a class="dropdown-item" href="#">About Giveback Rx</a>
					  <a class="dropdown-item d-block d-md-none" href="#">How It Works</a>
					  <a class="dropdown-item d-block d-md-none" href="#">Marketplace Search</a>
					  <a class="dropdown-item d-block d-md-none" href="#">Get Mobile App</a>
					</div>
				  </li>
				</ul>
				<div class="ml-3 ml-lg-5 admin-header-icon">
				  <a href="#" class=""><img src="../assets/panel-img/ic_charity_logo.png" alt=""></a>
				  <a href="#" class=""><img src="../assets/panel-img/ic_cart.svg" alt=""></a>
				  <a href="#" class="header-user-img"><img src="../assets/images/ic_img_3.png" alt=""></a>
				</div>
			  </div>
			</nav>
	