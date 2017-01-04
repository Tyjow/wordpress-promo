<?php //123veto ?>
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
        <!-- leave this for stats -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery_v3.1.0.js"></script>
        
        <?php wp_get_archives('type=monthly&format=link'); ?>        

        <!-- typos -->
        <link rel="stylesheet" href="wp-content/themes/site-promo-rennes/css/font-awesome.css" />   
        <?php wp_head(); ?>
    </head>

    <body>
       
        <div id="menu-deroulant">
            <?php wp_nav_menu(array('theme_location' => 'Top')); ?>
        </div>
    
       