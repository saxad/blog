<?php
//session_start();
//if (!(isset($_SESSION['loggedin'])) or $_SESSION['loggedin'] == null) {
//  header('Location: login.php');
//  exit;
//}
//require_once('./../database.php');
//if (isset($_GET['id'])){
  //var_dump('pp get');
 // $query = 'SELECT * from category where id=?';
  
  //$stmt = $conn->prepare($query);
  //$stmt->execute([$_GET['id']]);
  //$category_name = $stmt->fetch(PDO::FETCH_OBJ);
  
//}
// $post_id[id] exist ==> update
// if(isset($_POST['id'])){
//   var_dump('pp post1');
//   var_dump($_POST);
//   $query = 'UPDATE category SET name=? WHERE id=?';
//   $stmt = $conn->prepare($query);
//   $stmt->execute([$_POST['name'], $_POST['id']]);
//   unset($_POST);
//   header('Location: '.$_SERVER['REQUEST_URI']);
// }
// if(!isset($_POST['id']) && isset($_POST['name'])){
//   var_dump($_POST);
//   $query = 'INSERT INTO category (name) VALUES(?) ';
//   $stmt = $conn->prepare($query);
//   $stmt->execute([$_POST['name']]);
//   unset($_POST);
//   header('Location: '.$_SERVER['REQUEST_URI']);
// }

?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('./partials/dashboard/head.php'); ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('./partials/dashboard/header.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
      

      </div>
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include_once('./partials/dashboard/side_bar.php');?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control"  name="name" id="exampleInputUsername1" placeholder="Username" value="<?= $category_name?>">
                      <?php if (isset($_GET['id'])){?>
                      <input type="hidden"  name="id" id="exampleInputUserid1" value="<?= $category_id?>">
                      <?php
                      }
                      ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      <?php include_once('./partials/dashboard/footer.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
