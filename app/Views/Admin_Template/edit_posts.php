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
                <div class="container-fluid">
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Edit post</h1>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   
   <div class="row">
      <div class="col-md-12">
         <div class="flash-message">
         </div>
         <?php foreach ($data as $value): ?>
         <form method="post" id="posts-update-form" action="<?php echo base_url('update_posts/').$value['id']?> " class="form-horizontal" enctype="multipart/form-data" role="form">
            <input type="hidden" name="_token" value=" ">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
               <label for="title" class="col-md-3 control-label">Title <span class="text-danger">*</span></label>
               <div class="col-md-7">
                  <input id="title" type="text" class="form-control" name="title" value="<?= $value['title']?>" required />
               </div>
            </div>
            <div class="form-group">
               <label for="uri" class="col-md-3 control-label">URI <span class="text-danger">*</span></label>
               <div class="col-md-7">
                  <input id="uri" type="text" class="form-control" name="uri" value="<?= $value['URI']?>" required />
               </div>
            </div>
            <div class="form-group">
               <label for="type" class="col-md-3 control-label">Type <span class="text-danger">*</span></label>
               <div class="col-md-7">
                  <div class="radio">
                     <label>
                     <input type="radio" id="type" name="type" value="<?= $value['type']?>" checked />
                     Blog
                     </label>
                  </div>
                  <div class="radio">
                     <label>
                     <input type="radio" id="type" name="type" value="<?= $value['type']?>" />
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
               <!-- <textarea name="content" id="summernote" class="form-control" rows="5"></textarea> -->
               <textarea id="summernote" class="form-control" name="content" rows="5"><?= $value['content'] ?></textarea>
               <!-- <textarea id="content" class="form-control summernote" name="content" rows="5">&lt;p&gt;Love in your eyes&lt;/p&gt;&lt;p&gt;Sitting silent by my side&lt;/p&gt;&lt;p&gt;Going on Holding hand&lt;/p&gt;&lt;p&gt;Walking through the nights&lt;/p&gt;&lt;p&gt;Hold me up Hold me tight&lt;/p&gt;&lt;p&gt;Lift me up to touch the sky&lt;/p&gt;&lt;p&gt;Teaching me to love with heart&lt;/p&gt;&lt;p&gt;Helping me open my mind&lt;/p&gt;&lt;p&gt;I can fly&lt;/p&gt;&lt;p&gt;I&#039;m proud that I can fly&lt;/p&gt;&lt;p&gt;To give the best of mine&lt;/p&gt;&lt;p&gt;Till the end of the time&lt;/p&gt;&lt;p&gt;Believe me I can fly&lt;/p&gt;&lt;p&gt;I&#039;m proud that I can fly&lt;/p&gt;&lt;p&gt;To give the best of mine&lt;/p&gt;&lt;p&gt;The heaven in the sky&lt;/p&gt;&lt;p&gt;Stars in the sky&lt;/p&gt;&lt;p&gt;Wishing once upon a time&lt;/p&gt;&lt;p&gt;Give me love Make me smile&lt;/p&gt;&lt;p&gt;Till the end of life&lt;/p&gt;&lt;p&gt;Hold me up Hold me tight&lt;/p&gt;&lt;p&gt;Lift me up to touch the sky&lt;/p&gt;&lt;p&gt;Teaching me to love with heart&lt;/p&gt;&lt;p&gt;Helping me open my mind&lt;/p&gt;&lt;p&gt;I can fly&lt;/p&gt;&lt;p&gt;I&#039;m proud that I can fly&lt;/p&gt;&lt;p&gt;To give the best of mine&lt;/p&gt;&lt;p&gt;Till the end of the time&lt;/p&gt;&lt;p&gt;Believe me I can fly&lt;/p&gt;&lt;p&gt;I&#039;m proud that I can fly&lt;/p&gt;&lt;p&gt;To give the best of mine&lt;/p&gt;&lt;p&gt;The heaven in the sky&lt;/p&gt;&lt;p&gt;Can&#039;t you believe that you light up my way&lt;/p&gt;&lt;p&gt;No matter how that ease my path&lt;/p&gt;&lt;p&gt;I&#039;ll never lose my faith&lt;/p&gt;&lt;p&gt;See me fly&lt;/p&gt;&lt;p&gt;I&#039;m proud to fly up high&lt;/p&gt;&lt;p&gt;Show you the best of mine&lt;/p&gt;&lt;p&gt;Till the end of the time&lt;/p&gt;&lt;p&gt;Believe me I can fly&lt;/p&gt;&lt;p&gt;I&#039;m singing in the sky&lt;/p&gt;&lt;p&gt;Show you the best of mine&lt;/p&gt;&lt;p&gt;The heaven in the sky&lt;/p&gt;&lt;p&gt;Nothing can stop me&lt;/p&gt;&lt;p&gt;Spread my wings so wide&lt;/p&gt;</textarea> -->
               </div>
            </div>
            <div class="form-group">
               <label for="media-id" class="col-md-3 control-label">Media ID</label>
               <div class="col-md-7">
                  <input id="media-id" type="text" class="form-control" name="media_id" value="<?= $value['media_id']?>" />
               </div>
            </div>
            <div class="form-group">
               <label for="media-type" class="col-md-3 control-label">Media Type</label>
               <div class="col-md-7">
                  <select id="media-type" class="form-control" name="media_type">
                     <option value="<?= $value['media_type']?>"><?= $value['media_type']?></option>
                     <option value="youtube">Youtube</option>
                     <option value="vimeo">Vimeo</option>
                     <option value="soundcloud" selected>SoundCloud</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="media-artwork" class="col-md-3 control-label">Media Artwork</label>
               <div class="col-md-7">
                  <input id="media-artwork" type="text" class="form-control" name="media_artwork" value="<?= $value['media_artwork']?>" />
               </div>
            </div>
            <div class="form-group hidden">
               <label for="category-id" class="col-md-3 control-label">Category<span class="text-danger">*</span></label>
               <div class="col-md-7">
               <select id="category" class="form-control" name="category">
               <option <?php if ($value['category']) echo "selected"; ?>>--select one--</option>
                        <?php foreach ($data2 as $value2): ?>
                            <option value="<?php echo $value2['id']; ?>"><?php echo $value2['name']; ?></option>
                        <?php endforeach; ?>
                    </select> 
               </div>
            </div>
            <div class="form-group">
               <label for="featured" class="col-md-3 control-label">Featured</label>
               <div class="col-md-7">
                  <select id="featured" class="form-control" name="featured">
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
                  <input id="source" type="text" class="form-control" name="source" value="<?= $value['source']?>" />
               </div>
            </div>
            <div class="form-group">
               <label for="source-link" class="col-md-3 control-label">Source Link</label>
               <div class="col-md-7">
                  <input id="source-link" type="text" class="form-control" name="source_link" value="<?= $value['source_link']?>" />
               </div>
            </div>
            <div class="form-group">
               <label for="views" class="col-md-3 control-label">Views</label>
               <div class="col-md-7">
                  <input id="views" type="number" class="form-control" name="views" value="1" />
               </div>
            </div>
            <div class="form-group">
               <label for="tags" class="col-md-3 control-label">Tags</label>
               <div class="col-md-7">
                  <input id="tags" type="text" class="form-control" name="tags" value="<?= $value['tags']?>" />
               </div>
            </div>
            <div class="form-group">
               <label for="photos" class="col-md-3 control-label">Photos:</label>
               <div class="col-md-7">
               <div style="display: flex;">
               <a href="<?= base_url('edit_posts/' . $value['id']) ?>">
               <img style="width:40px; height:40px;" src="<?= base_url('uploads/'. $value['photos']) ?>" alt="no images">
                  <input type="file" id="photos" name="photos" title="Upload" multiple />
               </div>
            </div>
            <div class="form-group">
               <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                  &nbsp;&nbsp;&nbsp;<a href="https://blog-demo.yumefave.com/admin/posts" class="text-muted">Cancel</a>
                  <a href="#" class="btn btn-danger pull-right" onclick="event.preventDefault(); var r = confirm('Are you sure you would like to remove this post?'); if (r == true) { document.getElementById('post-remove-form').submit(); }"><i class="fa fa-times"></i> Remove</a>
               </div>
            </div>
         </form>
         <?php endforeach; ?>
         <form id="post-remove-form" action="https://blog-demo.yumefave.com/admin/posts/37" method="POST" class="hidden">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="YCE9guiJrStubuy7918LRylUj9NXwrEbmDNYBLc8">
         </form>
      </div>
   </div>
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
