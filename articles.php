<!DOCTYPE html>
<html lang="en">
    <?php
        
        if(isset($_GET['category_id'])){    
            
            include_once('./database.php');
            $query_category = 'SELECT * from category where id=?';
            $query_post = 'SELECT * from post where category_id=?';
            $stmt_category = $conn->prepare($query_category);
            $stmt_post = $conn->prepare($query_post);
            $stmt_category->execute([$_GET['category_id']]);
            $category = $stmt_category->fetch(PDO::FETCH_OBJ);
            $stmt_post->execute([$_GET['category_id']]);
            
            $query_category = 'SELECT * from category';
            $stmt_categories = $conn->prepare($query_category);
            $stmt_categories->execute();
        }


    ?>
<?php include_once('./partials/head.php'); ?>
<body data-spy="scroll" data-target=".fixed-top">
    
    
    <?php include_once('./partials/preloader.php'); ?>

    <?php include_once('./partials/navbar.php'); ?>


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?= $category->name ?></h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span><?= $category->name ?></span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->



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
                    <?php while( $post = $stmt_post->fetch(PDO::FETCH_OBJ)){ ?>
                                   <!-- Card -->
                                   <div class="card">
                                    <div class="card-image">
                                        <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><?= $post->title ?></h3>
                                        <p><?= $post->body ?></p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Author : titi</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?= $post->created_at ?></div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="button-container">
                                        <a class="btn-solid-reg page-scroll" href="article.php">DETAILS</a>
                                    </div> <!-- end of button-container -->
                                </div>
                                <!-- end of card -->
                    <?php  } ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    

    
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span><?= $category->name ?></span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


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