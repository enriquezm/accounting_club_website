<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Club Website
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="accounting club at the university of hawaii at manoa" />
	<meta name="keywords" content="accounting club, university of hawaii, institute of management accountants, college of business, school of accountancy, ima, uh, cba, soa" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.ico" />

	<!-- Properly enqueue scripts/styles -->

	<!-- Bootstrap Core CSS -->
	<link href="<?php bloginfo(stylesheet_directory); ?>/css/bootstrap.min.css" rel="stylesheet"/>
	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo(stylesheet_directory); ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
	<!-- Custom CSS -->
	<link href="<?php bloginfo(stylesheet_directory); ?>/css/styling.css" rel="stylesheet"/>
	<!-- Calendar CSS -->
	<link href="<?php bloginfo('template_directory'); ?>/fullcalendar/fullcalendar.css" rel="stylesheet"/>
	<!-- jQuery -->
	<script src='<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js' type='text/javascript' ></script>
	<!-- Calendar Scripts -->
	<script src='<?php bloginfo('template_directory'); ?>/js/moment.min.js' type='text/javascript' ></script>
	<script src='<?php bloginfo('template_directory'); ?>/fullcalendar/fullcalendar.js' type='text/javascript' ></script>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:900,600,400' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Hotjar Tracking Code for acuhmanoa.com -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:68911,hjsv:5};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'club-website' ); ?></a>

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#page-top">Accounting Club at UH Manoa</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- This section of code is the tool bar that scrolls down to sections on Website -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="page-scroll">
							<a href="#recruitment">Home</a>
						</li><!--
						<li class="page-scroll">
							<a href="#about">About</a>
						</li> -->
						<li class="page-scroll">
							<a href="#membership">Membership</a>
						</li>
						<li class="page-scroll">
							<a href="#executiveboard">The Board</a>
						</li>
						<li class="page-scroll">
							<a href="#events">Events</a>
						</li>
					</ul>
				</div>
			</div><!-- Container -->
		</nav><!-- navbar -->
	
