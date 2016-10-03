<?php 
    //ça en ligne 1 sinon ça plante.
?>
<div class="sidebar flex-sidebar col-md-4">
    <h2>Newsletter inscription</h2>
    <div class="newsletter flex-sidebar">
        <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
        <input type="text" name="field" size="15" placeholder="Email">
    </div>
    <h2>Actualité</h2>
            <div id="content">
               <?php query_posts('category_name'); ?>
                <?php if(have_posts()) : ?>
                <?php $counter =0; ?>
                <?php while(have_posts() && $counter<3) : the_post();?>
                <?php $counter++ ?>
                <!-- affichage des articles -->
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
                <div class= "post" id="post-<?php the_ID(); ?>"> 
                    <div class= "post_content">
                        <?php the_post_thumbnail(array(250,250));?>
                        <p class="postmetadata">
                            <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
                        </p>
                    </div> 
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <a href="#"><button class="normal-button">News Letters</button></a>
            </div> 
</div>
