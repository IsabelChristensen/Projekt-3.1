<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
				    /*
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
					*/
				?>
				
				
				<center><div class="tekstboksetilfooter">
				    
				    <div id="tekstboks1" class="tekstboksOverskrift">
				        
				        <h3 class="tekststilOverskrrift">Contact</h3>
				       
				        <ul>
				            <li><p class="tekststilTekst">Greg McQueen</p></li>
				            <li><p class="tekststilTekst">gmcphotographer@icloud.com</p></li>
				            <li><p class="tekststilTekst">31717741</p></li>
				        </ul>
				      
				    </div>
			        
			        <div id="kvalitetsstempelTekstboks" class="tekstboksOverskrift">
				        
				        <h3  id="kvalitetsstempel" class="tekststilOverskrrift">Member of:</h3>
				        
				        <a href="https://www.fearlessphotographers.com"><img id="fearlesslogo" src="http://cirosite.com/gmcphotography/wp-content/themes/Divi/images/fearlesslogoblack.png"></a>
				        
				    </div>
				    
				    <div class="tekstboksOverskrift">
				        
				        <h3 class="tekststilOverskrrift"></h3>
				        
				        <div class="socialelogo">
				        
				        <ul>
				            <li><a href="https://www.instagram.com/gmcphotographer/"><img class="sociallogoBillede" src="http://cirosite.com/gmcphotography/wp-content/themes/Divi/images/instagram.png"></a>
				            </li>
				            <li><a href="https://www.linkedin.com/in/gregmcqueen/"><img class="sociallogoBillede" src="http://cirosite.com/gmcphotography/wp-content/themes/Divi/images/linkedin.png"></a>
				            </li>
				            <li><a href="https://www.facebook.com/gregmcqueenphotographer/?hc_ref=ARTJNEw9ge-GdrJix-r-KzmZaFVzGkSvslTZDuKibIAg9FZ4PeAe1FLoihrJhnIfdhQ&fref=nf"><img class="sociallogoBillede" src="http://cirosite.com/gmcphotography/wp-content/themes/Divi/images/facebook.png"></a>
				            </li>
				        </ul>
				        
				        </div>

				    </div>
				    
				</div></center>
				
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->
	


	<?php wp_footer(); ?>
	
		<script>
	    
	        /* Javascript/jquery til at navigationsbaren skifter farve når der scrolles. */
    
    var j = jQuery.nonConflicht();
    
    j(document).ready(function() {
    
	j(window).scroll(function() {
  	if(j(document).scrollTop() > 50) {
    	j('#et-top-navigation').addClass('shrink');
    	
    	console.log('hallo');
    }
    else {
    j('#et-top-navigation').removeClass('shrink') ;
console.log('hallo');    }
  });
});
    
	    
	    
	</script>
	
	
</body>
</html>