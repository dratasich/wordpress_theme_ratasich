<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ultrabootstrap
 */

?>

		<!-- Tab to top scrolling -->
		<div class="scroll-top-wrapper"> <span class="scroll-top-inner">
  			<i class="fa fa-2x fa-angle-up"></i>
    		</span>
    	</div> 
		
		<footer>
		<div class="container">

				<?php 
                    $show_social_in_footer = get_theme_mod('socialicon_display' );
                    {?>   
			        <div class="pull-left">
				  <div class="menu-footer-container">
				  <ul class="list-inline social">
	                            <?php 
	                            $facebook =  esc_url(get_theme_mod ('facebook_textbox'));
	                            $twitter = esc_url(get_theme_mod('twitter_textbox'));
	                            $googleplus = esc_url(get_theme_mod('googleplus_textbox'));
	                            $youtube = esc_url(get_theme_mod('youtube_textbox'));
	                            $linkedin = esc_url(get_theme_mod('linkedin_textbox'));
	                            $pinterest = esc_url(get_theme_mod('pinterest_textbox'));
	                            if($facebook){?>
	                              <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a></li>
	                            <?php }
	                            if($twitter){?>
	                              <li><a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a></li>
	                            <?php }
	                            if($googleplus) {?>
	                              <li><a href="<?php echo $googleplus;?>"><i class="fa fa-google-plus"></i></a></li>
	                            <?php }
	                            if($youtube){?>
	                              <li><a href="<?php echo $youtube;?>"><i class="fa fa-youtube-play"></i></a></li>
	                            <?php }
	                            if($linkedin){?>
	                              <li><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
	                            <?php }
	                            if($pinterest){?>
	                              <li><a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a></li>
	                            <?php }?>
                        	  </ul>
				<?php }?>
				</div>
			      </div>

			      <div class="pull-right">
			        <!-- TODO: languages -->
			      </div>

			    </div>

			    <div class="container">
			      <div class="col-sm-3">
                                <p>
				<?php wp_nav_menu( array( 'menu' => 'footer', 'theme_location' => 'secondary' ) ); ?>

                                </p>
			      </div>
			      <div class="col-sm-3">
				<p>
				  Valentin Ratasich e.U.<br/>
				  Hauptstraße 115<br/>
				  7304 Nebersdorf
				</p>
			      </div>
			      <div class="col-sm-3">
				<p>
				  T: +43 (0) 2614 2317<br/>
				  E: <a href="mailto:office@bredal.at">office@bredal.at</a>
				</p>
			      </div>
			      <div class="col-sm-3">
				<b>Öffnungszeiten</b><br/>
				Mo - Fr., 08:00 - 12:00, 13:00 - 17:00 Uhr
			      </div>

			      <div class="line"></div>
			    </div>

			    <div class="container">

			      <div class="pull-left">
			      	&copy; 2016 Valentin Ratasich e.U. All rights reserved.
			      </div>
				
			      <div class="pull-right">
			        <a href="www.bredal.at/wordpress/impressum">Impressum</a>&nbsp;|&nbsp;
                                <a href="www.bredal.at/wordpress/datenschutzerklaerung">Datenschutzerklärung</a>
			      </div>

			    </div>

		</footer>

	
		
		<?php wp_footer(); ?>


                <?php
                if ( function_exists('cookie_accepted') && cookie_accepted() ) :
                ?>
		<!-- google analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-24997039-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
                <?php
                endif;
                ?>
	</body>
</html>
