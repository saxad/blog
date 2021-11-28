<!DOCTYPE html>
<html lang="en">
<?php include_once('./partials/head.php'); ?>
<body data-spy="scroll" data-target=".fixed-top">
    
    <?php include_once('./partials/preloader.php'); ?>
    
    <?php include_once('./partials/navbar.php'); ?>
    <?= $header ?>
    <?= $body ?> 
    <!-- Footer -->
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