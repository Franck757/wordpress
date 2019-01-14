<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <nav>
      <?php wp_nav_menu('header' );?>
    </nav>
    <p id="promo"><a href="#">OFFRE PROMO : Votre premier cours d'essai gratuit !</a></p>
    <?php if(is_front_page()): ?>
    <h1 class="text-shadow site-title nomargin">Bienvenue sur le site d'Ila Yoga</h1>
    <?php endif; ?>
  </header>
  <main class="site-content">
