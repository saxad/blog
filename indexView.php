<!DOCTYPE html>

 <?php //include_once('./requete/sql.php'); ?> 

<html lang="en">
<?php include_once('./partials/head.php'); ?>
<body data-spy="scroll" data-target=".fixed-top">
    
    <?php include_once('./partials/preloader.php'); ?>
    
    <?php include_once('./partials/navbar.php'); ?>



    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>BLOG <span id="js-rotating">IT, POKPOK, OTHER THINK </span></h1>
                            <p class="p-heading p-large">Personal blog to share what I'm learning or what excites me</p>
                            <p class="p-heading p-large">A toi mon ami qui a atteri sur cette page ce site est en cours de construction</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>Titre De Ma Petite Presentation</h2>
                        <p>Launching a new company or developing the market position of an existing one can be quite an overwhelming processs at times.</p>
                        <p class="testimonial-text">"Our mission here at Aira is to get you through those tough moments relying on our team's expertise in starting and growing companies."</p>
                        <div class="testimonial-author">Saad ZIZI - Junior Dev</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->




    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">LAST THREE</div>
                    <h2>ARTICLES</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    



                    <!-- Card -->
                    <?php
                     while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                     ?>
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?= $row->title?></h3>
                            <p><?php echo mb_strimwidth($row->body, 0, 100, "...");?></p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Author : titi</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body"><?=$row->created_at?></div>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="article.php">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <?php
                    }
                    ?>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    





    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Random tweet here</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The guys from Aria helped with getting my business off the ground and turning into a profitable company.</div>
                                            <div class="testimonial-author">Jude Thorn - Founder</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I purchased the Growth Accelerator service pack a few years ago and I renewed the contract each year. </div>
                                            <div class="testimonial-author">Marsha Singer - Marketer</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Aria's CEO personally attends client meetings and gives his feedback on business growth strategies.</div>
                                            <div class="testimonial-author">Roy Smith - Developer</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>
                                            <div class="testimonial-author">Ronald Spice - Owner</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I recommend Aria to every business owner or growth leader that wants to take his company to the next level.</div>
                                            <div class="testimonial-author">Lindsay Rune - Manager</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">My goals for using Aria's services seemed high when I first set them but they've met them with no problems.</div>
                                            <div class="testimonial-author">Ann Black - Consultant</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->

    <!-- Projects -->
	<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">PROJECTS</div>
                    <h2>Projects That We're Proud Of</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".design"><span>DESIGN</span></a>
                        <a class="button" data-filter=".development"><span>DEVELOPMENT</span></a>
                        <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                        <a class="button" data-filter=".seo"><span>SEO</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>Online Banking</span></div><img src="images/project-1.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Classic Industry</span></div><img src="images/project-2.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>BoomBap Audio</span></div><img src="images/project-3.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Van Moose</span></div><img src="images/project-4.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing seo">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>Joy Moments</span></div><img src="images/project-5.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing seo">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>Spark Events</span></div><img src="images/project-6.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>Casual Wear</span></div><img src="images/project-7.jpg" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>Zazoo Apps</span></div><img src="images/project-8.jpg" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Online Banking</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic Industry</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BoomBap Audio</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Van Moose</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>Or send me a message on </p>
                     
                        <h3>Follow Aria On Social Media</h3>

                        <span class="fa-stack">
                            <a href="https://twitter.com/saad__zizi">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://github.com/saxad">
                                <span class="hexagon"></span>
                                <i class="fab fa-github fa-stack-1x"></i>
                            </a>
                        </span>
     
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/saad-zizi-5a0aa1121/">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
     
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    

    <?php include_once('./partials/contact.php'); ?>
    <?php include_once('./partials/footer.php'); ?>
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>