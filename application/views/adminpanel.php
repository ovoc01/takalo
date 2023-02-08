<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/style.css") ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo site_url("assets/bootstrap/images/favicon.png")?>" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        <?php include'sidebarAdmin.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"style="background:#f5f7fa;">
            efre
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel" style="background:white;">
          <div class="content-wrapper">
            <div class="col-md-12 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 style="color: black;" class="card-title">Add Category</h4>
                  <div class="add-items d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="enter new category.." name="category">
                    <button  class="add-btn-btn-primary-todo-list-add-btn">Add</button>
                  </div>
                  
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 style="color:black;" class="card-title">Messages</h4>
                     
                    </div>
                    <div class="preview-list">
                      
                      
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Users</h6>
                              <p class="text-muted text-small"></p>
                            </div>
                            <p class="text-muted">nombres d'utilisateurs</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Echanges</h6>
                              <p class="text-muted text-small"></p>
                            </div>
                            <p class="text-muted">nombres d'echanges</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <style>
        *{
            color:#ffff;
        }
    </style>
  </body>
</html>