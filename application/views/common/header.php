<html>
<head>
	<title><?php echo $title; ?></title>
	<style>
		@font-face {
			font-family: roboto-regular;
			src: url(<?php echo base_url("assets/fonts/Roboto-Regular.ttf"); ?>);
		}
	</style>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/common/default.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/" . $page_name . ".css"); ?>" />
	<?php echo $additional_files; ?>
</head>
<body>
<div class="header">
	<div class="header-menus">
		<div class="header-menu">Home</div>
		<div class="header-menu">Products</div>
		<div class="header-menu">About</div>
	</div>
</div>
<div class="header-space"></div>