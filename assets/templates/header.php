<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';

use Melbahja\Seo\MetaTags;
if(isset($t_product_name)){
$metatags = new MetaTags();
$metatags
        ->title($title)
        ->description($description)
        ->meta('author', 'Soulmate Healer')
        ->image('https://soulmatehealer.com/assets/img/products/'.$t_product_form_name.'.jpg')
        ->mobile('https://melissa-psychic.com/assets/img/products/'.$t_product_form_name.'.jpg');


}else{
$metatags = new MetaTags();
$metatags
          ->title($title)
          ->description($description)
          ->meta('author', 'Soulmate Healer')
          ->image('https://melissa-psychic.com/assets/img/good-logo.jpg')
          ->mobile('https://melissa-psychic.com/assets/img/good-logo.jpg');
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  

    <!-- Website Title -->
    
    <?php echo $metatags; ?>
    <!-- Styles -->
    <?php echo $productMETA; ?>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/fontawesome-all.css" rel="stylesheet">
    <link href="/css/swiper.css" rel="stylesheet">
	<link href="/css/magnific-popup.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/review.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  
	
	<!-- Favicon  -->
    <link rel="icon" href="/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">


            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img src="/images/logo.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
					
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/soulmate-drawing"><span class="item-text">Soulmate Drawing & Reading</span></a>
                            <a class="dropdown-item" href="/twin-flame"><span class="item-text">Twin Flame Drawing & Reading</span></a>
                            <a class="dropdown-item" href="/future-spouse"><span class="item-text">Future Spouse Drawing & Reading</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="/future-baby"><span class="item-text">Future Baby</span></a>
                            <a class="dropdown-item" href="/purification"><span class="item-text">Psychic Purification</span></a>
                            <a class="dropdown-item" href="/readings"><span class="item-text">Psychic Reading</span></a>
                            <!--<a class="dropdown-item" href="upsell.html"><span class="item-text">UPSELL 01</span></a>-->

                        </div>
                    </li>	
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">CONTACT</a>
                    </li>
					
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">DASHBOARD</a>
                    </li>

                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
