	<div class="Footer">
		<div class="u-gridContainer">
			<div class="u-gridRow"> 

				<div class="u-gridCol4">
					<div class="openingstijden">
						<b>Openingstijden winkel</b>

						<table>
							<tr><td class="td-rechts">Maandag</td><td class="td-rechts">Gesloten</td></tr>
							<tr><td class="td-rechts">Di t/m vrij</td><td class="td-rechts">08:30 - 15:00 uur</td></tr>
							<tr><td class="td-rechts">Zaterdag</td><td class="td-rechts">Gesloten</td></tr>
							<tr><td class="td-rechts">Zondag</td><td class="td-rechts">Gesloten</td></tr>
						</table>
					</div>
				</div>

				<div class="u-gridCol4">
					<div class="google-maps-footer">
						<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=De+Glaswacht+++Goudenregenstraat+205,+2565+ES+Den+Haag+%E2%80%8E&amp;aq=&amp;sll=52.078227,4.263618&amp;sspn=0.00848,0.022423&amp;t=m&amp;ie=UTF8&amp;hq=De+Glaswacht+%E2%80%8E&amp;hnear=Goudenregenstraat+205,+2565+ES+Segbroek,+Den+Haag,+Zuid-Holland&amp;ll=52.078227,4.263618&amp;spn=0.006295,0.006295&amp;output=embed&amp;z=12&amp;iwloc=near"></iframe>
					</div>
				</div>

				<div class="u-gridCol4 footer-info">
					<h4>De Glaswacht</h4>

					<p>Goudenregenstraat 205 <br>
						2565 ES Den Haag <br>
						T: (070) 363 2860 <br>
						F: (070) 427 6866 <br>
						E: info@glaswacht.nl
					</p>

					<a href="/app">Download de Dubbelglas app</a>

					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span class="orange-text">Gevonden</span></a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
