<?php /* Template Name: Services Posts */ ?>

<?php get_header(); ?>
 <!-- hero image with overlayed tab menu -->
<div class="grid-container fluid vets-about-hero vets-half-hero">
    <div class="grid-container vets-hero-content">
            <?php get_template_part('library/about-tabs'); ?>
    </div>
</div>

<div class="vets-content about">

    <div id="vetsServices" class="grid-container vets-services">
        <div class="grid-x">
            <div class="cell medium-4">
                <h3 class="services-heading">Services</h3>
                <hr>
                <?php get_template_part( 'library/menu-services' ); ?>
            </div>
            <div class="cell medium-8 entry-content-container">
                <?php

                if(have_posts()):
                    while(have_posts()): the_post();
                    ?>
                    <?php the_title('<h2 class="services-heading vets-heading-size-large">', '</h2>'); ?>
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
                <a href="http://localhost:3000/vets/contact-us" class="contact-button">
                    <button class="vets-button">
                        <svg>
                            <rect />
                        </svg>
                        <span>Get in Touch</span>
                    </button>
                </a>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>