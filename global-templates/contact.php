<?php    

//contact section 

?>
<section id= "front-page-contact">
    <div class="container">
        <h1><?php the_field('contact_title');?></h1>
        <div id="contact-form-wrapper">
            <?php the_field('contact_form');?>
        </div>
    </div>
</section>