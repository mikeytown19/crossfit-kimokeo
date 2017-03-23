<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
    echo ' :';
} ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear " role="banner">

					<!-- logo -->

					<!-- /logo -->

					<!-- nav -->
					<!-- <nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> -->

					<div class="nav-container nav-color">


					<div class="nav-bar nav-color flex ">
						<div class="nav-logo ">

							<a class="flex jc-center" href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/nav-bar/header-logo.svg" alt="Logo">
								<div class="logo-text">
									Crossfit <br> Kimokeo
								</div>
							</a>

							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/nav-bar/pe-logo.png" alt="Logo">

							<img src="<?php echo get_template_directory_uri(); ?>/img/nav-bar/gorilla.png" alt="Logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/nav-bar/logo-text.png" alt="Logo"> -->
						</div>
						<div class="nav-menu flex flex2">
							<!-- <a class="sub-nav " id="nav-home" onclick="smoothScroll(document.getElementById('Home'))">
								Home
							</a> -->
							<a class="sub-nav"  href="#nav-about">
								About
							</a>
							<a class="sub-nav " href='#nav-scheduale'>
								Schedule
							</a>
							<a class="sub-nav" href="#nav-pricing">
								Pricing
							</a>
							<a class="sub-nav" href="#nav-programs">
								Programs
							</a>

							<a class="sub-nav" href="#nav-coaches">
								Coaches
							</a>
							<a class="sub-nav" href="#nav-contact">
								Contact
							</a>
							<div id="nav-sign-up" class="sub-nav a-sign-up">
								<a class=""href="/"> Sign up </a>
							</div>
						</div>
					</div>

</div>

<!-- <div class="mobile-nav-container">


<div class="mobile-nav-bar  flex ">
	<div class="mobile-nav-logo flex1">
		<img src="<?php echo get_template_directory_uri(); ?>/img/nav-bar/navLogo.png" alt="Logo">
	</div>
	<div class="mobile-nav-menu flex flex2">
		<a class="mobile-sub-nav" id="nav-home">
			Home
		</a>
		<a class="mobile-sub-nav" id="nav-">
			Scheduale
		</a>
		<a class="mobile-sub-nav" id="nav-">
			Pricing
		</a>
		<a class="mobile-sub-nav" id="nav-">
			Programs
		</a>
		<a class="mobile-sub-nav" id="nav-">
			About
		</a>
		<a class="mobile-sub-nav" id="nav-">
			Contact
		</a>
		<div id="nav-sign-up" class="mobile-sub-nav a-sign-up">
			<a class=""href="/"> Sign up </a>
		</div>
	</div>
</div>

</div> -->

<!-- <div class="topNav" id="myTopnav">
	<div class="mobile-list-container">
	<div class="mobile-menu-list"><a href="#home">Home</a></div>
	<div class="mobile-menu-list"><a href="#news"></a>News</div>
	<div class="mobile-menu-list"><a href="#contact">Contact</a></div>
	<div class="mobile-menu-list"><a href="#about">About</a></div>
		</div>
		<div class="icon mobile-icon">
			  <a class="hamburger-icon"href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
		</div>
</div> -->
<div class="mobile-nav">


<a class="mobile-nav-logo"href="/"></a>

<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="mobile-menu-items">


		<a class="sub-nav"  href="#nav-about">
			About
		</a>
		<a class="sub-nav " href='#nav-scheduale'>
			Schedule
		</a>
		<a class="sub-nav" href="#nav-pricing">
			Pricing
		</a>
		<a class="sub-nav" href="#nav-programs">
			Programs
		</a>

		<a class="sub-nav" href="#nav-coaches">
			Coaches
		</a>
		<a class="sub-nav" href="#nav-contact">
			Contact
		</a>
	<div id="nav-sign-up" class="sub-nav a-sign-up">
		<a class="mobile-sign-up"href="/"> Sign up </a>
	</div>
	</div>
</div>

<!-- Use any element to open the sidenav -->
<span class="hamburger-icon"onclick="openNav()">&#9776;</span>
</div>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->


<!-- <ul class="topnav" id="myTopnav">
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul> -->


					<!-- /nav -->

			</header>
			<!-- /header -->
