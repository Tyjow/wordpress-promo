<?php 
    //ça en ligne 1 sinon ça plante.
?>
<div class="sidebar flex-sidebar col-md-4">
    <h2>Newsletter inscription</h2>
    <div class="newsletter flex-sidebar">
        <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
        <!--START Scripts : this is the script part you can add to the header of your theme-->
        <script type="text/javascript" src="http://localhost/wordpress-promo/wp-includes/js/jquery/jquery.js?ver=2.7.5"></script>
        <script type="text/javascript" src="http://localhost/wordpress-promo/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-fr.js?ver=2.7.5"></script>
        <script type="text/javascript" src="http://localhost/wordpress-promo/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.5"></script>
        <script type="text/javascript" src="http://localhost/wordpress-promo/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.5"></script>
        <script type="text/javascript">
                        /* <![CDATA[ */
                        var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://localhost/wordpress-promo/wp-admin/admin-ajax.php","loadingTrans":"Chargement..."};
                        /* ]]> */
                        </script><script type="text/javascript" src="http://localhost/wordpress-promo/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.5"></script>
        <!--END Scripts-->
        <div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html57f4c1ac08aac-1" class="wysija-msg ajax"></div><form id="form-wysija-html57f4c1ac08aac-1" method="post" action="#wysija" class="widget_wysija html_wysija">
        <p class="wysija-paragraph">
            <label>E-mail <span class="wysija-required">:</span></label>
                <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="E-mail"  value="" /> </br>
            <label>Valider <span class="abs-req"</span>:</label>
                <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />

        </p>
        <input class="wysija-submit wysija-submit-field" type="submit" value="Je m'abonne !" />
            <input type="hidden" name="form_id" value="1" />
            <input type="hidden" name="action" value="save" />
            <input type="hidden" name="controller" value="subscribers" />
            <input type="hidden" value="1" name="wysija-page" />
                <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
         </form></div>
    </div>
    <h2>Actualité</h2>
   
       <?php query_posts('category_name'); ?>
        <?php if(have_posts()) : ?>
        <?php $counter =0; ?>
        <?php while(have_posts() && $counter<1) : the_post();?>
        <?php $counter++ ?>
        <!-- affichage des articles -->
        <div class= "post" id="post-<?php the_ID(); ?>"> 
            
            <div class="title-news">
                <?php the_post_thumbnail(array(350,350));?>
                <h2><?php the_title(); ?></h2>
                
                <?php the_content(__('<i class="fa fa-2x fa-plus" aria-hidden="true"></i>')); ?>
            
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-2x fa-plus" aria-hidden="true"></i></a>
            </div>
            
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    
</div>
