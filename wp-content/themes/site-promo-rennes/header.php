<?php //site-promo ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

    <head profile="http://gmpg.org/xfn/11">
        <title>
            <?php bloginfo('name') ?>
                <?php if ( is_404() ) : ?> 
                    <?php _e('Not Found') ?>
                        <?php elseif ( is_home() ) : ?>
                            <?php bloginfo('description') ?>
                                <?php else : ?>
                                    <?php wp_title() ?>
                                        <?php endif ?>
        </title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
        
        <?php wp_get_archives('type=monthly&format=link'); ?>        
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    </head>

    <body>
       
        <div id="menu-deroulant">
            <?php wp_nav_menu(array('theme_location' => 'Top')); ?>
        </div>
    
       