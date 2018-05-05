<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- For SEO -->
	<meta name="keywords" content="<?php echo $seo[$page]["keywords"]; ?>" />
	<meta name="description" content="<?php echo $seo[$page]["description"]; ?>">
	<meta name="title" content=""/>
	<meta property="og:url" content="<?php echo $seo[$page]["og:url"]; ?>"/>
	<meta property="og:title" content="<?php echo $seo[$page]["og:title"]; ?>"/>
	<meta property="og:type" content="<?php echo $seo[$page]["og:type"]; ?>" />
	<meta property="og:description" content="<?php echo $seo[$page]["og:description"]; ?>"/>
	<!-- /Dinamic -->
	<meta name="copyright" content="Doctors@Knox" />
	<meta name="author" content="Doctors@Knox" />
	<meta name="robots" content="index,follow" />
	<meta http-equiv="content-language" content="en"/>
	<meta name="geo.region" content="AU-VIC" />
	<meta name="geo.placename" content="Wantirna" />
	<meta name="geo.position" content="-37.86923;145.24003" />
	<meta name="ICBM" content="-37.86923, 145.24003" />
	<meta name="revisit-after" content=" days">
	<!-- /For SEO -->
	<meta name="generator" content="http://esc.vn" />
	<title><?php echo $seo[$page]["title"]; ?></title>
	<link type="text/css" src="assets/images/fav.png" type="image/png" rel="icon">
	<!-- CSS Design -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' >
	<!-- Travel Vaccine Map -->
	<?php
		if(isVaccineMap()){ ?>
			<link rel="stylesheet" type="text/css" href="resources/library/vacc_map/assets/css/easy-autocomplete.min.css">
		    <link rel="stylesheet" type="text/css" href="resources/library/vacc_map/assets/css/style_map.css">
		    <link rel="stylesheet" type="text/css" href="resources/library/vacc_map/assets/css/flags.css">
		    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<?php } ?>
</head>
<body>
<div class='container headercon'>
	<div class='row'>
		<div class='col-md-3 logo'>
			<a href='http://doctorsatknox.com.au'><img src='assets/images/logo.png' class='img-responsive' alt='Doctors at Knox - D@K - Doctors@Knox'></a>
		</div>
		<div class='col-md-9 headercol9'>
			<a href='http://doctorsatknox.com.au'><img src='assets/images/logo.png' class='img-responsive logomain' alt='Doctors at Knox - D@K - Doctors@Knox'></a>
			<img src='assets/images/7days.jpg' class='img-responsive days' alt='Open 7 days'>
			<!-- Navbar start -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
					    <li class="active"><a href="http://doctorsatknox.com.au/">Home</a></li>
						<li><a href="index.php?page=fluvax">Flu Vaccine</a></li>
				    	<li><a href="index.php?page=doctors">Doctors</a></li>
						<li><a href="index.php?page=allied-health">Allied health</a></li>
						<li><a href="index.php?page=appointments">Appointments</a></li>
						<li><a href="index.php?page=nurse">Nurse</a></li>
						<li><a href="index.php?page=travel">Travel</a></li>
						<li><a href="index.php?page=pathology">Pathology</a></li>
						<li><a href="index.php?page=contact">Contact Us</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- Navbar end -->
		</div>
	</div>
</div>