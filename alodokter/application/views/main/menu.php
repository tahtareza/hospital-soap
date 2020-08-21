<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Health</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="<?php echo base_url('C_dashboard'); ?>">Home</a></li>
				<li class="menu_item"><a href="<?php echo base_url('C_about'); ?>">About us</a></li>
				<li class="menu_item"><a href="<?php echo base_url('C_services'); ?>">Services</a></li>
				<li class="menu_item"><a href="<?php echo base_url('C_news'); ?>">News</a></li>
				<li class="menu_item"><a href="<?php echo base_url('C_contact'); ?>">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>