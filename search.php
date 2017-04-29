<?php get_header(); ?>

<section>
	<?php
	if ( have_posts() ) : ?>

		<header>
			<h1><?php printf( esc_html__( 'Search Results for: %s', 'hyphen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'includes/content', 'search' );
		endwhile;

		the_posts_navigation();

	else : get_template_part( 'includes/content', 'none' );

	endif; ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
