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
      <div class="container">
   <div class="blog-header">
      <h1 class="blog-title">Blog</h1>
      <p class="lead blog-description"> Blog / News Portal</p>
   </div>
   <div class="row">
      <div class="col-sm-8 blog-main">

            <?php foreach ($data as $value): ?>  
               <?php foreach($data1 as $value1): ?>
                  <?php foreach($data2 as $value2): ?>
                        <!-- /.blog-post -->
                        <div class="blog-post">
                           <a href="<?php echo base_url('edit_posts/' . $value['id']); ?>" title="Edit this post">
                              <figure>
                                    <img src="<?php echo base_url('uploads/' . $value['photos']); ?>" class="thumbnail" width="200px" />
                              </figure>
                           </a>
                           <a href="<?php echo base_url('edit_posts/' . $value['id']); ?>" class="blog-post-title" title="View this blog post">
                              <h3><?php echo $value['title']; ?></h3>
                           </a>
                           <p class="blog-post-meta">August 15, 2017 by Admin</p>
                           <p class="blog-post-meta">
                              <i class="fa fa-tags"></i> Tags:
                              <a href="<?php echo base_url('edit_tags/' . $value2->id); ?>" class="tag" title="View posts with this tag"><?php echo '#' . $value2->name; ?></a>
                           </p>
                           <?php echo $value['content']; ?>
                           <p>
                              <a href="<?php echo base_url('readmore_content/' . $value['id']); ?>" title="View this blog post"><small>read more &raquo;</small></a>
                           </p>
                        </div>
                  <?php endforeach; ?>
               <?php endforeach; ?>
            <?php endforeach; ?>

         <?php if ($pager) : ?>
                <div id ="pagination" class="pagination">
                 <?= $pager->links() ?>
                </div>
            <?php endif; ?>

         <nav>
            <!-- Add navigation elements here -->
         </nav>
      </div>
   

            <!-- /.blog-main -->
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
               <div class="sidebar-module sidebar-module-inset">
                  <h4>About</h4>
                  <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
               </div>
               <div class="sidebar-module">
                  <h4>Archives</h4>
                  <ol class="list-unstyled">
                     <li><a href="#">July 2017</a></li>
                     <li><a href="#">June 2017</a></li>
                     <li><a href="#">May 2017</a></li>
                     <li><a href="#">April 2017</a></li>
                     <li><a href="#">March 2017</a></li>
                     <li><a href="#">February 2017</a></li>
                     <li><a href="#">January 2017</a></li>
                     <li><a href="#">December 2016</a></li>
                     <li><a href="#">November 2016</a></li>
                     <li><a href="#">October 2016</a></li>
                     <li><a href="#">September 2016</a></li>
                     <li><a href="#">August 2016</a></li>
                  </ol>
               </div>
            </div>
            <!-- /.blog-sidebar -->
         </div>
         <!-- /.row -->
      </div>
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
<!-- 
        <script>
            $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            
            $.ajax({
               url: url,
               type: 'GET',
               dataType: 'json',
               success: function(response) {
                  $('#pagination').html(response.pagination);
                  $('#data').html(response.data);
               },
              
            });
            });
         </script> -->

   </body>
</html>