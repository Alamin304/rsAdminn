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
         <!-- Summernote CSS - CDN Link -->
         <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
         <!-- //Summernote CSS - CDN Link -->
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
                    <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Create Post</h1>

    <?php if (isset($successMessage)) : ?>
                <div class="alert alert-success">
                    <?= $successMessage ?>
                </div>
            <?php endif; ?>

    <div class="row">
        <div class="col-md-12">
            <div class="flash-message"></div>

           

            <form method="POST" id="posts-store-form" action="<?php echo base_url('postinsertData') ?>" class="form-horizontal" enctype="multipart/form-data" role="form">
                <input type="hidden" name="_token" value="" />

                <div class="form-group">
                    <label for="title" class="col-md-3 control-label">Title <span class="text-danger">*</span></label>

                    <div class="col-md-7">
                        <input id="title" type="text" class="form-control" name="title" value=""  />
                        <span style="color:red;"><?= validation_show_error('title') ?></span>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="uri" class="col-md-3 control-label">URI <span class="text-danger">*</span></label>

                    <div class="col-md-7">
                        <input id="uri" type="text" class="form-control" name="uri" value=""  />
                        <span style="color:red;"><?= validation_show_error('uri') ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="type" class="col-md-3 control-label">Type <span class="text-danger">*</span></label>

                    <div class="col-md-7">
                        <div class="radio">
                            <label>
                                <input type="radio" id="type" name="type" value="blog" checked />
                                Blog
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="type" name="type" value="news" />
                                News
                            </label>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label for="opening" class="col-md-3 control-label">Opening</label>

                    <div class="col-md-7">
                        <p class="form-control-static">
                            <a href="#opening-block" aria-expanded="false" aria-controls="opening-block" data-toggle="collapse">
                                Add an opening paragraph
                            </a>
                        </p>

                        <div id="opening-block" class="collapse">
                            <textarea id="opening" class="form-control summernote" name="opening" rows="5"></textarea>
                        </div>
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="content" class="col-md-3 control-label">Content</label>

                    <div class="col-md-7">
                    <textarea id="summernote" class="form-control" name="content" rows="5"></textarea>
                    <span style="color:red;"><?= validation_show_error('content') ?></span>
                        <!-- <textarea id="content" class="form-control summernote" name="content" rows="5"></textarea> -->
                    </div>
                </div>

                <div class="form-group">
                    <label for="media-id" class="col-md-3 control-label">Media ID</label>

                    <div class="col-md-7">
                        <input id="media-id" type="text" class="form-control" name="media_id" value="" />
                        <span style="color:red;"><?= validation_show_error('media_id') ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="media-type" class="col-md-3 control-label">Media Type</label>

                    <div class="col-md-7">
                        <select id="media-type" class="form-control" name="media_type">
                            <option value="">Select one</option>
                            <option value="youtube">Youtube</option>
                            <option value="vimeo">Vimeo</option>
                            <option value="soundcloud">SoundCloud</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="media-artwork" class="col-md-3 control-label">Media Artwork</label>

                    <div class="col-md-7">
                        <input id="media-artwork" type="text" class="form-control" name="media_artwork" value="" />
                    </div>
                </div>

                <div class="form-group hidden">
                    <label for="category-id" class="col-md-3 control-label">Category <span class="text-danger">*</span></label>

                    <div class="col-md-7">
                    <select id="category" class="form-control" name="category">
                        <option>--Select one--</option>
                    <?php foreach ($data as $value): ?>
                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                </div>

                <div class="form-group hidden">
                    <label for="featured" class="col-md-3 control-label">Featured</label>

                    <div class="col-md-7">
                        <select id="featured" class="form-control" name="featured" disabled>
                            <option value="">Select one</option>
                            <option value="top">Top</option>
                            <option value="medium">Medium</option>
                            <option value="low_left">Low Left</option>
                            <option value="low_right">Low Right</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="source" class="col-md-3 control-label">Source</label>

                    <div class="col-md-7">
                        <input id="source" type="text" class="form-control" name="source" value="" />
                        <span style="color:red;"><?= validation_show_error('source') ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="source-link" class="col-md-3 control-label">Source Link</label>

                    <div class="col-md-7">
                        <input id="source-link" type="text" class="form-control" name="source_link" value="" />
                        <span style="color:red;"><?= validation_show_error('source_link') ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tags" class="col-md-3 control-label">Tags</label>
                    <div class="col-md-7">
                        <input id="tags" type="text" class="form-control" name="tags" value="" />
                        <span style="color:red;"><?= validation_show_error('tags') ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="photos" class="col-md-3 control-label">Photos</label>

                    <div class="col-md-7">
                        <input type="file" id="photos" name="photos" title="Upload" multiple />
                        

                        
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" name ="submit" class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
                        &nbsp;&nbsp;&nbsp;<a href="https://blog-demo.yumefave.com/admin/posts" class="text-muted">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



                        


                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/');?>js/scripts.js"></script>

         <!-- Summernote JS - CDN Link -->
         <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
         <script>
            $(document).ready(function() {
                  // $("#your_summernote").summernote();
                  $("#summernote").summernote({
                     placeholder:"Type your Content..",
                     height:300
                  });
                  $('.dropdown-toggle').dropdown();
            });
         </script>
        
        
        
        <script> 
                            $('#title').keyup(function(){

                    var abc = $(this).val();
                    console.log(abc)
                                $('#uri').val(abc);
                                // $('#uriview').html(abc);
                    });
        </script>
    </body>
</html>
