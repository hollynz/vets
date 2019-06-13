<?php 
/* Meta box setup function. */
function vets_post_meta_boxes_setup() {
    /* Add meta boxes on the 'add_meta_boxes' hook. */
    add_action( 'add_meta_boxes', 'vets_add_post_meta_boxes' );
  
    /* Save post meta on the 'save_post' hook. */
    add_action( 'save_post', 'vets_save_post_class_meta', 10, 2 );
  }
  /* Create one or more meta boxes to be displayed on the post editor screen. */
function vets_add_post_meta_boxes() {
    add_meta_box(
      'vets-post-class',      // Unique ID
      esc_html__( 'Post Class', 'example' ),    // Title
      'vets_post_class_meta_box',   // Callback function
      'post',         // Post type in which meta box shows up
      'side',         // Where meta box shows up on post screen
      'default'         // Priority
    );
  }
  /* Display the post meta box. */
function vets_post_class_meta_box( $post ) { ?>

    <?php wp_nonce_field( basename( __FILE__ ), 'vets_post_class_nonce' ); ?>
  
    <p>
      <label for="vets-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
      <br />
      <input class="widefat" type="text" name="vets-post-class" id="vets-post-class" value="<?php echo esc_attr( get_post_meta( $post->ID, 'vets_post_class', true ) ); ?>" size="30" />
    </p>
  <?php }
  /* Save the meta box's post metadata. */
function vets_save_post_class_meta( $post_id, $post ) {
    /* Verify the nonce before proceeding. */
    if ( !isset( $_POST['vets_post_class_nonce'] ) || !wp_verify_nonce( $_POST['vets_post_class_nonce'], basename( __FILE__ ) ) )
      return $post_id;
  
    /* Get the post type object. */
    $post_type = get_post_type_object( $post->post_type );
  
    /* Check if the current user has permission to edit the post. */
    if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
      return $post_id;
  
    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value = ( isset( $_POST['vets-post-class'] ) ? sanitize_html_class( $_POST['vets-post-class'] ) : ’ );
  
    /* Get the meta key. */
    $meta_key = 'vets_post_class';
  
    /* Get the meta value of the custom field key. */
    $meta_value = get_post_meta( $post_id, $meta_key, true );
  
    /* If a new meta value was added and there was no previous value, add it. */
    if ( $new_meta_value && ’ == $meta_value )
      add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  
    /* If the new meta value does not match the old value, update it. */
    elseif ( $new_meta_value && $new_meta_value != $meta_value )
      update_post_meta( $post_id, $meta_key, $new_meta_value );
  
    /* If there is no new meta value but an old value exists, delete it. */
    elseif ( ’ == $new_meta_value && $meta_value )
      delete_post_meta( $post_id, $meta_key, $meta_value );
  }
  /* Filter the post class hook with our custom post class function. */
add_filter( 'post_class', 'vets_post_class' );
function vets_post_class( $classes ) {
  /* Get the current post ID. */
  $post_id = get_the_ID();
  /* If we have a post ID, proceed. */
  if ( !empty( $post_id ) ) {
    /* Get the custom post class. */
    $post_class = get_post_meta( $post_id, 'vets_post_class', true );
    /* If a post class was input, sanitize it and add it to the post class array. */
    if ( !empty( $post_class ) )
      $classes[] = sanitize_html_class( $post_class );
  }
  return $classes;
}
/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'vets_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'vets_post_meta_boxes_setup' );
/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function vets_remove_css_section( $wp_customize ) {
  $wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'vets_remove_css_section', 15 );