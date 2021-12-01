<?php ob_start(); ?>
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

<?php $header = ob_get_clean(); ?>
<?php ob_start(); ?>


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php?action=main">Home</a><i class="fa fa-angle-double-right"></i><span><?= $category->name ?></span>
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
                    <?php for ($i=0 ; $i < count($category_posts) ; $i++ ) {  ?>
                                   <!-- Card -->
                                   <div class="card">
                                    <div class="card-image">
                                        <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><?= $category_posts[$i]->title ?></h3>
                                        <p><?= $category_posts[$i]->body ?></p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Author : titi</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body"><?= $category_posts[$i]->created_at ?></div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="button-container">
                                        <a class="btn-solid-reg page-scroll" href="?action=post&post_id=<?= $category_posts[$i]->id ?>">DETAILS</a>
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
                        <a href="index.php?action=main">Home</a><i class="fa fa-angle-double-right"></i><span><?= $category->name ?></span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <?php $body = ob_get_clean(); ?>
    <?php require('./view/template.php'); ?>