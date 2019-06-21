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

<div id="vetsHomeContent" class="vets-content">

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
        $meta = get_post_meta( $post->ID, 'hobbies', true );
        ?>
        <div class="vets-team-member">
            <div class="vets-team-heading">
                <h2 class="vets-heading-size-small"> <?php the_title(); ?> </h2>
                <h4 class="vets-subheading">— <?php echo get_post_meta( get_the_ID(), 'vets_qualifications_content', true ); ?></h4>
            </div>
            
            <div class="vets-team-content grid-x grid-margin-x">
                <div class="vets-team-image cell medium-4">
                    <?php the_post_thumbnail(); ?> 
                </div>
                <div class="vets-team-description cell medium-8"> <?php the_content(); ?> 
                    <div class="hobbies">
                        <p>When not at work, I will be:</p>
                        <div class="hobbies-list">
                            <ul>
                                <?php if (is_array($meta) && isset($meta['hobby1']) && $meta['hobby1'] != '') { 
                                    echo '<li><i class="fas fa-paw"></i>' . $meta['hobby1'] . '</li>'; 
                                }
                                ?>
                                <?php if (is_array($meta) && isset($meta['hobby2']) && $meta['hobby2'] != '') { 
                                    echo '<li><i class="fas fa-paw"></i>' . $meta['hobby2'] . '</li>'; 
                                }
                                ?>
                                <?php if (is_array($meta) && isset($meta['hobby3']) && $meta['hobby3'] != '') { 
                                    echo '<li><i class="fas fa-paw"></i>' . $meta['hobby3'] . '</li>'; 
                                }
                                ?>
                                <?php if (is_array($meta) && isset($meta['hobby4']) && $meta['hobby4'] != '') { 
                                    echo '<li><i class="fas fa-paw"></i>' . $meta['hobby4'] . '</li>'; 
                                }
                                ?>
                                <?php if (is_array($meta) && isset($meta['hobby5']) && $meta['hobby5'] != '') { 
                                    echo '<li><i class="fas fa-paw"></i>' . $meta['hobby5'] . '</li>'; 
                                }
                                ?>
                                <?php if (is_array($meta) && isset($meta['hobby6']) && $meta['hobby6'] != '') { 
                                    echo '<li><i class="fas fa-paw"></i>' . $meta['hobby6'] . '</li>'; 
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
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