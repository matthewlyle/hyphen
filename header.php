<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header role="banner" class="">
	<div>
		<?php
		if ( is_front_page() && is_home() ) : ?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="t-white"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="t-white"><?php bloginfo( 'name' ); ?></a></p>
		<?php
		endif;
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php
		endif; ?>

		<nav role="navigation">
			<?php // wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</div>
</header>

