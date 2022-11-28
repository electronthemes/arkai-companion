<?php

/**
 * popular posts widget
 */
class arkai_popular_posts extends WP_Widget
{
	
	public function __construct()
	{
		parent::__construct('popular_posts', __('AK Popular Posts', 'arkai'), array(
			'description' => ' Your site’s most popular Posts. '
		) );
	}

	public function widget($args, $instance){

		$title = !empty( $instance['title'] ) ? $instance['title'] : esc_html__('Popular Posts', 'arkai') ;
		$post_num = !empty( $instance['number'] ) ? $instance['number'] : esc_html__('3', 'arkai') ;
		$date_visibility = !empty( $instance['date_visibility'] ) ? $instance['date_visibility'] : '' ;

		?>
			<!-- widget content -->
			<?php echo wp_kses_post($args['before_widget']); ?>
			<?php echo wp_kses_post($args['before_title']).wp_kses_post($title).wp_kses_post($args['after_title']); ?>
			<?php 
				$popular_posts = new WP_Query( array(
					'post_type'         => 'post',
					'posts_per_page'    => $post_num,
					'meta_key' 			=> 'arkai_post_views',
					'orderby' 			=> 'meta_value_num',
					'order' 			=> 'DESC',
				) );
			?>
			<?php if( $popular_posts -> have_posts() ) : ?>
			<div class="erecent-post">
				<?php while( $popular_posts -> have_posts() ) : $popular_posts -> the_post(); ?>
				<div class="erecent-post-item <?php if(has_post_thumbnail()){ echo 'has_recent_thumb'; } ?>">
					<div class="erecent-img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('extra-small'); ?>
						</a>
					</div>
					<div class="erecent-text">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
						<?php if($date_visibility) : ?>
							<h6 class="erecent-date"><i class="fa fa-calendar mr-2"></i><?php echo esc_html__(get_the_date('d M Y'), 'arkai'); ?></h6>
							<?php

							?>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
			<?php endif; ?>
			<?php echo wp_kses_post($args['after_widget']); ?>
			<!-- widget content -->
		<?php

	}

	public function form($instance){

		$title = !empty( $instance['title'] ) ? $instance['title'] : esc_html__('Popular Posts', 'arkai') ;
		$post_num = !empty( $instance['number'] ) ? $instance['number'] : esc_html__('3', 'arkai') ;
		$date_visibility = !empty( $instance['date_visibility'] ) ? $instance['date_visibility'] : '' ;

		?>

			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:', 'arkai'); ?></label>
				<input id="<?php echo wp_kses_post($this->get_field_id('title')); ?>" name="<?php echo wp_kses_post($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>" type="text" class="widefat title">
			</p>
			<p>
				<label for="<?php echo wp_kses_post($this->get_field_id('number')); ?>">
					<?php echo esc_html__('Number of posts to show:', 'arkai'); ?>
				</label>
				<input class="tiny-text" id="<?php echo wp_kses_post($this->get_field_id('number')); ?>" name="<?php echo wp_kses_post($this->get_field_name('number')); ?>" type="number" value="<?php echo esc_attr($post_num); ?>">
			</p>
			<p>
				<input class="checkbox" type="checkbox" <?php checked( $date_visibility, 1 ); ?> id="<?php echo wp_kses_post($this->get_field_id('date_visibility')); ?>" name="<?php echo wp_kses_post($this->get_field_name('date_visibility')); ?>" value="1">
				<label for="<?php echo wp_kses_post($this->get_field_id('date_visibility')); ?>">
					<?php echo esc_html__('Display post date?', 'arkai'); ?>
				</label>
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
		$instance['number'] = ( ! empty( $new_instance['number'] ) ) ? $new_instance['number'] : '';
		$instance['date_visibility'] = ( ! empty( $new_instance['date_visibility'] ) ) ? $new_instance['date_visibility'] : '';

		return $instance;
	}

}

function arkai_popular_posts_fn(){
	register_widget('arkai_popular_posts');
}
add_action('widgets_init', 'arkai_popular_posts_fn');



/*-----------------------------------------------------
* 				popular post
*------------------------------------------------------ */
function arkai_set_post_views($postID) {
    $count_key = 'arkai_post_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function wpmm_track_postgrid_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    arkai_set_post_views($post_id);
}
add_action( 'wp_head', 'wpmm_track_postgrid_views');