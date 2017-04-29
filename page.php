<?php get_header(); ?>
	<main role="main"">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'includes/content', 'page' );
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
	</main>
<?php
get_sidebar();
get_footer();
