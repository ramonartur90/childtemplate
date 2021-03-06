<?php
/**
 * Template part for displaying Author Bio.
 *
 * @package Blogism
 */

?>
<div class="authorbox <?php echo ( get_option( 'show_avatars' ) ) ? '' : 'no-author-avatar'; ?>">
	<?php if ( get_option( 'show_avatars' ) ) : ?>
		<div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), '60', '' ); ?>
		</div>
	<?php endif ?>
	<div class="author-info">
		<h4 class="author-header">
			<?php esc_html_e( 'Written by', 'blogism' ); ?>&nbsp;<?php the_author_posts_link(); ?>
		</h4>
		<div class="author-content"><p><?php the_author_meta( 'description' ); ?></p></div>
		<?php $user_url = get_the_author_meta( 'user_url' ); ?>
		<?php if ( ! empty( $user_url ) ) : ?>
			<div class="author-footer"><a href="<?php echo esc_url( $user_url ); ?>"><?php esc_html_e( 'Visit Website', 'blogism' ); ?></a></div>
		<?php endif; ?>
	</div> <!-- .author-info -->
</div><!-- .authorbox -->
