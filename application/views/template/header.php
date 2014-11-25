<!DOCTYPE html>
<html class="no-js" lang="">

<?php
	$base_url = base_url();
	$zone_url = zone_url();
	$tab = $this->uri->segment(1);
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($title)){ echo $title;}?></title>
	<meta name="description" content="<?php if(isset($description)){ echo $description;}?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
	<link rel="icon" type="image/png" href="<?php echo $zone_url;?>favicon.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $zone_url;?>apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $zone_url;?>favicon-57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $zone_url;?>favicon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $zone_url;?>favicon-114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $zone_url;?>favicon-120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $zone_url;?>favicon-144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $zone_url;?>favicon-152.png">
	
	<link rel="stylesheet" media="screen" href="<?php echo $zone_url;?>css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="<?php echo $zone_url;?>css/main.css">
	
	<script src="<?php echo $zone_url;?>js/vendor/modernizr.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="<?php echo $zone_url;?>js/vendor/html5shiv.min.js"></script>
		<script src="<?php echo $zone_url;?>js/vendor/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
	
	<!--[if lte IE 9]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
  	
	<header>

		<div class="navbar navbar-default navbar-static-top" role="navigation">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $base_url;?>">w3Capsule</a>

				</div> <!-- end.navbar-header -->

				<div class="collapse navbar-collapse">

					<ul class="nav navbar-nav">
						<li <?php echo $tab == '' ? 'class="active"' : '';?>><a href="<?php echo $base_url;?>">Home</a></li>
						<li <?php echo $tab == 'test-page' ? 'class="active"' : '';?>><a href="<?php echo $base_url;?>test-page">Link</a></li>
						<li><a href="http://w3capsule.org" target="_blank">Official Website</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">w3Capsule <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="https://github.com/Olionsoft/w3capsule" target="_blank">w3C Pure</a></li>
								<li><a href="https://github.com/Olionsoft/w3capsule-laravel" target="_blank">w3C for Laravel</a></li>
								<li><a href="https://github.com/Olionsoft/w3capsule-codeigniter" target="_blank">w3C for CodeIgniter</a></li>
							</ul>
						</li>
					</ul>

				</div> <!-- end.navbar-collapse -->

			</div> <!-- end.container -->

		</div> <!-- end.navbar -->

	</header>
