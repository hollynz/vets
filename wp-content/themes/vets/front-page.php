<?php get_header(); ?>
<div class="grid-container fluid vets-home-hero">
    <div class="grid-container vets-hero-content">
        <h1 class="vets-heading-size-large vets-heading-hero">We care about your pets.</h1>
        <p class="vets-paragraph-size-large">
            We really do. We aren’t here to “roll the numbers”, so you won’t 
            find large queues in our waiting room because we don’t want to be too busy to take what we consider the appropriate care and 
            attention your pet (and you) need.
        </p>
        <hr class="vets-hr">
        <div class="vets-buttons">
            <a href="http://localhost:3000/vets/services/health-checks">
                <button class="vets-button inverted">
                    <svg>
                        <rect />
                    </svg>
                    <span>Our Services</span>
                </button>
            </a>
            <a href="#vetsTeam">
                <button class="vets-button">
                    <svg>
                        <rect />
                    </svg>
                    <span>Meet our Team</span>
                </button> 
            </a>
        </div>
    </div>
    <div class="vets-down-arrow-container">
        <p class="vets-down-arrow">
            <a href="#vetsHomeContent">
                <i class="fas fa-chevron-down"></i>
            </a>
        </p>
    </div>

</div>

<div id="vetsHomeContent" class="vets-home-content">

    <div class="vets-vl"></div>

    <div id="vetsTeam" class="grid-container vets-team">
        <?php
        /**
        * Setup query to show the team post type with all posts.
        * Output is title with image and exercpt.
        */
        $args = array(  
            'post_type' => 'team-members',
            'post_status' => 'publish'
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="vets-team-member">
            <div class="vets-team-heading">
                <h2 class="vets-heading-size-small"> <?php the_title(); ?> </h2>
                <h4 class="vets-subheading"> <?php the_excerpt(); ?></h4>
            </div>
            
            <div class="vets-team-content grid-x grid-margin-x">
                <div class="vets-team-image cell medium-4">
                    <?php the_post_thumbnail(); ?> 
                </div>
                <div class="vets-team-description cell medium-8"> <?php the_content(); ?> </div>
            </div>
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
<div class="grid-container vets-services">
    <h2 class="vets-heading-size-small"><a href="http://localhost:3000/vets/appointments">What To Expect</a></h2>
        <div class="grid-x grid-margin-x">
            <div>
            <a href="http://localhost:3000/vets/services/health-checks">
                    <div class="service our-services cell medium-4">
                        <h2 class="vets-heading-size-small">Healthcare Services</h2>
                    </div>
                </a>
            </div>
                <div>
                <a href="http://localhost:3000/vets/appointments">
                    <div class="service appointments cell medium-4">
                        <h2 class="vets-heading-size-small">Appointments</h2>
                    </div>
                </a>
                </div>
                <div>
                <a href="http://localhost:3000/vets/pet-care/glossary">
                    <div class="service pet-care cell medium-4">
                        <h2 class="vets-heading-size-small">Pet Care Advice</h2>
                    </div>
                </a>
                </div>
        </div>
    </div>


<?php get_footer(); ?>