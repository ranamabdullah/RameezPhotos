<!--All Content Start-->
<div class="wrapper boxstyle">
	<div class="box-container">

		<!--Page Navigation-->
		<nav class="pagenav">
			<ul>
				<li><a href="index.html">home</a></li>
				<li><a href="portfolio-fullwidth.html">portfolio</a></li>
				<li>
					<?php the_title(); ?>
				</li>
			</ul>
		</nav>

		<!--Portfolio Image and Details-->
		<section class="portfolio-content">

			<!--Feature Image-->
			<!-- <figure class="feature-image">
                    	<img src="images/upload/portfolio-feature-image1.jpg" alt="portfolio" />
                    </figure> -->
			<div class="post-thumbnail">
				<?php the_post_thumbnail('small-thumbnail'); ?>
			</div>
			<!--Details Start-->
			<aside class="portfolio-details">
				<h1>
					<?php the_title(); ?>
				</h1>
				<div class="portfolio-tag">
					<ul>
						<li>date: <span>20 December 2013</span></li>
						<li>category:
							<?php
					$categories = get_the_category($post->ID);
                    $cats = "";
                    foreach ($categories as $category){
                        $cats .= " ".$category->slug;
					}
					
                    ?>
							<span>
								<?php echo $cats; ?></span>
						</li>
					</ul>
				</div>
				<div class="portfolio-text">
					<p class="dropcap">Sorem ipsum dolor sit amet consetetur diam sadipscing elitr, sed diam nonumy eirmod tempor
						invidunt ut labore et dolore magna aliquyam erat diam voluptua. At vero eos et accusam et justo duo dolores et ea
						rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
						amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua duo
						dolores.</p><br>

					<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
						Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy.</p>
				</div>

				<!--Social Share Button-->
				<div id="social-share">
					<h4 class="share-this">Share This</h4>
					<a href="javascript:facebookShare('http://studio.envato.com/', 550, 350)" target="_blank" class="facebook">
						<img src="images/facebook-share.png" alt="facebook" />
					</a>
					<a href="javascript:twitterShare('http://studio.envato.com/', 550, 350)" target="_blank" class="twitter">
						<img src="images/twitter-share.png" alt="tweet" />
					</a>
					<a href="javascript:googleShare('http://studio.envato.com/', 550, 350)" target="_blank" class="googleplus">
						<img src="images/googleplus-share.png" alt="google plus" />
					</a>
				</div>
				<!--End-->

			</aside>
			<!--Details End-->

		</section>
		<!--Portfolio Image and Details End-->

		<!--Related Work-->
		<section class="related-work">
			<h2>related work</h2>
			<ul>

				<!--Related 1-->
				<li>
					<a href="portfolio-single2.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work1.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 2-->
				<li>
					<a href="portfolio-single3.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work2.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 3-->
				<li>
					<a href="portfolio-single4.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work3.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 4-->
				<li>
					<a href="portfolio-single5.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work4.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 5-->
				<li>
					<a href="portfolio-single6.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work5.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 6-->
				<li>
					<a href="portfolio-single7.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work6.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 7-->
				<li>
					<a href="portfolio-single8.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work7.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

				<!--Related 8-->
				<li>
					<a href="portfolio-single9.html">
						<div class="thumbnail-hover">
							<div class="thumbnail-title">LOREM IPSUM DOLOR</div>
						</div>
						<img src="images/upload/related-work8.jpg" alt="related work" />
					</a>
				</li>
				<!--End-->

			</ul>
		</section>
		<!--Related Work End-->

	</div>
</div>
<!--All Content End-->