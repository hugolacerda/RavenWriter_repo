<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <?= Asset::css('bootstrap.css') ?>

    <!-- Loading Flat UI -->
    <?= Asset::css('flat-ui.css') ?>

    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <?= Asset::css('web.css') ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>

      <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Raven Writters</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?= Html::anchor('browse', 'Browse Stories') ?></li>
            <li><?= Html::anchor('about', 'About Us') ?></li>
            <li><?= Html::anchor('search', 'Writter Search') ?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#myModal">
              Sign In
            </a></li>
            <li><a href="#" data-toggle="modal" data-target="#signModal">
              Sign up
            </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sign In</h4>
          </div>
          <div class="modal-body">
             <form class="form-signin" role="form">
              <input type="email" class="form-control" placeholder="Email address" required autofocus>
              <input type="password" class="form-control" placeholder="Password" required>
              <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
              </label>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Login With Facebook</button>
          </div>
        </div>
      </div>
    </div>

     <!-- SignUp Modal -->
    <div class="modal fade" id="signModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
          </div>
          <div class="modal-body">
             <form class="form-signin" role="form">
              <input type="email" class="form-control" placeholder="Email Adress" required autofocus>
              <input type="password" class="form-control" placeholder="Password" required>
               <input type="password" class="form-control" placeholder="Confirm Password" required>
          
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Join Us With Facebook</button>
          </div>
        </div>
      </div>
    </div>


   

      <?= $body ?>

      <hr>
   <div class="container">
      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <?= Asset::js('jquery-1.8.3.min.js') ?>
    <?= Asset::js('jquery-ui-1.10.3.custom.min.js') ?>
    <?= Asset::js('jquery.ui.touch-punch.min.js') ?>
    <?= Asset::js('bootstrap.min.js') ?>
    <?= Asset::js('bootstrap-select.js') ?>
    <?= Asset::js('bootstrap-switch.js') ?>
    <?= Asset::js('flatui-checkbox.js') ?>
    <?= Asset::js('flatui-radio.js') ?>
    <?= Asset::js('jquery.tagsinput.js') ?>
    <?= Asset::js('jquery.placeholder.js') ?>
  </body>
</html>
