<?php
/**
 * A custom WordPress comment walker class to implement the Bootstrap 4 Media object in wordpress comment list.
 *
 * @package     WP Bootstrap 4 Comment Walker
 * @version     1.0.0
 * @author      Aymene Bourafai <bourafai.a@gmail.com> <www.aymenebourafai.com>
 * @license     http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link        https://github.com/bourafai/wp-bootstrap-4-comment-walker
 * @link        https://v4-alpha.getbootstrap.com/layout/media-object/
 */

class Victorry_Walker_Comment extends Walker_Comment {
	/**
	 * Output a comment in the HTML5 format.
	 *
	 * @since 1.0.0
	 *
	 * @see wp_list_comments()
	 *
	 * @param object $comment the comments list.
	 * @param int    $depth   Depth of comments.
	 * @param array  $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( $args['style'] === 'div' ) ? 'div' : 'li';
?>		
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment-list'); ?>>
			
        <div class="" id="div-comment-<?php comment_ID(); ?>">
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
                     <div class="thumb">
							<?php if ( $args['avatar_size'] != 0  ): ?>
							    <?php echo get_avatar( $comment, $args['avatar_size'],'mm','', array('class'=>"comment_avatar rounded-circle") ); ?>
						    <?php endif; ?>
					 </div>
                        <div class="desc">
                            <?php $by_post_author = victorry_is_comment_by_post_author( $comment ); ?>

                            <h5><?php echo esc_html(get_comment_author());?>

                                <?php 

                                    if ( $by_post_author ) {
                                        echo ' <span class="badge badge-pill badge-success">' . __( ' Author', 'victorry' ) . '</span>';
                                    }
                                
                                ;?>
                        
                            </h5>
                                <p class="date"><?php comment_date();?> at <?php comment_time();?> <?php edit_comment_link(__('(Edit)'),'  ','') ?> </p>
                                    <p class="comment">
                                    <?php if ( '0' == $comment->comment_approved ) : ?>
					                    <p class="card-text comment-awaiting-moderation label label-info text-muted small"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
					                <?php endif; ?>	

                                        <?php comment_text(); ?>
                                    </p>
                        </div>
					</div>
				<div class="reply-btn">
                    <?php
                                    comment_reply_link( array_merge( $args, array(
                                        'add_below' => '',
                                        'depth'     => $depth,
                                        'max_depth' => $args['max_depth'],
                                        'before'    => '',
                                        'after'     => ''
                                    ) ) );	
                    ?>
				</div>						
			</div>
		</div>

		
<?php
	}	
}