<?php 
    //ça en ligne 1 sinon ça plante.
?>


    <div id="footer">
        <p> Copyright &#169;
            <?php print(date(Y)); ?>
                <?php bloginfo('name'); ?>
                    <br /> Site propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="#">les apprenants de la Code Académie de Rennes</a>
                    <a class="button" href="#popup1"> - Mentions légales</a>
        </p>
    </div>

    <?php wp_footer(); ?>

