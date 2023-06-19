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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="row">
        <div class="col-md-12">
                        <div class="flash-message">
                                                        </div>

            <div class="row">
                <div class="col-md-8">
                    <h3>Latest Posts</h3>

                                            <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/37" class="soundcloud">
                                                                                                                                                                                                                                        <img src="http://i.yai.bz/Assets/70/082/l_p1011008270.jpg" class="thumbnail" width="200px" />
                                                                                                                                                                                                                        </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/37" title="Edit this post"><h3>Proud Of You - Fiona Fung</h3></a>

                                                                                            Love in your eyesSitting silent by my sideGoing on Holding handWalking through the nightsHold me up Hold me tightLift me up to touch the skyTeaching me to love with heartHelping me open my mindI can f...
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    Blog Post
                                                
                                                &middot; Admin &middot; <span title="Aug 15, 2017 7:34 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/36" class="vimeo">
                                                                                                                                                                                                                                        <img src="https://i.vimeocdn.com/video/204509280_400x225.jpg" class="thumbnail" width="200px" />
                                                                                                                                                                                                                        </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/36" title="Edit this post"><h3>The Water</h3></a>

                                                                                            This was filmed during August 2011. This is my interpretation of the fjord landscape in western Norway. Having spent countless days here, I really enjoy even the smallest parts of this landscape. Like...
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    Blog Post
                                                
                                                &middot; Admin &middot; <span title="Aug 15, 2017 7:25 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/35" class="youtube">
                                                                                                            <img src="https://i.ytimg.com/vi/8L-lGV7UVFs/hqdefault.jpg" class="thumbnail" width="200px" />
                                                                                                    </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/35" title="Edit this post"><h3>Amazing future travel technology | future transportation</h3></a>

                                                                                            
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    Blog Post
                                                
                                                &middot; Admin &middot; <span title="Aug 15, 2017 7:14 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/34">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/34" title="Edit this post"><h3>The ABC&#039;S of Bitcoin and Everything You Need To Know About &quot;Forks&quot;</h3></a>

                                                                                            99% of Cryptocurrencies are total scams. And, yes, Cryptocurrencies are in a bubble.BUT…the opportunity is NEVER going away and generational wealth will be made. So you have to know the basics, why th...
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    Blog Post
                                                
                                                &middot; Admin &middot; <span title="Aug 15, 2017 7:00 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/33">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/33" title="Edit this post"><h3>Crossing the road in the world of autonomous cars</h3></a>

                                                                                            <p>VR prototyping for communicating autonomous vehicle intent to pedestrians.<br></p>
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    Blog Post
                                                
                                                &middot; Admin &middot; <span title="Aug 15, 2017 6:57 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/32">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/32" title="Edit this post"><h3>Smart Home 2.0</h3></a>

                                                                                            <p>How to develop smart home solutions that resonate with buyers<br></p>
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    Blog Post
                                                
                                                &middot; Admin &middot; <span title="Aug 15, 2017 6:43 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/31">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/31" title="Edit this post"><h3>Tesla is developing self-driving tech for the semi-truck it&#039;s unveiling in September</h3></a>

                                                                                            SAN FRANCISCO (Reuters) - Tesla is developing a long-haul, electric semi-truck that can drive itself and move in &quot;platoons&quot; that automatically follow a lead vehicle, and is getting closer to testing a...
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    News Article
                                                
                                                &middot; Admin &middot; <span title="Aug 14, 2017 10:01 pm">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/30">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/30" title="Edit this post"><h3>Bitcoin Streaks To $4,300 Mark, Continuing Meteoric Rise</h3></a>

                                                                                            <p>Bitcoin's price has risen sharply since earlier this month, when a split took place that created "bitcoin classic" and "bitcoin cash."<br></p>
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    News Article
                                                
                                                &middot; Admin &middot; <span title="Aug 14, 2017 9:49 pm">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/29">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/29" title="Edit this post"><h3>Goldman Sachs says bitcoin may rise about $500 more, before losing half its value</h3></a>

                                                                                            <p>Goldman Sachs' chart analyst Sheba Jafari said in a Sunday report that bitcoin could reach $4,827, about $500 more than Monday's record high above $4,300.</p><p>Once bitcoin hits that level, Jafari estimates it could drop as far as $2,221.</p><p>That said, bitcoin will need to fall under $2,935 "to signal that a top is already in place," the report said.</p>
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    News Article
                                                
                                                &middot; Admin &middot; <span title="Aug 14, 2017 9:35 pm">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td class="col-md-2">
                                                                                            <a href="https://blog-demo.yumefave.com/admin/posts/28">
                                                    <img src="https://placehold.it/200x200" class="thumbnail" width="200px" />
                                                </a>
                                                                                    </td>
                                        <td class="col-md-10">
                                            <a href="https://blog-demo.yumefave.com/admin/posts/28" title="Edit this post"><h3>Orders for Bitcoin Cash Are &#039;Exploding&#039;</h3></a>

                                                                                            Sebastian Quinn-Watson has had more than 12 cups of coffee since he woke up around 24 hours ago.Quinn-Watson is a venture partner for a bitcoin exchange operator based in Australia. As such, he has ha...
                                            
                                            <hr class="text-muted" />

                                            <small class="text-muted">
                                                                                                    News Article
                                                
                                                &middot; Admin &middot; <span title="Aug 14, 2017 8:12 am">5 years ago</span>
                                            </small>
                                        </td>
                                    </tr>
                                                                </tbody>
                            </table>
                        </div>
                                    </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Categories</strong>

                            <a href="https://blog-demo.yumefave.com/admin/categories" title="View all categories"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="panel-body">
                            Total: 6
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Posts</strong>

                            <a href="https://blog-demo.yumefave.com/admin/posts" title="View all posts"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="panel-body">
                            Blog: 6<br />
                            News: 31<br />
                            Total: 37
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Tags</strong>

                            <a href="https://blog-demo.yumefave.com/admin/tags" title="View all tags"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="panel-body">
                            Total: 41<br />
                            Posts: 70<br />
                            Views: 322
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Groups</strong>

                            <a href="https://blog-demo.yumefave.com/admin/groups" title="View all groups"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="panel-body">
                            Total: 0
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Users</strong>

                            <a href="https://blog-demo.yumefave.com/admin/users" title="View all users"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="panel-body">
                            Total: 1
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
