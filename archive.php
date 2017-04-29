<?php get_header(); ?>
		<main role="main">
		<?php
		if ( have_posts() ) : ?>
			<header>
				<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<div>', '</div>' );
				?>
			</header>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'includes/content', get_post_format() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'includes/content', 'none' );
		endif; ?>
		</main><!-- #main -->
<?php
get_sidebar();
get_footer();
