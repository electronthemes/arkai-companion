<?php

/**
 * popular posts widget
 */
class arkai_social_profiles extends WP_Widget
{
	
	public function __construct()
	{
		parent::__construct('social_profiles', __('AK Social Profiles', 'arkai'), array(
			'description' => ' Social Profile Icons. '
		) );
	}

	public function widget($args, $instance){

		$title = !empty( $instance['title'] ) ? $instance['title'] : esc_html__('Social Profile', 'arkai') ;
		$facebook_url = !empty( $instance['facebook_url'] ) ? $instance['facebook_url'] : '';
		$twitter_url = !empty( $instance['twitter_url'] ) ? $instance['twitter_url'] : '';  
		$linkedin_url = !empty( $instance['linkedin_url'] ) ? $instance['linkedin_url'] : '';  
		$pinterest_url = !empty( $instance['pinterest_url'] ) ? $instance['pinterest_url'] : '';  
		$google_url = !empty( $instance['google_url'] ) ? $instance['google_url'] : '';  
		$github_url = !empty( $instance['github_url'] ) ? $instance['github_url'] : '';  
		$youtube_url = !empty( $instance['youtube_url'] ) ? $instance['youtube_url'] : '';  
		$instagram_url = !empty( $instance['instagram_url'] ) ? $instance['instagram_url'] : '';  
		$feed_url = !empty( $instance['feed_url'] ) ? $instance['feed_url'] : '';  
		$dribbble_url = !empty( $instance['dribbble_url'] ) ? $instance['dribbble_url'] : '';  
		$skype_url = !empty( $instance['skype_url'] ) ? $instance['skype_url'] : '';  
		$whatsapp_url = !empty( $instance['whatsapp_url'] ) ? $instance['whatsapp_url'] : ''; 

		?>
			<!-- widget content -->
			<?php echo wp_kses_post($args['before_widget']); ?>
			<?php echo wp_kses_post($args['before_title']).$title.wp_kses_post($args['after_title']); ?>

			<?php
				if( $facebook_url || $twitter_url || $linkedin_url || $pinterest_url || $google_url || $github_url || $youtube_url || $instagram_url || $feed_url || $dribbble_url || $skype_url || $whatsapp_url ) :
			?>
				<ul class="social-icon">
					<?php if( $facebook_url ) : ?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $facebook_url ); ?>" aria-label="Facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</a>
						</li>
	                <?php
	                	endif;
	                	if( $twitter_url ) :
	                ?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $twitter_url ); ?>" aria-label="Twitter">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $linkedin_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $linkedin_url ); ?>" aria-label="Linkedin">
								<i class="fa-brands fa-linkedin-in"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $pinterest_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $pinterest_url ); ?>" aria-label="Pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $google_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $google_url ); ?>" aria-label="Google Plus">
								<i class="fa-brands fa-google-plus-g"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $github_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $github_url ); ?>" aria-label="Github">
								<i class="fa-brands fa-github"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $youtube_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $youtube_url ); ?>" aria-label="Youtube">
								<i class="fa-brands fa-youtube"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $instagram_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $instagram_url ); ?>" aria-label="Instragram">
								<i class="fa-brands fa-instagram"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $feed_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $feed_url ); ?>" aria-label="Feed">
								<i class="fa fa-feed"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $dribbble_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $dribbble_url ); ?>" aria-label="Dribbble">
								<i class="fa-brands fa-dribbble"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $skype_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $skype_url ); ?>" aria-label="Skype">
								<i class="fa-brands fa-skype"></i>
							</a>
						</li>
                	<?php
                		endif;
                		if( $whatsapp_url ) :
                	?>
	                	<li>
							<a target="_blank" href="<?php echo esc_url( $whatsapp_url ); ?>" aria-label="WhatsApp">
								<i class="fa-brands fa-whatsapp"></i>
							</a>
						</li>
                	<?php endif; ?>
	            </ul>
	        <?php endif; ?>
			<?php echo wp_kses_post($args['after_widget']); ?>
			<!-- widget content -->
		<?php

	}

	public function form($instance){

		$title = !empty( $instance['title'] ) ? $instance['title'] : esc_html__('Social Profiles', 'arkai') ;
		$facebook_url = !empty( $instance['facebook_url'] ) ? $instance['facebook_url'] : '';  
		$twitter_url = !empty( $instance['twitter_url'] ) ? $instance['twitter_url'] : '';  
		$linkedin_url = !empty( $instance['linkedin_url'] ) ? $instance['linkedin_url'] : '';  
		$pinterest_url = !empty( $instance['pinterest_url'] ) ? $instance['pinterest_url'] : '';  
		$google_url = !empty( $instance['google_url'] ) ? $instance['google_url'] : '';  
		$github_url = !empty( $instance['github_url'] ) ? $instance['github_url'] : '';  
		$youtube_url = !empty( $instance['youtube_url'] ) ? $instance['youtube_url'] : '';  
		$instagram_url = !empty( $instance['instagram_url'] ) ? $instance['instagram_url'] : '';  
		$feed_url = !empty( $instance['feed_url'] ) ? $instance['feed_url'] : '';  
		$dribbble_url = !empty( $instance['dribbble_url'] ) ? $instance['dribbble_url'] : '';  
		$skype_url = !empty( $instance['skype_url'] ) ? $instance['skype_url'] : '';  
		$whatsapp_url = !empty( $instance['whatsapp_url'] ) ? $instance['whatsapp_url'] : '';  

		?>

			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:', 'arkai'); ?></label>
				<input id="<?php echo wp_kses_post($this->get_field_id('title')); ?>" name="<?php echo wp_kses_post($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>" type="text" class="widefat title">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'facebook_url' )); ?>">
					<?php echo 'Facebook URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'facebook_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'facebook_url' )); ?>" value="<?php echo esc_attr( $facebook_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'twitter_url' )); ?>">
					<?php echo 'Twitter URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'twitter_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'twitter_url' )); ?>" value="<?php echo esc_attr( $twitter_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'linkedin_url' )); ?>">
					<?php echo 'LinkedIn URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'linkedin_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'linkedin_url' )); ?>" value="<?php echo esc_attr( $linkedin_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'pinterest_url' )); ?>">
					<?php echo 'Pinterest URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'pinterest_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'pinterest_url' )); ?>" value="<?php echo esc_attr( $pinterest_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'google_url' )); ?>">
					<?php echo 'Google+ URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'google_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'google_url' )); ?>" value="<?php echo esc_attr( $google_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'github_url' )); ?>">
					<?php echo 'Github URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'github_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'github_url' )); ?>" value="<?php echo esc_attr( $github_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'youtube_url' )); ?>">
					<?php echo 'YouTube URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'youtube_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'youtube_url' )); ?>" value="<?php echo esc_attr( $youtube_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'instagram_url' )); ?>">
					<?php echo 'Instagram URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'instagram_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'instagram_url' )); ?>" value="<?php echo esc_attr( $instagram_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'feed_url' )); ?>">
					<?php echo 'Feed URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'feed_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'feed_url' )); ?>" value="<?php echo esc_attr( $feed_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'dribbble_url' )); ?>">
					<?php echo 'Dribble URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'dribbble_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'dribbble_url' )); ?>" value="<?php echo esc_attr( $dribbble_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'skype_url' )); ?>">
					<?php echo 'Skype URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'skype_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'skype_url' )); ?>" value="<?php echo esc_attr( $skype_url ); ?>">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id( 'whatsapp_url' )); ?>">
					<?php echo 'WhatsApp URL:'; ?>
				</label>
				<input class="widefat title" type="url" id="<?php echo wp_kses_post($this->get_field_id( 'whatsapp_url' )); ?>" name="<?php echo wp_kses_post($this->get_field_name( 'whatsapp_url' )); ?>" value="<?php echo esc_attr( $whatsapp_url ); ?>">
			</p>

	<?php }

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['facebook_url'] = ( ! empty( $new_instance['facebook_url'] ) ) ? sanitize_text_field( $new_instance['facebook_url'] ) : '';
		$instance['twitter_url'] = ( ! empty( $new_instance['twitter_url'] ) ) ? sanitize_text_field( $new_instance['twitter_url'] ) : '';
		$instance['linkedin_url'] = ( ! empty( $new_instance['linkedin_url'] ) ) ? sanitize_text_field( $new_instance['linkedin_url'] ) : '';
		$instance['pinterest_url'] = ( ! empty( $new_instance['pinterest_url'] ) ) ? sanitize_text_field( $new_instance['pinterest_url'] ) : '';
		$instance['google_url'] = ( ! empty( $new_instance['google_url'] ) ) ? sanitize_text_field( $new_instance['google_url'] ) : '';
		$instance['github_url'] = ( ! empty( $new_instance['github_url'] ) ) ? sanitize_text_field( $new_instance['github_url'] ) : '';
		$instance['youtube_url'] = ( ! empty( $new_instance['youtube_url'] ) ) ? sanitize_text_field( $new_instance['youtube_url'] ) : '';
		$instance['instagram_url'] = ( ! empty( $new_instance['instagram_url'] ) ) ? sanitize_text_field( $new_instance['instagram_url'] ) : '';
		$instance['feed_url'] = ( ! empty( $new_instance['feed_url'] ) ) ? sanitize_text_field( $new_instance['feed_url'] ) : '';
		$instance['dribbble_url'] = ( ! empty( $new_instance['dribbble_url'] ) ) ? sanitize_text_field( $new_instance['dribbble_url'] ) : '';
		$instance['skype_url'] = ( ! empty( $new_instance['skype_url'] ) ) ? sanitize_text_field( $new_instance['skype_url'] ) : '';
		$instance['whatsapp_url'] = ( ! empty( $new_instance['whatsapp_url'] ) ) ? sanitize_text_field( $new_instance['whatsapp_url'] ) : '';
		
		return $instance;
	}

}

function arkai_social_profiles_fn(){
	register_widget('arkai_social_profiles');
}
add_action('widgets_init', 'arkai_social_profiles_fn');
