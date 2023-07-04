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
      <title>Yumefave Laravel Blog - Blog</title>
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

      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

   </head>
   <body>
      <div class="blog-masthead">
         <div class="container">
            <nav class="blog-nav">
               <a class="blog-nav-item active" href="<?php echo base_url('userhome');?>" title="Blog">Home</a>
               <a href="https://blog-demo.yumefave.com/blog/about-us" class="blog-nav-item" title="About Us">About</a>
               <a href="https://blog-demo.yumefave.com/blog/contact-us" class="blog-nav-item" title="Contact Us">Contact</a>
            </nav>
         </div>
      </div>



    <?php foreach ($data as $value): ?>
    <div class="container blog-post-page">
   <div class="blog-header">
      <h1 class="blog-title"><?php echo $value['title']; ?></h1>
   </div>
   <div class="row">
      <div class="col-sm-8 blog-main">
      <img width="100%" height="450" scrolling="no" frameborder="no" src="<?php echo base_url('uploads/' . $value['photos']); ?>"></img>
         <p><?php echo $value['content']; ?></p>
         <p>Sitting silent by my side</p>
         <p>Going on Holding hand</p>
         <p>Walking through the nights</p>
         <p>Hold me up Hold me tight</p>
         <p>Lift me up to touch the sky</p>
         <p>Teaching me to love with heart</p>
         <p>Helping me open my mind</p>

      </div>
      <!-- /.blog-main -->
      <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
         <div class="sidebar-module sidebar-module-inset">
            <label>Author</label>
            <div class="value">Admin</div>
            <label>Source</label>
            <div class="value">
               <a href="https://soundcloud.com/nouvo206/proud-of-you-fiona-fung-nghe-nhac-mp3-hot-nhat" target="_blank"><?php echo $value['source']; ?></a>
            </div>
            <label>Posted</label>
            <div class="value" title="Aug 15, 2017 7:34 am">Aug 15, 2017</div>
         </div>
      </div>
      <!-- /.blog-sidebar -->
   </div>
   <!-- /.row -->
</div>
<?php endforeach;?>
<!-- /.container -->



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
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



   </body>
</html>