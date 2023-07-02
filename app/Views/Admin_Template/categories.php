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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h3 class="page-header">Categories (<?= $totalCountParents ?>)</h3>
                        </div>

    <!-- <div class="row">
        <div class="col-md-12">
                        <div class="flash-message">
                                                        </div>

            <div class="row">
                <div class="col-md-4">
                    <form action="https://blog-demo.yumefave.com/admin/categories" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="search" value="" style="width: 100%;" />

                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" title="Search"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

                    <br />
                </div> -->
                <!-- <div class="col-md-4 col-md-offset-4">
                    <div class="dropdown text-right">
                        <a id="sort" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn btn-default">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="sort">
                            <li class="active">
                                <a href="https://blog-demo.yumefave.com/admin/categories?order=name&amp;sort=asc" tabindex="-1" title="Sort by Name - Ascending">Name - A to Z</a>
                            </li>
                            <li>
                                <a href="https://blog-demo.yumefave.com/admin/categories?order=name&amp;sort=desc" tabindex="-1" title="Sort by Name - Descending">Name - Z to A</a>
                            </li>
                            <li>
                                <a href="https://blog-demo.yumefave.com/admin/categories?order=posts&amp;sort=asc" tabindex="-1" title="Sort by Posts - Smallest first">Posts - Low to High</a>
                            </li>
                            <li>
                                <a href="https://blog-demo.yumefave.com/admin/categories?order=posts&amp;sort=desc" tabindex="-1" title="Sort by Posts - Largest first">Posts - High to Low</a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
<div class="table-responsive">
  <table class="table table-striped">
    <tbody>


    <?php foreach ($data as $value): ?>
    <tr>
        <td class="col-md-12">
            <i class="fa fa-square" style="color: #d3d323;"></i>
            &nbsp;
            <a href="<?php echo base_url('edit_categories/' . $value['id']); ?>" title="View this category">
                <strong><?php echo $value['name']; ?></strong>
            </a>
            <?php
            $postCount = 0; 
            foreach ($data2 as $row) {
                if ($row->category == $value['id']) {
                    $postCount = $row->count;
                    break;
                }
            }
            ?>
            <span class="text-muted">Posts (<?= $postCount ?>)</span>
            <br>

            <?php foreach ($data1 as $subcategory): ?>
                    <?php if ($subcategory->parents == $value['id']): ?>
                        <i class="fa fa-angle-right" style="margin-left: 10px;"></i>
                        &nbsp;
                        <a href="<?php echo base_url('edit_categories/' . $subcategory->id); ?>" title="View this subcategory">
                            <strong><?php echo $subcategory->name; ?></strong>
                        </a>
                        <br>
                    <?php endif; ?>
                <?php endforeach; ?>
                
        </td>
    </tr>
<?php endforeach; ?>
            

                
                
     </tbody>
 </table>
</div>

            
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url('add_categories');?>" class="btn btn-info"><i class="fa fa-plus"></i> Add new category</a>
                </div>
            </div>
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
    </body>
</html>
