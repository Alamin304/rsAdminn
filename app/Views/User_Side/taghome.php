
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Yumefave">
    <meta name="description" content="Yumefave Laravel Blog - Laravel powered Blog Portal">
    <meta name="keywords" content="laravel blog, laravel, blog, yumefave, laravel news, news, laravel cms, cms">

    <link rel="icon" href="/favicon.ico">

    <title>#water - Blog - Yumefave Laravel Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="https://blog-demo.yumefave.com/blog" title="Blog">Home</a>
            <a href="https://blog-demo.yumefave.com/blog/about-us" class="blog-nav-item" title="About Us">About</a>
            <a href="https://blog-demo.yumefave.com/blog/contact-us" class="blog-nav-item" title="Contact Us">Contact</a>
        </nav>
    </div>
</div>
<?php foreach ($data as $value): ?> 
<div class="container">

        <div class="blog-header">
            <h1 class="blog-title">Posts with tag <?php echo'#'.$value['tag_into'][0]->name; ?></h1>
        </div>

        <div class="row">

            <div class="col-sm-8 blog-main">

                                                            <div class="blog-post">
                                                            <a href="https://blog-demo.yumefave.com/blog/p/the-water-8da70643497c" class="vimeo" title="View this blog post">
                                                                            <figure>
                                                                                                                                                <img src="https://i.vimeocdn.com/video/204509280_400x225.jpg" width="200px" />
                                                                                                                                    </figure>
                                                                    </a>
                            
                            <a href="https://blog-demo.yumefave.com/blog/p/the-water-8da70643497c" class="blog-post-title" title="View this blog post">
                                <h3>The Water</h3>
                            </a>

                            <p class="blog-post-meta">August 15, 2017 by Admin</p>

                                                            <p class="blog-post-meta">
                                    <i class="fa fa-tags"></i> Tags:

                                    <a href="https://blog-demo.yumefave.com/blog/tag/water" class="tag" title="View posts with this tag"><?php echo'#'.$value['tag_into'][0]->name; ?></a>
                                </p>
                            
                            This was filmed during August 2011. This is my interpretation of the fjord landscape in western Norway. Having spent countless days here, I really enjoy even the smallest parts of this landscape. Like hidden streams or dwarfish waterfalls outside of...

                                                            <p>
                                    <a href="https://blog-demo.yumefave.com/blog/p/the-water-8da70643497c" title="View this blog post"><small>read more &raquo;</small></a>
                                </p>
                                                    </div><!-- /.blog-post -->
                    
                    <nav>
                        
                    </nav>
                
            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </div><!-- /.container -->
    <?php endforeach; ?>
<footer class="blog-footer">
    <p>&copy; Copyright 2017 Company Inc.</p>
    <p>All Rights Reserved.</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
