 <!DOCTYPE HTML>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Insane - Free Yii Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">
 
    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
        <![endif]-->
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JQuery -->
    
    </head>
    <body>
    <!--******************** NAVBAR ********************-->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="<?php echo Yii::app()->baseUrl; ?>">Insane!</a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              
			 	
	<ul id="menu-main" class="nav">
                <li><a title="portfolio" href="<?php echo Yii::app()->baseUrl; ?>">Home</a></li>
                <li><a title="services" href="<?php echo Yii::app()->baseUrl; ?>/index.php/site/page?view=about">About</a></li>
                <li><a title="news" href="<?php echo Yii::app()->baseUrl; ?>/index.php/site/contact">Contact</a></li>
                <li><a title="team" href="<?php echo Yii::app()->baseUrl; ?>/index.php/site/login">Login</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper --><!-- ******************** HeaderWrap ********************--><!--******************** Feature ********************--><!--******************** Portfolio Section ********************--><!--******************** Services Section ********************--><!--******************** Testimonials Section ********************--><!--******************** News Section ********************--><!--******************** Team Section ********************-->
    <section id="team" class="single-page scrollblock">
      <div class="container">
    <div class="featurette" style="text-align:left"> <?php echo $content; ?>
        </div>

      </div>

    </section>
    <!--******************** Contact Section ********************-->
    <section id="contact" class="single-page scrollblock">
      <!-- /.container -->
</section>
    
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; 2013 Website Name. All rights reserved.</small>        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
    
    
    </body>
    </html>

