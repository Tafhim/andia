<?php include(drupal_get_path('theme',$GLOBALS['theme']) . '/partials/header.php'); ?>

<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="span10 offset1">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/1.jpg">
                            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/1.jpg">
                            <p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                        </li>
                        <li data-thumb="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/2.jpg">
                            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/2.jpg">
                            <p class="flex-caption">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        </li>
                        <li data-thumb="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/5.jpg">
                            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/5.jpg">
                            <p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                        </li>
                        <li data-thumb="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/6.jpg">
                            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/slider/6.jpg">
                            <p class="flex-caption">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Site Description -->
<div class="presentation container">
    <h2>We are <span class="violet">Andia</span>, a super cool design agency.</h2>
    <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
</div>

<!-- Services -->
<div class="what-we-do container">
    <div class="row">
        <div class="service span4">
            <div class="icon-awesome">
                <i class="icon-eye-open"></i>
            </div>
            <h4>Beautiful Websites</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
            <?php if ($page['services_left']): ?>
                <?php print render($page['services_left']); ?>
            <?php endif; ?>
        </div>
        <div class="service span4">
            <div class="icon-awesome">
                <i class="icon-table"></i>
            </div>
            <h4>Responsive Layout</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
            <?php if ($page['services_middle']): ?>
                <?php print render($page['services_middle']); ?>
            <?php endif; ?>
        </div>
        <div class="service span4">
            <div class="icon-awesome">
                <i class="icon-magic"></i>
            </div>
            <h4>Awesome Logos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
            <?php if ($page['services_right']): ?>
                <?php print render($page['services_right']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Latest Work -->
<div class="portfolio container">
    <div class="portfolio-title">
        <h3>Our Latest Work</h3>
    </div>
    <div class="row">
        <div class="work span3">
            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work1.jpg" alt="">
            <h4>Lorem Website</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work1.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
        <div class="work span3">
            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work2.jpg" alt="">
            <h4>Ipsum Logo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work2.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
        <div class="work span3">
            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work3.jpg" alt="">
            <h4>Dolor Prints</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work3.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
        <div class="work span3">
            <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work4.jpg" alt="">
            <h4>Sit Amet Website</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/portfolio/work4.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="testimonials container">
    <div class="testimonials-title">
        <h3>Testimonials</h3>
    </div>
    <div class="row">
        <div class="testimonial-list span12">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/testimonials/2.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/testimonials/3.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                </div>
               <ul class="nav nav-tabs">
                   <li class="active"><a href="#A" data-toggle="tab"></a></li>
                   <li class=""><a href="#B" data-toggle="tab"></a></li>
                   <li class=""><a href="#C" data-toggle="tab"></a></li>
                   <li class=""><a href="#D" data-toggle="tab"></a></li>
               </ul>
           </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="widget span3">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <p><a href="">Read more...</a></p>
            </div>
            <div class="widget span3">
                <h4>Latest Tweets</h4>
                <div class="show-tweets"></div>
            </div>
            <div class="widget span3">
                <h4>Flickr Photos</h4>
                <ul class="flickr-feed"></ul>
            </div>
            <div class="widget span3">
                <h4>Contact Us</h4>
                <p><i class="icon-map-marker"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                <p><i class="icon-phone"></i> Phone: 0039 333 12 68 347</p>
                <p><i class="icon-user"></i> Skype: Andia_Agency</p>
                <p><i class="icon-envelope-alt"></i> Email: <a href="">contact@andia.co.uk</a></p>
            </div>
        </div>
        <div class="footer-border"></div>
        <div class="row">
            <div class="copyright span4">
                <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.</p>
            </div>
            <div class="social span8">
                <a class="facebook" href=""></a>
                <a class="dribbble" href=""></a>
                <a class="twitter" href=""></a>
                <a class="pinterest" href=""></a>
            </div>
        </div>
    </div>
</footer>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>