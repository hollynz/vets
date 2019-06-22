<?php get_header(); ?>
<div class="grid-container fluid vets-contact-hero vets-half-hero">
    <div class="grid-container vets-hero-content">
        <h1 class="vets-heading-size-large vets-heading-hero">Get in Touch!</h1>
        <p class="vets-paragraph-size-large">
            
        </p>
        <hr class="vets-hr">
        
    </div>

</div>

<div id="vetsContactContent" class="vets-content contact">
    <div class="grid-container contact-form-container">
        <?php if( function_exists("wd_form_maker") ) { wd_form_maker(1, "embedded"); } ?>
    </div>
</div>




<?php get_footer(); ?>