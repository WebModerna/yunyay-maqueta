				<div class="footer_bg">
					<!--[if IE 8]>
						<img src="<?php bloginfo('stylesheet_directory');?>/img/footer_bg.png" alt="<?php _e('Imagen de fondo', 'yunyay');?>" />
					<![endif]-->
				</div>
				<div id="mensaje">
					<?php //Pie de página. Mensaje
						$recent = new WP_Query("page_id=42");
						while($recent->have_posts()) : $recent->the_post();
						the_content();
						endwhile; 
						wp_reset_query();
					?>
				</div>
			</article><!-- #home_slider -->
		</section>
		<footer>
			<?php //Pie de página. Dirección y demás datos
				$recent = new WP_Query("page_id=44");
				while($recent->have_posts()) : $recent->the_post();
				the_content();
				endwhile; 
				wp_reset_query();
			?>
			<a id="irarriba" title="<?php _e('Ir arriba', 'yunyay');?>" href="#">^</a>
			<div class="iconos">
				<ul>
					<?php
                 
	                // TWITTER         
	                $perfil_twitter = get_the_author_meta( 'twitter' );
	                if ( $perfil_twitter && $perfil_twitter != '' ) {
	                    echo '<li class="autor_tw"><a target="_blank" title="Twitter" href="' . esc_url($perfil_twitter) . '"></a></li>';
	                }
	                 
	                // FACEBOOK
	                $perfil_facebook = get_the_author_meta( 'facebook' );
	                if ( $perfil_facebook && $perfil_facebook != '' ) {
	                    echo '<li class="autor_fb"><a target="_blank" title="Facebook" href="' . esc_url($perfil_facebook) . '"></a></li>';
	                }

	                // RSS
	                $perfil_feed = get_the_author_meta( 'perfil_feed' );
	                if ( $perfil_feed && $perfil_feed != '' ) {
	                    echo '<li class="autor_feed"><a target="_blank" title="'.__('Noticias Rss', 'yunyay').'" href="' . esc_url($perfil_feed) . '"></a></li>';
	                }

	                // Google+
	                $perfil_google = get_the_author_meta( 'google_mas' );
	                if ( $perfil_google && $perfil_google != '' ) {
	                    echo '<li class="autor_google"><a target="_blank" title="Google+" href="' . esc_url($perfil_google) . '"></a></li>';
	                }
	     
	                // YouTube
	                $perfil_youtube = get_the_author_meta( 'youtube' );
	                if ( $perfil_youtube && $perfil_youtube != '' ) {
	                    echo '<li class="autor_youtube"><a target="_blank" title="Youtube" href="' . esc_url($perfil_youtube) . '"></a></li>';
	                }

	                // LinkedIn
	                $perfil_linkedin = get_the_author_meta( 'linkedin' );
	                if ( $perfil_linkedin && $perfil_linkedin != '' ) {
	                    echo '<li class="autor_linkedin"><a target="_blank" title="LinkedIn" href="' . esc_url($perfil_linkedin) . '"></a></li>';
	                }
                ?>
				</ul>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
	<?php if(is_page( 'contacto' )) { //Solo se cargará en la página del formulario ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/datepicker-completo.js"></script>
	<?php };?>


	<script async type="text/javascript">
	  window.___gcfg = {lang: 'es-419'};

	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/platform.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	<script async type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script async type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-46652331-1', 'yunyay.com.ar');
		ga('send', 'pageview');
</script>
<?php wp_footer();?>
</body>
</html>