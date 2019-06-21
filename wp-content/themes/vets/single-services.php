<?php /* Template Name: Services Posts */ ?>

<?php get_header(); ?>
 <!-- hero image with overlayed tab menu -->
<div class="grid-container fluid services vets-about-hero">
    <div class="grid-container vets-hero-content">
            <div class="grid-x grid-margin-x about-tabs">
                <a href="http://localhost:3000/vets/services/health-checks">
                    <div class="tab our-services cell medium-4">
                        <h2 class="vets-heading-size-small">Our Services</h2>
                    </div>
                </a>
                <a href="http://localhost:3000/vets/appointments">
                    <div class="tab appointments cell medium-4">
                        <h2 class="vets-heading-size-small">Appointments</h2>
                    </div>
                </a>
                <a href="http://localhost:3000/vets/pet-care/glossary">
                    <div class="tab pet-care cell medium-4">
                        <h2 class="vets-heading-size-small">Pet Care</h2>
                    </div>
                </a>
            </div>
    </div>
</div>

<div id="vetsAboutContent" class="about vets-content">

    <div id="vetsServices" class="grid-container vets-services">
        <div class="grid-x">
            <div class="cell medium-4">
                <h3 class="services-heading">Services</h3>
                <?php get_template_part( 'library/menu-services' ); ?>
            </div>
            <div class="cell medium-8">
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
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>