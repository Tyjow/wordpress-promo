<?php get_header(); ?>

    <div id="header" style='background-image:url(<?php header_image(); ?>)'>
        <div class="header-corp">
            <!-- logo -->
            <div class="logo-img img-responsive"></div>
            <!-- infos -->
            <div class="info">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2 id="description"><?php bloginfo('description'); ?></h2>
                <h2 class="names">Dr Eric Wintz - Dr Aurélie Mayoussier</h2>
                <p class="horaires">123 Véto vous accueille du <i class="orange">lundi au vendredi</i> de <i class="orange">9h à 12h</i> et de <i class="orange">14h à 19h</i> et le <i class="orange">samedi</i> de <i class="orange">9h à 12h</i>.</p>
                <p class="horaires">Les <i class="orange">urgences</i> sont assurées <i class="orange">24h/24 7 jours sur 7</i> sur appel téléphonique au <i class="orange">02 40 01 61 69</i></p>
                <p class="horaires"><i class="orange">Adresse : </i>32 rue du Vélodrome 44160 Pontchateau</p>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- aside -->
        <?php get_sidebar(); ?>
            <div class="content">
                <!-- le bloc team pour le hover est stocké dans le pc 26 -->
                <div id="bloc-team">
                    <h2 class="bandeau bandeau-mt0" id="bandeau_presentation">L'équipe à votre service</h2>

                    <!-- DOCTEUR I -->
                    <div class="docteurs">
                        <?php query_posts('category_name=presentation'); ?>
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post();?>
                                    <div class="team-member">
                                        <h3 title="<?php the_title(); ?>"><?php the_title(); ?></h3>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article article-presentation">
                                                <div class="" id="">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>
                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>

    <?php get_footer(); ?>

</body>

</html>