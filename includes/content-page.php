<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<div>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div>' . esc_html__( 'Pages:', 'hyphen' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'hyphen' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span>',
					'</span>'
				);
			?>
		</footer>
	<?php endif; ?>
</article>
