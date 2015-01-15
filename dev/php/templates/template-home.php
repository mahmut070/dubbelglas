<?php
/*
Template Name: Homepage
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
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<div>
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>

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
		<div class="u-gridCol4 home-boxes">
			 <b>Bent u opzoek naar dubbelglas?</b>
			 <a class="button-style meer-info-box" href="/dubbelglas">Meer informatie</a>
			 <img src="<?php echo get_stylesheet_directory_uri();?>/img/dubbelglas.jpg">
			 <p>De Glaswacht is gespecialiseerd in dubbelglas.</p>
		</div>

		<div class="u-gridCol4 home-boxes">
			 <b>U zoekt een specifiek glasproduct?</b>
			 <a class="button-style meer-info-box" href="http://www.glaswacht.com">Meer informatie</a>
			 <img src="<?php echo get_stylesheet_directory_uri();?>/img/glasproduct.jpg">
			 <p>De glaswacht heeft een breed assortiment aan producten.</p>
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
