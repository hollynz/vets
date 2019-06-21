<?php

function add_hobbies_meta_box() {
    	add_meta_box(
    		'hobbies_meta_box', // $id
    		'Hobbies', // $title
    		'show_hobbies_meta_box', // $callback
    		'team-members', // $screen
    		'normal', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_hobbies_meta_box' );

    function show_hobbies_meta_box() {
    	global $post;
    	$meta = get_post_meta( $post->ID, 'hobbies', true ); ?>

    	<input type="hidden" name="hobbies_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

        <p class="grid-container grid-y">
            <label for="hobbies[hobby1]">When not at work, I will be...</label>
            <br>
            <input type="text" name="hobbies[hobby1]" id="hobbies[hobby1]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hobby1'])){ echo $meta['hobby1']; }  ?>"><br>
            <input type="text" name="hobbies[hobby2]" id="hobbies[hobby2]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hobby2'])){ echo $meta['hobby2']; }  ?>"><br>
            <input type="text" name="hobbies[hobby3]" id="hobbies[hobby3]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hobby3'])){ echo $meta['hobby3']; }  ?>"><br>
            <input type="text" name="hobbies[hobby4]" id="hobbies[hobby4]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hobby4'])){ echo $meta['hobby4']; }  ?>"><br>
            <input type="text" name="hobbies[hobby5]" id="hobbies[hobby5]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hobby5'])){ echo $meta['hobby5']; }  ?>"><br>
            <input type="text" name="hobbies[hobby6]" id="hobbies[hobby6]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['hobby6'])){ echo $meta['hobby6']; }  ?>">
        </p>

        <?php 
        
    }

    function save_hobbies_meta( $post_id ) {
    	// verify nonce
    	if ( !wp_verify_nonce( $_POST['hobbies_meta_box_nonce'], basename(__FILE__) ) ) {
    		return $post_id;
    	}
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}
    	// check permissions
    	if ( 'page' === $_POST['post_type'] ) {
    		if ( !current_user_can( 'edit_page', $post_id ) ) {
    			return $post_id;
    		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
    			return $post_id;
    		}
    	}

    	$old = get_post_meta( $post_id, 'hobbies', true );
    	$new = $_POST['hobbies'];

    	if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'hobbies', $new );
    	} elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'hobbies', $old );
    	}
    }
    add_action( 'save_post', 'save_hobbies_meta' );