<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-home">
		<div class="u-gridRow"> 
		    <div class="u-gridCol7">
				<div class="Slider">

					<?php
							
							$args = array(
								'post_type' => 'slides', 
								'posts_per_page'=>999
							);
							$slides = new WP_Query( $args );
							$num = count($slides);
							$counter = 0;
							if( $slides->have_posts() ) {
								while( $slides->have_posts() ) {
									$slides->the_post(); 
									$counter++;
									?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
										  $image_url = $image[0];
									?>
									<img src="<?php echo $image_url; ?>" >

									<?php
								}
							}
						?>

				</div> 
			</div>

			<div class="u-gridCol5 content-left">


	
				<h5 class="titel-blue">De Glaswacht is gespecialiseerd in het plaatsen van dubbelglas in bestaande kozijnen</h5>
			
				<p class="intro-text">
					Glashandel de Glaswacht is in 1976 opgericht en een begrip geworden in Den Haag en omgeving. Onze jarenlange ervaring, uitmuntende service en vakkundige installatie is een constante waarde geworden, waar onze zakelijke en particuliere klanten op vertrouwen en bouwen. <br><br>
					Onze specialisatie is het plaatsen van dubbelglas in de bestaande kozijnen, en er voor zorgen dat u er van binnen niet het verschil ziet met hoe het eerst was met enkelglas.
				</p>

				<a class="button-style meer-info" href="/contact">Meer informatie</a>

			</div>
	</div>
</div>

<div class="u-gridContainer afspraak-area">
	<div class="u-gridRow"> 
		<div class="big-button">
			<p class="big-button-text">Heeft u vragen of wilt u een afspraak maken? <br>
			<b>Bel ons gerust!</b></p>

			<a href="tel:0703632860" class="orange-button"><img class="telefoon-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/telefoon.png"> (070) 363 2860</a>
		</div>
	</div>
</div>

<div class="u-gridContainer main-content">
	<div class="u-gridRow main-content-space"> 
		<div class="u-gridCol8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--content" id="post-<?php the_ID(); ?>">
					<h2 class="page-title-landingspagina"><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
		</div>

		<div class="u-gridCol4 home-box-right">
			 <b>Glaswacht verzorgt o.a.</b>

			 <ul class="producten-lijst">
			 	<li>Alle glasreparaties</li>
			 	<li>Dubbele beglazing</li>
			 	<li>Spiegels- en vensterglas</li>
			 	<li>Glas in lood / koper</li>
			 	<li>Badkamer deuren / schermen</li>
			 	<li>Hardglas-beveiliging</li>
			 	<li>Gezandstraald glas</li>
			 </ul>
		</div>				
	</div>
</div>

<?php get_footer(); ?>
