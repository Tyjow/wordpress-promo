<?php 
    /*
    Template Name: contact
    */
?>

<?php get_header(); ?>
<div class="flexbox">
    <div class="formulaire_de_contact"></div>

    <div class="bloc-map">
        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
    
        <p id="address">
            Code Académie<br>
            23 Rue dAiguillon,<br>
            35200 Rennes, France
        </p>
    </div>
</div>
<?php 
    the_post(); the_content();
?>
<?php get_footer(); ?>