<?php 
    /*
    Template Name: contact
    */
?>

<?php get_header(); ?>
<div class="formulaire_de_contact">
    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
</div>
<?php 
    the_post(); the_content();
?>