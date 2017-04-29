<?php get_header(); ?>

	<header>
		<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hyphen' ); ?></h1>
	</header><!-- .page-header -->

	<div>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'hyphen' ); ?></p>
		<?php
			get_search_form();
			the_widget( 'WP_Widget_Recent_Posts' );
			// Only show the widget if site has multiple categories.
			if ( hyphen_categorized_blog() ) :
		?>
		<div>
			<h2><?php esc_html_e( 'Most Used Categories', 'hyphen' ); ?></h2>
			<ul>
			<?php
				wp_list_categories( array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				) );
			?>
			</ul>
	</div>
		<?php
			endif;
			/* translators: %1$s: smiley */
			$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'hyphen' ), convert_smilies( ':)' ) ) . '</p>';
			the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
			the_widget( 'WP_Widget_Tag_Cloud' );
		?>
	</div>
<?php
get_footer();
