<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
    echo ' :';
} ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/gsvg.svg" rel="shortcut icon">
        <link type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/gsvg.svg" rel="apple-touch-icon-precomposed">


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


					<div class="nav-container nav-color">


					<div class="nav-bar nav-color flex ">
						<div class="nav-logo ">

							<a class="flex jc-center" href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/nav-bar/header-logo.svg" alt="Logo">
								<div class="logo-text">
									Crossfit <br> Kimokeo
								</div>
							</a>
						</div>
						<div class="nav-menu flex flex2">

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


<div class="mobile-nav">


<a class="mobile-nav-logo"href="/"></a>

<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="mobile-menu-items">

		<a class="sub-nav"  onclick="closeNav()"href="#nav-get-started">
			Get Started
		</a>
		<a class="sub-nav " onclick="closeNav()"href='#nav-schedualeM'>
			Schedule
		</a>
		<a class="sub-nav " onclick="closeNav()"href='#nav-wod'>
			Workout Of the Day
		</a>
		<a class="sub-nav"  onclick="closeNav()"href="#nav-about">
			About
		</a>

		<a class="sub-nav" onclick="closeNav()"href="#nav-pricing">
			Pricing
		</a>
		<a class="sub-nav" onclick="closeNav()"href="#nav-programs">
			Programs
		</a>

		<a class="sub-nav" onclick="closeNav()"href="#nav-coaches">
			Coaches
		</a>
		<a class="sub-nav" onclick="closeNav()"href="#nav-contact">
			Contact
		</a>
	<div id="nav-sign-up" class=" a-sign-up">
		<a class="mobile-sign-up" href='https://app.wodify.com/OnlineSalesSetup/OnlineMembershipSalesConfigurationEntry.aspx'> Sign up </a>
	</div>
	</div>
</div>

<!-- Use any element to open the sidenav -->
<span class="hamburger-icon"onclick="openNav()">&#9776;</span>
</div>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->



					<!-- /nav -->

			</header>
			<!-- /header -->
