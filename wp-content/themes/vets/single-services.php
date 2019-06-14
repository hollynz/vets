<?php get_header(); ?>
<div class="page-content">
<div class="grid-x">
    <div class="cell medium-4">
        <?php get_template_part( 'library/menu-healthcare' ); ?>
    </div>
    <div class="cell medium-8">
        <?php

        if(have_posts()):
            while(have_posts()): the_post();
            ?>
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            
            <?php
            endwhile;
            else: 
            ?>
                <p>Sorry, no content!</p>
            <?php
            endif;
            
        ?>
    </div>
</div>
<?php
get_footer();
?>