<?php get_header(); ?>
<div class="grid-container fluid vets-home-hero">
    <div class="grid-container">
        <h1>We care about your pets.</h1>
        <p>
            We really do. We aren’t here to “roll the numbers”, so you won’t 
            find large queues in our waiting room because we don’t want to be too busy to take what we consider the appropriate care and 
            attention your pet (and you) need.
        </p>
        <hr class="vets-line">
    </div>
</div>

<div class="grid-container vets-team">
    <?php
    /**
    * Setup query to show the team post type with all posts.
    * Output is title with image and exercpt.
    */
    $args = array(  
        'post_type' => 'team-members',
        'post_status' => 'publish',
        // 'posts_per_page' => 2
    );

    $loop = new WP_Query( $args );
        
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <h1 class="vets-heading"> <?php the_title(); ?> </h1>
    <h3 class="vets-subheading"> <?php the_excerpt(); ?></h3>
    <div class="vets-team-content"> <?php the_content(); ?> </div>
    <div>
        <?php the_post_thumbnail($size = array(100,100), $attr = 'class=vets-team-img'); ?> 
    </div>
    <?php
    endwhile;

    wp_reset_postdata();
    ?>
</div>

<?php 
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-testimonials') ) : 
    endif; 
?>

<?php get_footer(); ?>