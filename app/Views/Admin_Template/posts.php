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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">
      <style>
        .category-thumbnail {
        vertical-align: middle;
        margin-right: 5px;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        object-fit: cover;
        }
      </style>

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
                            
                        <h1 class="page-header">Posts (<?= $totalCount?>)</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="flash-message"></div>

            <div class="row">
                <div class="col-md-4">
                <form id="srcForm" action="" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="search" value="" style="width: 60%;" />

                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" title="Search"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <br/>
                </div>
            </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <?php foreach ($data as $value): ?>
                                    <tr>
                                        <td class="col-md-2">
                                            <a href="<?php echo base_url('edit_posts/' . $value['id']); ?>" title="Edit this post">
                                                <img src="<?php echo base_url('uploads/' . $value['photos']); ?>" class="thumbnail" width="200px" />
                                            </a>
                                        </td>
                                        <td class="col-md-10">
                                        <a href="<?= base_url('edit_categories/'.$value['category_into'][0]->id) ?>" class="category-label" title="View this category">
                                            <img src="<?= base_url('catphotos/'. $value['category_into'][0]->photos) ?>" class="category-thumbnail" width="50px">
                                            <strong><?= $value['category_into'][0]->name ?></strong></a>
                                            <a href="<?php echo base_url('edit_posts/' . $value['id']); ?>" title="Edit this post"><h3><?php echo $value['title']; ?></h3></a>
                                            <p><?php echo $value['content']; ?></p>
                                            <hr class="text-muted" />
                                            <small class="text-muted">
                                            Tags:
                                            <a href="<?php echo base_url('edit_tags/'.$value['tag_into'][0]->id);?>" class="tag" title="View posts with this tag"><?php echo'#'.$value['tag_into'][0]->name; ?></a>
                                            <br />
                                            <?php echo $value['type']; ?> &middot; Admin &middot; <span title="Aug 14, 2017 9:35 pm">1 minuts ago</span>
                                            &middot; 2 views
                                            </small>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if ($pager) : ?>
                        <div id ="pagination" class="pagination">
                        <?= $pager->links() ?>
                        </div>
                    <?php endif; ?>
     </div>
       
<!-- 
            <ul class="pagination" role="navigation">
                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>

                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="https://blog-demo.yumefave.com/admin/posts?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="https://blog-demo.yumefave.com/admin/posts?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="https://blog-demo.yumefave.com/admin/posts?page=4">4</a></li>

                <li class="page-item">
                    <a class="page-link" href="https://blog-demo.yumefave.com/admin/posts?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
            </ul> -->

            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url('create_post');?>" class="btn btn-info" title="Add a new blog post / news article"><i class="fa fa-plus"></i> Add new post</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/');?>js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/');?>assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url('assets/');?>assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>


        <script>
        $(document).ready(function() {
            $('#srcform').submit(function(event) {
                event.preventDefault();

                var searchValue = $(this).serialize();
                if(searchValue != null){
                    $.ajax({
                        url: '/search',
                        type: 'GET',
                        data: searchValue,
                        success:function(response){
                            if(response){
                               
                            }
                        },
                       
                    })
                }
            });
        });
    </script>

        
    </body>
</html>
