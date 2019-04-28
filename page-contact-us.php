<?php get_header(); ?>

        <!--All Content Start-->
        <div class="wrapper boxstyle">
        	
            <!--Page Header Start-->
            <section class="page-header">
            	<h1>Contact us</h1>
            </section>
            <!--Page Header End-->
            
            <!--Map and Details-->
            <section class="box-container">
            	
                <!--Page Navigation-->
                <nav class="pagenav">
                	<ul>
                        <li><a href="index.html">Home</a></li>
                    	<li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
                
                <!--Map-->
                <div class="map-container">
                    <div id="map-canvas"></div>
                </div>
                
                <!--Contact Area-->
                <div class="contact-area">
                
                	<!--Send Message Start-->
                	<div class="send-message">
                    	<h2>send a message</h2>
                        <div class="comment-fieldbox">
                            <form id="form_contact">
                                <input id="name" class="input-name" type="text" name="name" placeholder="Your name *" required />
                                <input id="email" class="input-email" type="text" name="email" placeholder="Your email *" required />
                                <input id="mysubject" class="input-subject" type="text" name="mysubject" placeholder="Subject *" required />
                                <textarea id="comments" class="input-textarea" name="comment" placeholder="Your message *" required></textarea>
                                <div class="comment-active">
                                    <span>All fields are mandatory.</span>
                                    <input id="email_submit" class="submit-button" type="submit" value="SEND MESSAGE"/>
                                </div>
                                <div class="email_success">
                                    <div id="reply_message" class="email_loading" ></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Send Message End-->
                    
                    <!--Contact Info Start-->
                    <div class="contact-info">
                    	<h2>contact information</h2>
                        
                        <!--Contact Details-->
                        <div class="contact-details">
                        	<ul>
                            	<li>address: <span>Rameez Photos, Main Market Chishtian</span></li>
                                <li>phone: <span>+92-321-520-7339</span></li>
                                <li>email: <span>rana_abdullah6@yahoo.com</span></li>
                            </ul>
                        </div>
                        
                        <!--Text Area-->
                    </div>
                    <!--Contact Info End-->
                    
                </div>
                <!--Content Area End-->
                
            </section>
            <!--Map and Details End-->

        </div>
        <!--All Content End-->
	
<?php get_footer();?>