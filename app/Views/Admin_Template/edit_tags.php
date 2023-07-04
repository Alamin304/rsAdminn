<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/');?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <li><a class="nav-link" href="<?php echo base_url('categories');?>" title="Manage Categories"><i class="fa fa-folder-open"></i> Categories</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('posts');?>" title="Manage Posts"><i class="fa fa-pencil"></i> Posts</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('tags');?>" title="Manage Tags"><i class="fa fa-tags"></i> Tags</a></li>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
      <div id="layoutSidenav_content">
      <main>
         <div class="container-fluid">
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <h1 class="page-header">Edit Tags</h1>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">3D</h1>
            <div class="row">
               <div class="col-md-5">
                  <div class="flash-message">
                  </div>
                  <?php foreach ($data as $value): ?>
                  <form method="post" id="tagupdateform" action="" class="form-horizontal" enctype="multipart/form-data" role="form">
                     <input type="hidden" name="_token" value="">
                     <input type="hidden" name="_method" value="PUT">
                     <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                           <input type="text" id="name" class="form-control" name="name" autocomplete="off" value="<?= $value['name']?>" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="uri" class="col-md-4 control-label">URI <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                           <input type="text" id="uri" class="form-control" name="uri" autocomplete="off" value="<?= $value['URL']?>" />
                        </div>
                     </div>

                <div>
                    <label for="" class="col-md-4 control-label">Check box</label>
                    <div class="col-md-6">
                        <input type="hidden" name="checkbox" value="1">
                        <input type="checkbox" id="checkbox" name="checkbox" value="1" <?php echo $value['future'] == 1 ? 'checked' : ''; ?>>
                    </div>
                </div>
                
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                           &nbsp;&nbsp;&nbsp;<a href="https://blog-demo.yumefave.com/admin/tags" class="text-muted">Cancel</a>
                           <a href="#" class="btn btn-danger pull-right" onclick="event.preventDefault(); var r = confirm('Are you sure you would like to remove this tag?'); if (r == true) { document.getElementById('tag-remove-form').submit(); }"><i class="fa fa-times"></i> Remove</a>
                        </div>
                     </div>
                  </form>
                  <?php endforeach; ?>
                  <form id="tag-remove-form" action="https://blog-demo.yumefave.com/admin/tags/27" method="POST" class="hidden">
                     <input type="hidden" name="_method" value="DELETE">
                     <input type="hidden" name="_token" value="YCE9guiJrStubuy7918LRylUj9NXwrEbmDNYBLc8">
                  </form>
               </div>

               <?php foreach($data1 as $value1){ ?>
               <div class="col-md-7">
                  <h3>Posts with this tag (1)</h3>
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <tbody>
                           <tr>
                              <td class="col-md-2">
                                 <a href="https://blog-demo.yumefave.com/admin/posts/11" class="soundcloud">
                                 <img src="<?php echo base_url('uploads/' .$value1->photos); ?>" class="thumbnail" width="200px" />
                                 </a>
                              </td>
                              <td class="col-md-10">
                                 <a href="https://blog-demo.yumefave.com/admin/posts/12" title="Edit this post">
                                    <h3><?php echo $value1->title; ?></h3>
                                 </a>
                                 <p><?php echo $value1->content; ?><br></p>
                                 <hr class="text-muted" />
                                 <small class="text-muted">
                                 <?php echo $value1->type; ?>
                                 &middot; Admin &middot; <span title="Aug 04, 2017 7:52 am">5 years ago</span>
                                 </small>
                                 <a href="https://blog-demo.yumefave.com/admin/posts/12" class="btn btn-info btn-xs pull-right" title="Edit this post"><i class="fa fa-pencil"></i> Edit</a>
                              </td>
                           </tr>
                           <?php }    
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               </div>
      </div>
      </main>
    
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="<?php echo base_url('assets/');?>js/scripts.js"></script>


      <script>
                    $(document).ready(function() {
                    $('#tagupdateform').submit(function(e) {e.preventDefault();
                    // var nameErr = $('#nameErr');
                    // var uriErr = $('#uriErr');
                    // var checkboxErr = $('#checkboxErr');

                  $.ajax({
                     url: "<?php echo base_url('update_tags/').$value['id']?>",
                     type: "POST",
                     data: $('#tagupdateform').serialize(),
                     dataType: "json",
                     success: function(response)
                      {
                    //  nameErr.text(response.name ? response.name.message : '');
                    //  uriErr.text(response.uri ? response.uri.message : '');
                    //  checkboxErr.text(response.checkbox ? response.checkbox.message : '');

                     if (response.success) {
                     alert(response.message);
                     
                               }
                      }
                    });
                 });
             });
            </script>


      
            <script> 
                    $('#name').keyup(function(){

            var abc = $(this).val();
            console.log(abc)
                        $('#uri').val(abc);
                        // $('#uriview').html(abc);
            });
            </script>

      
   </body>
</html>