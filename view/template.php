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
    <script src="public/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="public/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="public/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="public/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="public/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="public/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="public/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="public/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="public/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="public/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>