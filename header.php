<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Dawn Cold Drink – Spark Your Day. Premium cold drinks with bold flavour.">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
<div class="container nav-wrap">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>">DAWN<span>.</span></a>
<button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Toggle menu">Menu</button>
<nav class="main-nav" id="primary-menu" aria-label="Primary navigation">
<a href="<?php echo esc_url(home_url('/#flavours')); ?>">Products</a>
<a href="<?php echo esc_url(home_url('/#about')); ?>">About</a>
<a href="<?php echo esc_url(home_url('/#why')); ?>">Why Dawn</a>
<a href="<?php echo esc_url(home_url('/#gallery')); ?>">Gallery</a>
<a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a>
</nav>
</div>
</header>
