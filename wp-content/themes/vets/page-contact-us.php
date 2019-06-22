<?php get_header(); ?>
<div class="grid-container fluid vets-contact-hero vets-half-hero">
    <div class="grid-container vets-hero-content">
        <h1 class="vets-heading-size-large vets-heading-hero">Get in Touch!</h1>
    </div>
</div>

<div id="vetsContactContent" class="vets-content contact">
    <div class="grid-container blurb">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis semper facilisis. Nam placerat est ex. In tempor quam orci, ac efficitur enim fermentum nec. </p>
    </div>
    <div class="grid-container contact-form-container">
        <?php if( function_exists("wd_form_maker") ) { wd_form_maker(1, "embedded"); } ?>
    </div>
</div>




<?php get_footer(); ?>