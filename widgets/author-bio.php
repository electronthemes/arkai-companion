<?php
/**
 * author biography widget
 */
class arkai_author_bio extends WP_Widget
{
	
	public function __construct()
	{
		parent::__construct('author_bio', __('AK Author Bio', 'arkai'), array(
			'description' => 'This is an author bio/info widget'
		) );
	}

	public function widget($args, $instance){

		$title = !empty( $instance['title'] ) ? $instance['title'] : esc_html__('About Me', 'arkai') ;

		?>
			<!-- widget content -->
			<?php echo wp_kses_post($args['before_widget']); ?>
			<?php echo wp_kses_post($args['before_title']).wp_kses_post($title).wp_kses_post($args['after_title']); 
			
			
			
			
			
			$users = get_users(array(
				'orderby' => 'post_count',
				'order'   => 'DESC'
			));
			foreach($users as $user) :
				$post_count = count_user_posts( $user->ID );
				if($post_count == 1){
					$post_count = $post_count.' Post';
				}else{
					$post_count = $post_count.' Posts';
				}
				$desc = get_the_author_meta('description', $user->ID);
				if( $post_count > 0 ) :
					if(function_exists('get_field')){
						$address = get_field('ak_user_address', 'user_'.$user->ID);

						$facebook = get_field('author_facebook', 'user_'. $user->ID );
						$twitter = get_field('author_twitter', 'user_'. $user->ID );
						$linkedin = get_field('author_linkedin', 'user_'. $user->ID );
						$git = get_field('author_git', 'user_'. $user->ID );                            
					}
					$user_url = get_the_author_meta('user_url', $user->ID);
			
			
			?>
			<div class="author-bio text-center">
				<a href="<?php echo get_author_posts_url($user->ID); ?>" class="authorimg" aria-label="avatar">
					<?php echo get_avatar($user->ID, 260); ?>
				</a>
				<h4>
					<a class="author-bio-name" href="<?php echo get_author_posts_url($user->ID); ?>">
						<?php echo wp_kses_post($user->display_name); ?>
					</a>
				</h5>
				<?php if($desc) : ?>
					<p><?php echo wp_kses_post($desc); ?></p>
				<?php endif; ?>	
				<?php
                    if(function_exists('get_field') && ($facebook || $twitter || $linkedin || $git || $user_url)) : ?>
					<ul class="social-icon">
						<?php if($facebook) : ?>
						<li>
							<a href="<?php echo esc_url($facebook); ?>" target="_blank" aria-label="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</a>
						</li>
						<?php
							endif;
							if($twitter) :
						?>
						<li>
							<a href="<?php echo esc_url($twitter); ?>" target="_blank" aria-label="twitter">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<?php
							endif;
							if($linkedin) :
						?>
						<li>
							<a href="<?php echo esc_url($linkedin); ?>" target="_blank" aria-label="linkedin">
								<i class="fa-brands fa-linkedin-in"></i>
							</a>
						</li>
						<?php
							endif;
							if($git) :
						?>
						<li>
							<a href="<?php echo esc_url($git); ?>" target="_blank" aria-label="github">
								<i class="fa-brands fa-github"></i>
							</a>
						</li>
						<?php
							endif;
							if($user_url) :
						?>
						<li>
							<a href="<?php echo esc_url($user_url); ?>" target="_blank" aria-label="website">
								<i class="fa-solid fa-globe"></i>
							</a>
						</li>
						<?php endif;?>
					</ul>
				<?php endif; ?>
			</div>
			<?php endif; break; endforeach; echo wp_kses_post($args['after_widget']); ?>
			<!-- widget content -->
		<?php

	}

	public function form($instance){

		$title = !empty( $instance['title'] ) ? $instance['title'] : esc_html__('About Me', 'arkai') ; ?>

			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id('title')); ?>"><?php echo esc_html('Title:', 'arkai'); ?></label>
				<input id="<?php echo wp_kses_post($this->get_field_id('title')); ?>" name="<?php echo wp_kses_post($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>" type="text" class="widefat title">
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

		return $instance;
	}

}

function author_biography(){
	register_widget('arkai_author_bio');
}
add_action('widgets_init', 'author_biography');