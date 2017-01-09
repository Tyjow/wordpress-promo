<?php
/*
* Template Name: La promo
*/
?>
<?php get_header(); ?>

<?php
$string = file_get_contents("./wp-content/uploads/portfolios/profiles.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$front = $brut["FrontEnd"];
$back = $brut["BackEnd"];
shuffle($front);
shuffle($back);

?>

<div class="listApprenant row">
	
	<div class="textApprenant col-lg-offset-2 col-lg-8  col-md-offset-2 col-md-8  col-sm-offset-3 col-sm-6  col-xs-offset-1 col-xs-10">
	<p>Voici les apprenants de notre première promotion 2016, Classés par spécialisation.</p>
	</div>

<!-- = = = = Colone Front-end = = = = -->


	<div class="front col-lg-6 col-md-6 col-sm-6 col-xs-6">

		<h2 class="frontTitre">Front-end</h2>
		<?php
			foreach ($front as $elements) {
				echo "<div class='apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-1 col-sm-10 col-xs-12'>

					<img class='imgApprenant' src='" . get_template_directory_uri()."/".$elements['IMG'] . "' alt=''>

					<h3 class='nomApprenant'>" . $elements['NAME'] . "</h3>
					<div class='box-link'>";

				if(!is_null($elements['CV']) && $elements['CV'] !== '#'){ 
					echo "<a href='". $elements['CV'] . "' target='_blank' class='btnCv'>CV</a>";
				} 
				else{
					echo "<a class='btnCv btnCv-empty'>CV</a>";
                    //ici c'est quand y'a pas cv alors tu me grise le bouton
				}
				if(!is_null($elements['PORTFOLIO']) && $elements['PORTFOLIO'] !=='#'){ 
					echo "<a href='" . $elements['PORTFOLIO'] . "' target='_blank' class='btnFolio'>PORTFOLIO</a>";
				}
				else{
					echo "<a class='btnFolio btnFolio-empty'>PORTFOLIO</a>";
                    //pareil qu'avant avec portfolio
				}
				echo "</div>
					<div class='infoBox'>
						<h4>" . $elements['NAME'] . "</h4>
						<p>" . $elements['INFO'] . "</p>
						<div class='progress'>
							<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100' style='width:80%'>" . $elements['SKILLS'][0] . "</div>
						</div>
						<div class='progress'>
							<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:60%'>" . $elements['SKILLS'][1] . "</div>
						</div>
					</div>

				</div>";
			}
		?>
	</div>

<!-- = = = = Colonne Back-end = = = = -->

	<div class="back col-lg-6 col-md-6 col-sm-6 col-xs-6">

		<h2 class="backTitre">Back-end</h2>

			<?php
			foreach ($back as $elements) {
				echo "<div class='apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-1 col-sm-10 col-xs-12'>

					<img class='imgApprenant' src='" . get_template_directory_uri()."/".$elements['IMG'] . "' alt=''>

					<h3 class='nomApprenant'>" . $elements['NAME'] . "</h3> <div class='box-link'>";
					if(!is_null($elements['CV']) && $elements['CV'] !== '#'){ 
						echo "<a href='". $elements['CV'] . "' target='_blank' class='btnCv'>CV</a>";
					} 
					else{
						echo "<a class='btnCv btnCv-empty'>CV</a>";	
					}
					if(!is_null($elements['PORTFOLIO']) && $elements['PORTFOLIO'] !=='#'){ 
					echo "<a href='" . $elements['PORTFOLIO'] . "' target='_blank' class='btnFolio'>PORTFOLIO</a>";
					}
					else{
						echo "<a class='btnFolio btnFolio-empty'>PORTFOLIO</a>";	
					}
					echo "</div><div class='infoBox'>
						<h4>" . $elements['NAME'] . "</h4>
						<p>" . $elements['INFO'] . "</p>
						<div class='progress'>
							<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100' style='width:80%'>" . $elements['SKILLS'][0] . "</div>
						</div>
						<div class='progress'>
							<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:60%'>" . $elements['SKILLS'][1] . "</div>
						</div>
					</div>

				</div>";
			}
		?>	
	</div>
		
</div>

<?php get_footer() ?>

<!-- = = script pour le hover des apprenants = = -->

<script>
$(document).ready(function(){
    $('.imgApprenant').mouseover(function(){
    	$('.infoBox').each(function(){
			$(this).slideUp();
		});
		if($(this).next().next().next().css("display") != 'none'){
			$(this).next().next().next().slideUp();
		}
		else{
    		$(this).next().next().next().slideDown();
		}
    });
    $('.imgApprenant').mouseleave(function(){
        $('.infoBox').each(function(){
			$(this).slideUp();
		});
		if($(this).next().next().next().css("display") = 'none'){
			$(this).next().next().next().slideUp();
		}
		else{
    		$(this).next().next().next().slideDown();
		}
    });
});
</script>
