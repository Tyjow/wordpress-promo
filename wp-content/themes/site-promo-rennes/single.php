<?php get_header(); ?>

<div class="fond-single">
   <section class="single-article">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                            
            <!-- bloc de l'article -->
            <div><?php the_post_thumbnail(array(678,0));?></div>
            <div class="content-single">
               <h2 class="article-title"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

                <a class="button-news" href="http://localhost/wordpress-promo/">Retour à l'accueil</a>
            </div>
                
            
            
            <div class="pagination">  
            <?php  // Previous/next post navigation.
			 the_post_navigation( array(
            'next_text' => '<button class="btn-pagination-R">' . '<span aria-hidden="true">' . '</span> ' .
            '<span>' . '</span> ' .
            '<span>%title</span>' . '<i class="fa fa-hand-o-right" aria-hidden="true"></i>
' . '</button>',
            'prev_text' => '<button class="btn-pagination-L">' . '<i class="fa fa-hand-o-left" aria-hidden="true"></i>

' . '<span>' . '</span> ' .
            '<span>%title</span>' . '<span aria-hidden="true">' . '</span> ' . '</button>',
            )); ?>               
            </div>                       
            <script>$('.screen-reader-text').css('display', 'none');</script>
    </section><!--__( ' &raquo;', 'sitepromo1' )-->
</div>    
    <!-- s'il n'y a pas d'article -->
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>            
                    
<?php get_footer(); ?>

