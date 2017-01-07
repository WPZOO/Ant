<div class="entry-content">
	<?php the_content( ant_theme_read_more_text() ); ?>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'ant_theme' ),
			'after'  => '</div>',
		) );
	?>
</div><!-- .entry-content -->