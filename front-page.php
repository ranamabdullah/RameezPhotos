<?php get_header(); ?>

	<!--Banner Slider Start-->
	<section class="banner-slide">
            <div id="layerslider" style="width: 100%; height: 670px; margin: 0px auto; ">

                <!--Layer 1-->
                <div class="ls-layer" style="slidedirection: right; transition2d: 24,25,27,28; ">

                    <img src="<?php bloginfo('template_url'); ?>/images/fullwidth-slide/fullwidth-slide1.jpg" class="ls-bg" alt="Slide background">
                    <a href="#" class="ls-link"></a>



                </div>
                <!--End-->

                <!--Layer 2-->
                <div class="ls-layer" style="slidedirection: right; transition2d: 110,111,112,113; ">

                    <img src="<?php bloginfo('template_url'); ?>/images/fullwidth-slide/fullwidth-slide2.jpg" class="ls-bg" alt="Slide background">
                    <a href="#" class="ls-link"></a>


                </div>
                <!--End-->

                <!--Layer 3-->
                <div class="ls-layer" style="slidedirection: right; transition2d: 92,93,105; ">

                    <img src="<?php bloginfo('template_url'); ?>/images/fullwidth-slide/fullwidth-slide3.jpg" class="ls-bg" alt="Slide background">
                    <a href="#" class="ls-link"></a>



                </div>
                <!--End-->

            </div>
        </section>
        <!--Banner Slider End-->

        <!--Service Container Start-->
        <section class="service-container">
            <div class="wrapper">
                <div class="servicebox">
                    <ul>

                        <!--Service 1-->
                        <li>
                        <?php 
                        $page = get_page_by_path( 'Photo Editing' );
                        ?>
                            <a href="<?php echo $page->guid; ?>">
                                <div class="hexa">
                                    <div class="hexcontainer">
                                        <div class="vertical-align">
                                            <span class="hextext"><?php echo $page->post_title; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->

                        <!--Service 2-->
                        <li>
                        <?php 
                        $page = get_page_by_path( 'Video Editing' );
                        ?>
                            <a href="<?php echo $page->guid; ?>">
                                <div class="hexa">
                                    <div class="hexcontainer">
                                        <div class="vertical-align">
                                            <span class="hextext service2"><?php echo $page->post_title; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->

                        <!--Service 3-->
                        <li>
                        <?php 
                        $page = get_page_by_path( 'Logo Design' );
                        ?>
                            <a href="<?php echo $page->guid; ?>">
                                <div class="hexa">
                                    <div class="hexcontainer">
                                        <div class="vertical-align">
                                            <span class="hextext service3"><?php echo $page->post_title; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->

                        <!--Service 4-->
                        <li>
                        <?php 
                        $page = get_page_by_path( 'Website Design' );
                        ?>
                            <a href="<?php echo $page->guid; ?>">
                                <div class="hexa">
                                    <div class="hexcontainer">
                                        <div class="vertical-align">
                                            <span class="hextext service4"><?php echo $page->post_title; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->

                    </ul>
                </div>

                <!--Service Text Area-->
                <div class="service-textarea">
                    <h1>Hello! Rameez Photos</h1>
                    <p>All About Photography Under Professionals, An Engineer's Shoot & Creativity. </p>
                </div>

                <!--Service Text Area End-->

            </div>
        </section>
        <!--Service Container End-->

        <!--Portfolio Container Start-->
        <section class="portfolio-container">

            <!--Category Filter-->
            <div class="category-filter">
                <div class="wrapper">
                    <h2>portfolio</h2>
                    <ul>
                        <li class="filter selected" data-category="cat-all">ALL</li>
                        <?php 
                        $categories = get_terms( ['taxonomy' => 'category','hide_empty' => false]);
                        foreach ($categories as $category) {
                            if($category->slug == 'uncategorized')
                                continue;
                            echo '<li class="filter" data-category="'.$category->slug.'">'.$category->name.'</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!--End-->

            <?php
                $posts = get_posts(['numberposts'=>-1]);
                // var_dump($posts[0]);
                // var_dump( wp_get_post_categories($posts[0]->ID, $args) );

            ?>

            <!--Portfolio Fullwidth Thumbnails-->
            <div class="grid-fullwidth">
                <div class="megafolio-container noborder norounded">
                <?php
                foreach ($posts as $post) {
                    $categories = get_the_category($post->ID);
                    $cats = "";
                    foreach ($categories as $category){
                        $cats .= " ".$category->slug;
                    }
                    ?>
                    <!--Thumbnail 1 Start-->
                    <div class="mega-entry cat-all <?php echo $cats; ?>" id="entry-1" data-src="<?php echo get_the_post_thumbnail_url($post); ?>"
                        data-width="504" data-height="400">

                        <a href="<?php echo $post->guid ?>">

                        <!--Hover Effect Start-->
                        <div class="mega-hover alone">

                            <!--Title and Subtitle-->
                                <div class="mega-hovertitle"><?php echo $post->post_title; ?>
                                </div>

                            <!-- Link Button -->
                            <a href="portfolio-single6.html">
                                <div class="mega-hoverview"></div>
                            </a>

                        </div>
                        <!--Hover Effect End-->
                        </a>


                    </div>
                    <!--Thumbnail End-->
                <?php } ?>
                
                </div>
            </div>
            <!--Portfolio Fullwidth Thumbnails End-->

        </section>
        <!--Portfolio Container End-->
	
<?php get_footer();?>