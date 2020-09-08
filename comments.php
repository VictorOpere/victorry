<?php /*
	
@package alienware
* this is the template file for our premium WordPress theme
*/
if( post_password_required() ){
	return;
}
?>

	
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
		<h6>
			<?php
				
				printf(
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'perfecttiming' ) ),
					esc_html(number_format_i18n( get_comments_number() )),
					'<span>' . esc_html(get_the_title()) . '</span>'
				);
					
			?>
		</h6>

     
		
		
		
		
			
			<?php 
				
				$args = array(
					'walker'			=> new Victorry_Walker_Comment(),
					'max_depth' 		=> '3',
					'style'				=> 'div',
					'callback'			=> '',
					'end-callback'		=> null,
					'type'				=> 'all',
					'reply_text'		=> 'Reply',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 42,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> true,
					'echo'				=> true
				);
				
				wp_list_comments( $args );
			?>
			
		


		
		
		
		<?php 
			if( !comments_open() && get_comments_number() ):
		?>
			 
			 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'victorry' ); ?></p>
             </div>
			 
		<?php
			endif;
		?>
		
	<?php	
		endif;
	?>

<div class="comment-form">
	
	<?php 
		
		$fields = array(
			
			'author' =>
				'<div class="form-group name"><input id="author" name="author" type="text" placeholder="Name *"class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required /></div>',
				
			'email' =>
				'<div class="form-group  email"><input id="email" name="email" class="form-control" type="email"  placeholder="Email *" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required/></div>',
				

				
		);
		
		$args = array(
			
			'class_submit' => 'primary-btn text-uppercase',
			'label_submit' => __( 'Post Comment', 'victorry' ),
			'comment_field' =>
				'<div class="form-group"><textarea id="comment" class="form-control mb-10" placeholder="Comment *" name="comment" rows="5" required></textarea></p>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
			
		);
		
        comment_form( $args ); 
        
        
		
	?>

</div>