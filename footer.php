<!-- <footer class="site-footer">
		
		<div class="footer-widgets clearfix">
			
			<?php if (is_active_sidebar('footer1')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer2')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer2'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer3')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer3'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer4')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>
				</div>

			<?php endif; ?>
			
		</div>
		
		<nav class="site-nav">
			<?php
			
			$args = array(
				'theme_location' => 'footer'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		</nav>
		
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
	
	</footer> -->

<!--Footer Start-->
<footer>
    <div class="footer-container">
        <div class="wrapper">
            <!--Footer About Us-->
            <section class="footer-aboutus">
                <figure>
                    <img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="logo" />
                </figure>
                <div class="footer-widgets clearfix">

                    <?php if (is_active_sidebar('footer1')) : ?>

                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </section>
            <!--Footer About Us End-->

            <!--Footer Gallery-->
            <section class="footer-gallery">
                <h2 class="footer-title">Photos</h2>
                <ul>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image1.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail1.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image4.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail2.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image16.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail3.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image14.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail4.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image6.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail5.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image5.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail6.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image18.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail7.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                    <li>
                        <a class="fancybox" data-fancybox-group="footergallery" href="images/upload/image10.jpg">
                            <div class="thumbnail-hover"></div>
                            <img src="<?php bloginfo('template_url'); ?>/images/upload/footer-gallery-thumbnail8.jpg"
                                alt="gallery thumbnail" />
                        </a>
                    </li>
                </ul>
            </section>
            <!--Footer Gallery End-->

            <!--Footer Contact-->
            <section class="footer-contact">
                <h2 class="footer-title">get in touch</h2>
                <p>Never Ever Hesitate To Contact Us, We Are Always Here For You!</p>
                <ul class="footer-address">
                    <li>Rameez Photos, Main Market Chishtian</li>
                    <li>rana_abdullah6@yahoo.com</li>
                    <li>+92-321-520-7339</li>
                </ul>

                <!--Footer Social-->
                <ul class="footer-social">
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon1.png"
                                alt="social media" /></a></li>
                    <li class="social-color2"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon2.png"
                                alt="social media" /></a></li>
                    <li class="social-color3"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon3.png"
                                alt="social media" /></a></li>
                    <li class="social-color4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon4.png"
                                alt="social media" /></a></li>
                    <li class="social-color5"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon5.png"
                                alt="social media" /></a></li>
                    <li class="social-color6"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon6.png"
                                alt="social media" /></a></li>
                    <li class="social-color7"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon7.png"
                                alt="social media" /></a></li>
                    <li class="social-color8"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon8.png"
                                alt="social media" /></a></li>
                    <li class="social-color9"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/social-icon/social-icon9.png"
                                alt="social media" /></a></li>
                </ul>
                <!--Footer Social End-->

            </section>
            <!--Footer Contact End-->

        </div>
    </div>

    <!--Footer Bottom-->
    <section class="footer-bottom">
        <div class="wrapper">
            <div class="copyright">
                Copyright © All Rights Reserved. <a href="contact.html#">Rameezphotos.com</a>
            </div>
            <nav>
                <ul>
                <?php 

                    $menu_locations = get_nav_menu_locations();

                    $menus = wp_get_nav_menu_items( $menu_locations['footer'] );

                    if($menus){

                        foreach ($menus as $menu) {

                            $active = "";

                            if(is_page($menu->title)){
                                $active = "active";
                            }

                            echo '<li class="'.$active.'"><a href="'.$menu->url.'">'.$menu->title.'</a></li>';
                        } 
                    }

                    ?>
                </ul>
            </nav>
        </div>
    </section>
    <!--Footer Bottom End-->
</footer>
<!--Footer End-->

</div>


<?php wp_footer(); ?>
</body>

</html>