<?php get_header(); ?>
   
    <div class="page container-fluid">
       
        <div id="header" class="row" style='background-image:url(<?php header_image(); ?>)'>
            <div class="block-opaque">
                <h1><?php bloginfo('name'); ?></h1>
                <button class="content-button center-block"><a href="#content">Partez à la découverte de notre formation</a></button>
            </div>
        </div> 
        
        <script>
            $('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");

	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
});
        </script>  
        
        <div id="content" class="row">

            <div class="col-md-8">
                <!-- contenue du site ici -->
                <article id="a_propos">
                    <div>
                        <h2>A PROPOS</h2>
                        <div id="logo_a_propos"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aperiam maiores officia, dolor molestiae veniam aliquam facilis, exercitationem ratione suscipit aspernatur incidunt, natus laboriosam quas, explicabo iusto corporis accusamus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aperiam maiores officia, dolor molestiae veniam aliquam facilis, exercitationem ratione suscipit aspernatur incidunt, natus laboriosam quas, explicabo iusto corporis accusamus!</p>
                </article>
                
                <article id="center">
                    <h3>TITRE H3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam eveniet dolor dolores dolore similique, non doloribus, omnis nisi sed voluptatibus, neque nam sequi adipisci! Rem, ipsa quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam eveniet dolor dolores dolore similique, non doloribus, omnis nisi sed voluptatibus, neque nam sequi adipisci! Rem, ipsa quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam eveniet dolor dolores dolore similique, non doloribus, omnis nisi sed voluptatibus, neque nam sequi adipisci! Rem, ipsa quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam eveniet dolor dolores dolore similique, non doloribus, omnis nisi sed voluptatibus, neque nam sequi adipisci! Rem, ipsa quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam eveniet dolor dolores dolore similique, non doloribus, omnis nisi sed voluptatibus, neque nam sequi adipisci! Rem, ipsa quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam eveniet dolor dolores dolore similique, non doloribus, omnis nisi sed voluptatibus, neque nam sequi adipisci! Rem, ipsa quo.</p>
                </article>
            </div>
            
            

            <!-- aside -->
            <?php get_sidebar(); ?>
            </div>
        </div>
    <?php get_footer(); ?>
</body>

</html>