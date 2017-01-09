<?php 
    //sidebar
?>
<div class="sidebar">
    
    <h2 class="actu">Actualités</h2>
   
    <?php query_posts('category_name'); 
    if(have_posts()) :
        $counter =0;
        while(have_posts() && $counter<2) : the_post();
        $counter++ ?>

            <!-- affichage des articles -->
            <div class="post" id="post-<?php the_ID(); ?>"> 
                <a class="title-news" href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2> <!-- title -->
                </a> 
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                   <?php the_post_thumbnail('medium');?> <!-- thumbnail -->
                </a> 
                <?php the_excerpt(__('<i class="fa fa-2x fa-plus" aria-hidden="true"></i>')); ?> <!-- content -->
                <a class="view_more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <i class="fa fa-2x fa-plus" aria-hidden="true"></i> <!-- plus button -->
                </a>
            </div>
    
        <?php endwhile;
    endif; ?>
</div>
