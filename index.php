<nav role="navigation">
	<?php // wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
</nav>

<?php get_header(); ?>
	<main role="main">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;
			while ( have_posts() ) : the_post();
				get_template_part( 'includes/content', get_post_format() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'includes/content', 'none' );
		endif; ?>
	</main>
</div>

<?php
// get_sidebar();
get_footer();
