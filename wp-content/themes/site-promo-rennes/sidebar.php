<?php 
    //ça en ligne 1 sinon ça plante.
?>
<div class="sidebar flex-sidebar col-md-4">
    <h2>Newsletter inscription</h2>
    <div class="newsletter flex-sidebar">
        <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
        <div class="input-box">
            <input type="text" name="field" size="25" placeholder="Email">
            <button type="submit">Envoyez</button>
        </div>
    </div>
    <h2>Actualité</h2>
    <div id="content">
       <?php query_posts('category_name'); ?>
        <?php if(have_posts()) : ?>
        <?php $counter =0; ?>
        <?php while(have_posts() && $counter<3) : the_post();?>
        <?php $counter++ ?>
        <!-- affichage des articles -->
        <div class= "post" id="post-<?php the_ID(); ?>"> 
            <div class= "post_content flex-sidebar">
                <div class="postmetadata">
                    <?php the_post_thumbnail(array(350,350));?>
                    <div class="title-news">
                        <h2><?php the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-2x fa-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                <?php the_content(__('<i class="fa fa-3x fa-plus-circle read-more"></i>')); ?>
            </div> 
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
