<?php 
    //footer for the whole website
?>

    <div class="mentions_legales" id="popup1">
        <div class="mentions_legales_menu" onclick="hideMentions()">
        Mentions Légales
        </div>
        <div>
            <?php 
                $the_query = new WP_Query( array( 'pagename' => 'mentionslegales' ) );
               if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        echo  the_content();
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                }   
            ?>
         </div>   
        
    </div>

    <div class="" id="footer">
        <p> Copyright &#169;
            <?php print(date(Y)); ?>
                <?php bloginfo('name'); ?>
                    <br /> Site propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="#">les apprenants de la Code Académie de Rennes</a>
                    <a class="button mentions" onclick="displayMentions()"> - Mentions légales</a>
        </p>
    </div>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery_v3.1.0.js"></script>
     <script>
        // SCROLL FLUIDE
        $('#skr').click(function(){
           $('html, body').animate({
              scrollTop:$('#content').offset().top
           }, 'slow');
           return false;
        });

        function displayMentions(){
            $('#popup1').show();
        }
        function hideMentions(){
            $('#popup1').hide();
        }
        </script>  
    <?php wp_footer(); ?>
</body>

</html>

