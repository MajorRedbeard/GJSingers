<?php
/**
 * Template for displaying content in the Gallery Format
 *
 * @package Builder
 * @subpackage BuilderChild-Acute-Blue
 * @since 1.0.0
 */
?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('format-gallery-hentry'); ?>>
						<!-- title, meta, and date info -->
						<div class="entry-header clearfix">
							<h3 class="entry-title">
								<!-- Use this instead? <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> -->
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							
							<div class="entry-meta">
								<?php printf( __( 'By %s', 'it-l10n-Builder-Acute-Blue' ), '<span class="author">' . builder_get_author_link() . '</span>' ); ?>
								<?php printf( __( ' on %s', 'it-l10n-Builder-Acute-Blue' ), '<span class="date">' . get_the_date() . '</span>' ); ?>
								<?php edit_post_link( 'Edit', ' <span class="">&middot; ', '</span>' ); ?>
								<?php do_action( 'builder_comments_popup_link', '<span class="comments right">', '</span>', __( '%s Comments', 'it-l10n-Builder-Acute-Blue' ), __( 'No', 'it-l10n-Builder-Acute-Blue' ), __( '1', 'it-l10n-Builder-Acute-Blue' ), __( '%', 'it-l10n-Builder-Acute-Blue' ) ); ?>
							</div>
							
						</div>

						<!-- post content -->
						<div class="entry-content">
							<?php $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) ); ?>
							<?php if ( $images ) : ?>
								<?php $total_images = count( $images ); ?>
								<?php $image = array_shift( $images ); ?>
								<?php $image_img_tag = wp_get_attachment_image( $image->ID, 'large' ); ?>
								<div class="entry-image">
									<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
									<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'it-l10n-Builder-Acute-Blue' ), 'href="' . esc_url( get_permalink() ) . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'it-l10n-Builder-Acute-Blue' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"', number_format_i18n( $total_images ) ); ?></em></p>
								</div>
							<?php endif; ?>
						</div>

						<!-- categories, tags and comments -->
						<div class="entry-footer clearfix">
							<div class="entry-meta">
								<div class="categories left"><?php printf( __( 'Categories : %s', 'it-l10n-Builder-Acute-Blue' ), get_the_category_list( ', ' ) ); ?></div>
								<?php the_tags( '<div class="tags right">' . __( 'Tags : ', 'it-l10n-Builder-Acute-Blue' ), ', ', '</div>' ); ?>
							</div>
						</div>
					</div>
