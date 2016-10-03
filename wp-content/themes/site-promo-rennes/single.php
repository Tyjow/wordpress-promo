<?php get_header(); ?>

<h2 class="bandeau bandeau-mt0"><?php the_title(); ?></h2>
<div class="fond-single">
   <section class="single-article">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                            

            <!-- bloc de l'article -->
            <div><?php the_post_thumbnail(array(678,0));?></div>
            <div class="content-single">
                <p><?php the_content(); ?></p>
                <a href="http://localhost/123veto/index.php/news/"><button>RETOUR AUX NEWS</button></a>
            </div>   
                
    </section>
</div>    
    <!-- s'il n'y a pas d'article -->
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>            
</div>
                    
<?php get_footer(); ?>

    