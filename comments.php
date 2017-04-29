<?php if ( post_password_required() ) { return; } ?>

<div>
	<?php
	if ( have_comments() ) : ?>
		<h2>
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'hyphen' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'hyphen' ); ?></h2>
			<div><?php previous_comments_link( esc_html__( 'Older Comments', 'hyphen' ) ); ?></div>
			<div><?php next_comments_link( esc_html__( 'Newer Comments', 'hyphen' ) ); ?></div>
		</nav>
		<?php endif; ?>
		<ol>
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'hyphen' ); ?></h2>
				<div><?php previous_comments_link( esc_html__( 'Older Comments', 'hyphen' ) ); ?></div>
				<div><?php next_comments_link( esc_html__( 'Newer Comments', 'hyphen' ) ); ?></div>
			</div>
		</nav>
		<?php
		endif;
	endif;
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p><?php esc_html_e( 'Comments are closed.', 'hyphen' ); ?></p>
	<?php
	endif;
	comment_form();
	?>
</div>
