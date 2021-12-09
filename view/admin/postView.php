<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
if (!(isset($_SESSION['loggedin'])) or $_SESSION['loggedin'] == null) {
    header('Location: login.php');
    exit;
}
require_once('./../database.php');
if(isset($_POST['id'])){
  
  try{
   
    $query3 = 'UPDATE  post SET title=? , category_id=? , body=?  WHERE id=?';
    $stmtpost = $conn->prepare($query3);
    $stmtpost->execute([$_POST['title'], $_POST['category'], $_POST['body'], $_POST['id']]);
  
  }
  catch(Exception $e){
    echo $e->getMessage();
  }

}
if(isset($_POST['id']) && $_POST['id'] === ""){
  
  try{
   
    $query3 = 'INSERT INTO  post (title, category_id, body)  VALUES(?,?,?)';
    $stmtpost = $conn->prepare($query3);
    $stmtpost->execute([$_POST['title'], $_POST['category'], $_POST['body']]);
  
  }
  catch(Exception $e){
    echo $e->getMessage();
  }

}

if(isset($_GET['id'])){
  
  $query = 'SELECT * FROM post WHERE id=?';
  $category_query = 'SELECT * FROM category';
  $category_stmt = $conn->prepare($category_query);
  $category_stmt->execute();
  $category_rows = $category_stmt->fetchAll(PDO::FETCH_OBJ);
  
  $stmt = $conn->prepare($query);
  $stmt->execute([$_GET['id']]);
  $row = $stmt->fetch(PDO::FETCH_OBJ);

}

if(isset($_GET)){
  
  
  $category_query = 'SELECT * FROM category';
  $category_stmt = $conn->prepare($category_query);
  $category_stmt->execute();
  $category_rows = $category_stmt->fetchAll(PDO::FETCH_OBJ);

}

?>
<?php include_once('./partials/head.php');?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('./partials/header.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    <?php include_once('./partials/side_bar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        
    
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description">
                      Basic form layout
                    </p>
                    <form class="forms-sample" method="post">
                    <input type="hidden" class="form-control" name="id" id="exampleInputUsername1"   value="<?= $row->id?>">
                      <div class="form-group">
                        <label for="exampleInputUsername1">title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?= $row->title?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Categories</label>
                          <select class="form-control" id="exampleSelectGender" name="category">
                            <?php for ($i=0; $i < count($category_rows) ; $i++) {  ?>
                              <option <?php if($category_rows[$i]->id == $row->category_id){echo 'selected';}?> <?php echo 'value="'.$category_rows[$i]->id.'"'; ?>  > <?= $category_rows[$i]->name?> </option>
                            <?php }?>
                            
                            
                          </select>
                        </div>
                      <div class="form-group">
                        <label for="exampleTextarea1" >Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="body"><?= $row->body;?></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('./partials/footer.php') ?>
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
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

