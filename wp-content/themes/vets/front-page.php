<?php get_header(); ?>
<div class="grid-container fluid vets-home-hero">
    <div class="grid-container">
        <h1 class="vets-heading-size-large vets-heading-hero">We care about your pets.</h1>
        <p class="vets-paragraph-size-large">
            We really do. We aren’t here to “roll the numbers”, so you won’t 
            find large queues in our waiting room because we don’t want to be too busy to take what we consider the appropriate care and 
            attention your pet (and you) need.
        </p>
        <hr class="vets-hr">
    </div>
</div>

<div class="vets-home-content">

<div class="vets-vl">

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
    <h2 class="vets-heading-size-small"> <?php the_title(); ?> </h2>
    <h4 class="vets-subheading"> <?php the_excerpt(); ?></h4>
    <div class="vets-team-content"> <?php the_content(); ?> </div>
    <div>
        <?php the_post_thumbnail($size = array(100,100), $attr = 'class=vets-team-img'); ?> 
    </div>
    <?php
    endwhile;

    wp_reset_postdata();
    ?>
</div>

<div class="vets-home-testimonials">
<?php 
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-testimonials') ) : 
    endif; 
?>
</div>
</div>


<?php get_footer(); ?>