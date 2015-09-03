<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $metaDescription ?>">
	<meta name="author" content="Box-Studio">
   <title><?php echo $pageTitle?></title>
	<link rel="stylesheet" href="styles/reset.css">
	<link rel="stylesheet" href="styles/typography.css">
	<link rel="stylesheet" href="styles/mobile.css">
	<link rel="stylesheet" href="styles/tablet.css">
	<link rel="stylesheet" href="styles/desktop.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:600,700,400' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<script>
	document.getElementsByTagName('html')[0].classList.remove('no-js');
	document.getElementsByTagName('html')[0].classList.add('js');
	</script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class=<?php echo '"' . $bodyClass . '"' ?>>
  <div class="content-wrapper">
  	<div class="header-nav-container clearfix">
    <header>
      <div class="inner-header clearfix">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="The BCIT Office Administrator with Technology is a hands-on program designed to provide you with the computer and business skills required by administrative positions today"></a>
        </div>
			<button type="button" class=<?php echo '"' . $mobileButtonClass . ' mobile-button"'?>>Menu</button>
      </div>
    </header>