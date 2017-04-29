<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php hyphen_posted_on(); ?>
		<?php endif; ?>
	</header>

	<section>
		<?php the_excerpt(); ?>
	</section>

	<footer>
		<?php hyphen_entry_footer(); ?>
	</footer>
</article>
