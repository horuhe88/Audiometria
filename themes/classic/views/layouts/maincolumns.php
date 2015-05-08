<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">
       <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/app.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precom<php echo Yii::app()->theme->baseUrl;?>/posed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
  </head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">My app</a>

      <div class="nav-collapse collapse pull-right">


       
<!--         <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul> -->



        <?php 

        $home = "";
        if(Yii::app()->user->isGuest) 
          $home = "Login";
        else
          $home = "Pacientes";


        $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
            array('label'=>$home, 'url'=>array('/site/index')),
            array('label'=>'Diagnosticos', 'url'=>array('/diagnostico/admin'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>


      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

  <?php if(isset($this->breadcrumbs) and $this->breadcrumbs !== array()):?>
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
          <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
          )); ?><!-- breadcrumbs -->
          </div>
        </div>
      </div>
  <?php endif?>


  <?php echo $content;?>
  
 <footer class="footer bg-ft clearfix pd4">
    <div class="container">
        <!--footer container-->
        <div class="row-fluid">
            <div class="span3">
                <section>
                    <h4><span>Contact Us</span></h4>
                    <p>Gustalh Creative<br>
                        123456 <br>
                        Bogotá Colombia<br>
                        <strong>phone:</strong> <a href="tel:123456789" class="tele">123456789</a><br>
                        <strong>fax:</strong> 123456789<br>
                        <span class="overflow"><strong>email:</strong> <a href="mailto:email@domain.com">email@companydomain.com</a></span> </p>
                </section>
                <!--close section-->

                <section>
                    <h4><span>Follow Us</span></h4>
                    <div class="social">
                      <a href="#"><i class="icon-facebook facebook"></i></a>
                      <a href="#"><i class="icon-twitter twitter"></i></a>
                      <a href="#"><i class="icon-linkedin linkedin"></i></a>
                      <a href="#"><i class="icon-google-plus google-plus"></i></a>
                    </div>
                </section>
                <!--close section-->
            </div>
            <!-- close .span3 -->

            <!--section containing newsletter signup and recent images-->
            <div class="span5">
                <section>
                    <h4><span>Stay Updated</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius.</p>
                        <form action="#" method="post">
                    <div class="input-append append-fix custom-append row-fluid">
                      <input type="email" class="span8" placeholder="Email Address" name="email">
                            <button class="btn btn-primary">Sign Up</button>

                    </div></form>
                    <!--close input-append-->
                </section>
                <!--close section-->
            </div>
            <!-- close .span5 -->

            <!--section containing blog posts-->
            <div class="span4">
                <section>
                    <h4><span>About Us</span></h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      hola 2
                    </p>
                </section>
            </div>
            <!-- close .span4 -->
        </div>
        <!-- close .row-fluid-->
    </div>
    <!-- close footer .container-->
</footer> 


 <section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2015 Your Company Name. All rights reserved.</li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    <!--close footer-credits container-->
</section>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
