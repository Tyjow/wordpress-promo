<?php get_header(); ?>
   
    <div class="page">
       
       
        <div id="header" style='background-image:url(<?php header_image(); ?>)'></div>   
       
        <div class="row">
            <div class="content col-md-8">
                <!-- contenue du site ici -->
            </div>
            <!-- aside -->
            <?php get_sidebar(); ?>
        </div>
    </div>

    <?php get_footer(); ?>

</body>

</html>