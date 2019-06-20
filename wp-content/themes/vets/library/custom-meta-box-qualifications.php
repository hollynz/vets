<?php
function vets_meta_box_qualifications_setup_name() {
    add_meta_box ('vets_qualifications_box', 'Qualifications', 'vets_qualifications_cb', 'team-members', 'normal', 'high');
} // function vets_meta_box_qualifications_setup_name
add_action('add_meta_boxes', 'vets_meta_box_qualifications_setup_name');

function vets_qualifications_cb($post) {
    wp_nonce_field(basename(_FILE_), 'vets_qualifications_content_nonce');

    //retrieve the metadata values if they exist
    $value = get_post_meta($post->ID, 'vets_qualifications_content', true);
    ?>
    <p>
        List your qualifications separated by commas:
    </p>
    <textarea id="vets_qualifications_content" name="vets_qualifications_content" cols="60%" rows="1"><?php echo wp_kses_post($value); ?></textarea>
    <?php
} // function vets_qualifications_cb

function vets_qualifications_save($id, $post) {
    // check the autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $id; 

    if (
        'team-members' == $post->post_type
        && current_user_can('edit_page', $id)
        && wp_verify_nonce($_POST['vets_qualifications_content_nonce'], basename(_FILE_))
        && isset($_POST['vets_qualifications_content'])
    ) update_post_meta($id, 'vets_qualifications_content', strip_tags($_POST['vets_qualifications_content']));
} // function vets_qualifications_save
add_action('save_post', 'vets_qualifications_save', 1, 2);