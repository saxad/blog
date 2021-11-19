<?php
session_start();
if (!(isset($_SESSION['loggedin'])) or $_SESSION['loggedin'] == null) {
  header('Location: login.php');
  exit;
}
require_once('./../database.php');
$query = 'SELECT * from post';
$query2 = 'SELECT * from category';

$stmt = $conn->prepare($query);
$stmt->execute();

$stmt2 = $conn->prepare($query2);
$stmt2->execute();

if(isset($_GET['id'])){
  if($_GET['type'] === "category"){
    $query = 'DELETE FROM category WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$_GET['id']]);
    header('Location: dashbord.php');
  }
  if ($_GET['type'] === "post") {
    $query = 'DELETE FROM post WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$_GET['id']]);
    header('Location: dashbord.php');
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">


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
                  <p class="card-title">Articles</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Id#</th>
                              <th>Title</th>
                              <th>Body</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Updated at</th>
                              <th>Created at</th>
                              <th>Action</th>
                            </tr>
                          <tbody>
                          <?php
                          while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                          ?>
                            <tr class="odd">
                              <td class=" select-checkbox"><?= $row->id;?></td>
                              <td><?= $row->title;?></td>
                              <td class="sorting_1"><?php echo mb_strimwidth($row->body, 0, 100, "...");?></td>
                              <td><?= $row->category_id; ?></td>
                              <td><?= $row->id;?></td>
                              <td><?= $row->created_at;?></td>
                              <td><?= $row->created_at;?></td>
                              <td class=" ">
                              <a href="./dashbord.php?id=<?= $row->id;?>&type=post"><label class="badge badge-danger">delete</label></a> 
                              <a href="./write.php?id=<?= $row->id;?>"><label class="badge badge-warning">update</label></a> 
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                          </tbody>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Categories</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Id#</th>
                              <th>Name</th>
                              <th>Updated at</th>
                              <th>Created at</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          while($row = $stmt2->fetch(PDO::FETCH_OBJ)){
                          ?>
                            <tr class="odd">
                              <td class=" select-checkbox"><?= $row->id;?></td>
                              <td class="sorting_1"><?= $row->name;?></td>
                              <td><?= $row->id;?></td>
                              <td><?= $row->id;?></td>
                              <td>
                              <a href="./dashbord.php?id=<?= $row->id;?>&type=category"><label class="badge badge-danger">delete</label></a> 
                              <a href="./categories.php?id=<?= $row->id;?>"><label class="badge badge-warning">update</label></a> 
                              </td>
                   
                            </tr>
                          <?php
                          }
                          ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('./partials/footer.php'); ?>
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