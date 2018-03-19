<?php include('includes/template_functions.php'); ?>
<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from themes.fastwp.net/cc/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2018 04:39:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Modern WordPress Theme</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='reset-css' href='wp-content/themes/cc-theme/assets/css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-min-css' href='wp-content/themes/cc-theme/assets/css/bootstrap.min.css' type='text/css' media='all' />
    <!--<link rel='stylesheet' id='contact-css' href='wp-content/themes/cc-theme/assets/css/contact.css' type='text/css' media='all' />-->
    <link rel='stylesheet' id='font-awesome-min-css' href='wp-content/themes/cc-theme/assets/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-fancybox-css' href='wp-content/themes/cc-theme/assets/css/jquery.fancybox.css' type='text/css' media='all' />
 <!--   <link rel='stylesheet' id='magnific-popup-css' href='wp-content/themes/cc-theme/assets/css/magnific-popup.css' type='text/css' media='all' />-->
    <link rel='stylesheet' id='styles-css' href='wp-content/themes/cc-theme/assets/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='wp-content/themes/cc-theme/assets/css/responsive.css' type='text/css' media='all' />
<!--    <link rel='stylesheet' id='flexslider-css' href='wp-content/themes/cc-theme/assets/css/flexslider.css' type='text/css' media='all' />-->
    <link rel='stylesheet' id='httpfonts-googleapis-comcssfamilyoswald400600700-css' href='http://fonts.googleapis.com/css?family=Oswald%3A400%2C600%2C700' type='text/css' media='all' />
    <link rel='stylesheet' id='httpfonts-googleapis-comcssfamilylato400400italic600-css' href='http://fonts.googleapis.com/css?family=Lato%3A400%2C400italic%2C600' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
</head>

