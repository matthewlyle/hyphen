<?php get_header(); ?>
	<div>
		<main class="" role="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'includes/content', get_post_format() );
			the_post_navigation();
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
		</main>
	</div>
<?php
get_sidebar();
get_footer();