<body class="home blog">
    <div id="wrap">
        <div id="background-color"></div>
		<?php include('includes/header.php'); ?>
        <div class="content-wrapper">
            <div id="content">
                <div class="container">
                    <!--<h1 id="logo"><a href="index.php"></a></h1>-->
					<!-- start Element -->
                   <?php //include('includes/template/with_background.php');?>
                   <?php //include('includes/template/except_content.php');
				   $getBlogs = getBlogList();
				   //print_r($getBlogs);die();
				   if(count($getBlogs) > 0){
				   foreach($getBlogs['items'] as $blog){
				   ?> 
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/gone-fishing/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="<?php echo $blog['volumeInfo']['imageLinks']['thumbnail']?>" class="attachment-full size-full wp-post-image" alt="Fishes catching by net in the sea" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/travel/index.html" rel="category tag"><?php //$blog['volumeInfo']['viewability']?></a></p>
                                <a href="index.php/2016/07/19/gone-fishing/index.html" title="">
                                    <h4 class="header"><?=$blog['volumeInfo']['title'];?></h4>
                                </a>
								<p><?php if(strlen($blog['volumeInfo']['description']) > 120 ){ echo substr($blog['volumeInfo']['description'],0,60).'...'; }else{ echo $blog['volumeInfo']['description']; };?></p>
                                <div class="stats">
                                    <p class="lefted"><?=$blog['volumeInfo']['publishedDate'];?><span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-71" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> <?=$blog['volumeInfo']['pageCount'];?></span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/gone-fishing/index.html#comments" title=""><i
                                 class="fa fa-comments"></i><?php //$blog['volumeInfo']['averageRating'];?></a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } }?>
                   <!-- <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/appreciating-natures-power-on-our-planet/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/image041-e1488198188218.jpg" class="attachment-full size-full wp-post-image" alt="image04[1]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/travel/index.html" rel="category tag">Travel</a></p>
                                <a href="index.php/2016/07/19/appreciating-natures-power-on-our-planet/index.html" title="">
                                    <h4 class="header">Appreciating Nature&#8217;s Power on our Planet</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-68" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 69</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/appreciating-natures-power-on-our-planet/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>0</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper fwp-aboutbox-7925">
                            <div class="grey-bg full-height">
                                <div class="box-parent">
                                    <div class="child">
                                        <div class="avatar"> <img src="wp-content/uploads/2016/07/about021-e1488199359141.jpg" alt="" /></div>
                                        <p class="small">About</p>
                                        <h3 class="header">James McDougal</h3>
                                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/best-recipe-for-breakfast-with-toast/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/image051-e1488197938786.jpg" class="attachment-full size-full wp-post-image" alt="image05[1]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/food/index.html" rel="category tag">Food</a></p>
                                <a href="index.php/2016/07/19/best-recipe-for-breakfast-with-toast/index.html" title="">
                                    <h4 class="header">Best Recipe for Breakfast with Toast</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-60" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 92</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/best-recipe-for-breakfast-with-toast/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>0</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper fwp-testimonial-5281">
                            <figure class="images"> <img src="wp-content/uploads/2016/07/image061-e1488199246223.jpg" alt="" />
                                <div class="covering-image visible">
                                    <div class="info-box-content">
                                        <div class="parent">
                                            <div class="child">
                                                <blockquote>
                                                    <p>I didn&#8217;t fail! I&#8217;ve just found 10,000 ways that won&#8217;t work.</p>
                                                    <p class="name">- Thomas Edison</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/brooklyn-is-my-place/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/image121-e1488197973189.jpg" class="attachment-full size-full wp-post-image" alt="image12[1]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/lifestyle/index.html" rel="category tag">Lifestyle</a></p>
                                <a href="index.php/2016/07/19/brooklyn-is-my-place/index.html" title="">
                                    <h4 class="header">Brooklyn is My Place</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-54" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 26</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/brooklyn-is-my-place/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>0</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/best-food-in-greenwich-village/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/large063-e1488198017593.jpg" class="attachment-full size-full wp-post-image" alt="large06[3]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/food/index.html" rel="category tag">Food</a></p>
                                <a href="index.php/2016/07/19/best-food-in-greenwich-village/index.html" title="">
                                    <h4 class="header">Best Food in Greenwich Village</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-51" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 53</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/best-food-in-greenwich-village/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>1</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper fwp-newsletter-3947">
                            <figure class="images"> <img src="wp-content/uploads/2016/07/image091-e1488199409428.jpg" alt="" />
                                <div class="covering-image visible">
                                    <div class="info-box-content">
                                        <div class="parent">
                                            <div class="child">
                                                <p class="small">Newsletter</p>
                                                <h4 class="header">SIGN UP FOR OUR NEWSLETTER AND RECEIVE A $20 BONUS CODE</h4>
                                                <script type="text/javascript">
                                                    (function() {
                                                        if (!window.mc4wp) {
                                                            window.mc4wp = {
                                                                listeners: [],
                                                                forms: {
                                                                    on: function(event, callback) {
                                                                        window.mc4wp.listeners.push({
                                                                            event: event,
                                                                            callback: callback
                                                                        });
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    })();
                                                </script>
                                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-85" method="post" data-id="85" data-name="Newsletter">
                                                    <div class="mc4wp-form-fields">
                                                        <div class="form-part newsletter" method="post" action="http://themes.fastwp.net/cc/newsletter.php" name="contactform" id="contactform" autocomplete="off">
                                                            <input name="email" type="text" id="email" size="30" title="Email">
                                                            <div class="input-wrapper clearfix"> <span id="message"></span>
                                                                <div class="clear"></div>
                                                                <input type="submit" class="send-btn" value="Submit" id="submit" name="Submit">
                                                            </div>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                                        </div>
                                                        <input type="hidden" name="_mc4wp_timestamp" value="1519187984" />
                                                        <input type="hidden" name="_mc4wp_form_id" value="85" />
                                                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                                    </div>
                                                    <div class="mc4wp-response"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/what-i-have-to-say-about-architecture/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/image111-e1488198035836.jpg" class="attachment-full size-full wp-post-image" alt="image11[1]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/lifestyle/index.html" rel="category tag">Lifestyle</a></p>
                                <a href="index.php/2016/07/19/what-i-have-to-say-about-architecture/index.html" title="">
                                    <h4 class="header">What I have to say about architecture</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-45" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 29</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/what-i-have-to-say-about-architecture/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>0</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper instagram2x2 fwp-gallery-8315">
                            <a href="https://www.instagram.com/p/BIKKZeFh1Bc/" title="">
                                <figure class="images"> <img src="../../scontent.cdninstagram.com/vp/20a54c9c94252bac086cad6b8f810aab/5B4B1E87/t51.2885-15/e35/13774630_818286051636001_716263686_n.jpg" alt="">
                                    <div class="covering-image">
                                        <div class="info-box-content hidden-content">
                                            <div class="parent">
                                                <div class="child">
                                                    <p><i class="fa fa-heart"></i>0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                            <a href="https://www.instagram.com/p/BIKKYnOBRIg/" title="">
                                <figure class="images"> <img src="../../scontent.cdninstagram.com/vp/7184f7d3cf11244039818d327403aaa3/5B0C6E20/t51.2885-15/e35/13704099_1614884468841295_1550931556_n.jpg" alt="">
                                    <div class="covering-image">
                                        <div class="info-box-content hidden-content">
                                            <div class="parent">
                                                <div class="child">
                                                    <p><i class="fa fa-heart"></i>1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                            <a href="https://www.instagram.com/p/BIKKSTfB4BD/" title="">
                                <figure class="images"> <img src="../../scontent.cdninstagram.com/vp/f36a65a45f08e96aaf6ca18bd595838a/5B29023F/t51.2885-15/e35/13721205_1765220910388764_620804823_n.jpg" alt="">
                                    <div class="covering-image">
                                        <div class="info-box-content hidden-content">
                                            <div class="parent">
                                                <div class="child">
                                                    <p><i class="fa fa-heart"></i>0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                            <a href="https://www.instagram.com/p/BIKKO8ZBd1E/" title="">
                                <figure class="images"> <img src="../../scontent.cdninstagram.com/vp/f9306666a7be6cd4d821314755688ec9/5B12E4D5/t51.2885-15/e35/13707059_910557792406191_114493860_n.jpg" alt="">
                                    <div class="covering-image">
                                        <div class="info-box-content hidden-content">
                                            <div class="parent">
                                                <div class="child">
                                                    <p><i class="fa fa-heart"></i>1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                            <div class="clear"></div>
                            <div class="grey-bg2">
                                <p class="small">Instagram</p>
                                <a href="http://instagram.com/" title="">
                                    <h4 class="header">@corpuschristi</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <div class="grey-bg no-padding full-height">
                                <ul class="social-list clearfix custom custom5">
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i>
                                            <p>@corpuschristi</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-snapchat"></i>
                                            <p>Add Me on Snapchat</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-soundcloud"></i>
                                            <p>CC9</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-instagram"></i>
                                            <p>I&#039;m on Instagram</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i>
                                            <p>Like Me</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/capturing-what-you-hold-dear/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/large021-e1488198073997.jpg" class="attachment-full size-full wp-post-image" alt="large02[1]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/lifestyle/index.html" rel="category tag">Lifestyle</a></p>
                                <a href="index.php/2016/07/19/capturing-what-you-hold-dear/index.html" title="">
                                    <h4 class="header">Capturing What you Hold Dear</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-29" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 33</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/capturing-what-you-hold-dear/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>0</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 home teaser">
                        <div class="padding-wrapper">
                            <a href="index.php/2016/07/19/wrecked-ship/index.html" title="">
                                <figure class="images"> <img width="365" height="243" src="wp-content/uploads/2016/07/image081-e1488198058594.jpg" class="attachment-full size-full wp-post-image" alt="image08[1]" /></figure>
                            </a>
                            <div class="grey-bg">
                                <p class="small categories"><a href="index.php/category/travel/index.html" rel="category tag">Travel</a></p>
                                <a href="index.php/2016/07/19/wrecked-ship/index.html" title="">
                                    <h4 class="header">Wrecked Ship</h4>
                                </a>
                                <div class="stats">
                                    <p class="lefted">July 19, 2016 <span class="alignright"> <span
                                 class="padding"><a
                                 href="#" class="zilla-likes" id="zilla-likes-26" title="Like this"><span
                                 class="zilla-likes-count"><i
                                 class="fa fa-heart"></i> 23</span> <span class="zilla-likes-postfix"></span></a>
                                        </span> <a href="index.php/2016/07/19/wrecked-ship/index.html#comments" title=""><i
                                 class="fa fa-comments"></i>0</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
					<!-- End element -->
                </div>
                <div class="centered"> <a class="button load-more" href="index.php/page/2/index.html">Older Posts</a></div>
            </div>
        </div>
    </div>
    <footer id="footer" class="clearfix">
        <p class="alignleft">(c) 2016. All Rights Reserved.</p>
        <p class="alignright"></p>
    </footer>
	    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/main2.js'></script>
		    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/bootstrap.min.js'></script>
		
<!--    <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/modernizr.js'></script>

    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.ba-bbq.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.isotope.load.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.isotope2.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/jquery-easing-1.3.js'></script>
    <script type='text/javascript' src='wp-content/themes/cc-theme/assets/js/packery-mode.pkgd.min.js'></script>

    <script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js'></script>-->
</body>
<!-- Mirrored from themes.fastwp.net/cc/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2018 04:40:30 GMT -->

</html>