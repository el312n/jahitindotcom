<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Jahitin.com</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="<?php echo e(url('/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="<?php echo e(url('/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Redressed" />
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	    
	    <link rel="icon" href="<?php echo e(asset('jhtico2.ico')); ?>"/>

	    <!-- Theme CSS -->
	    <link rel="stylesheet" href="<?php echo e(url('/css/skills/progressbar.css')); ?>">
	    <link rel="stylesheet" href="<?php echo e(url('/css/skills/style.css')); ?>">
	    <link rel="stylesheet" href="<?php echo e(url('/css/fonticons.css')); ?>">


	    <!--For Plugins external css-->
	    
	    <link rel="stylesheet" href="<?php echo e(url('/css/teamslide.css')); ?>" />
	    <link rel="stylesheet" href="<?php echo e(url('/css/plugins.css')); ?>" />

	    <!--Theme custom css -->
	    <link rel="stylesheet" href="<?php echo e(url('/css/style.css')); ?>">

	    <!--Theme Responsive css-->
	    <link rel="stylesheet" href="<?php echo e(url('/css/responsive.css')); ?>" />
	    
	    <link rel="stylesheet" href="<?php echo e(url('/css/footer-distributed-with-address-and-phones.css')); ?>">

	    <script src="<?php echo e(url('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')); ?>"></script>
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body data-spy="scroll" data-target=".navbar-collapse">
		<header id="main_menu" class="header navbar-fixed-top">            
		    <div class="main_menu_bg">
		      <div class="container">
		        <div class="row">
		          <div class="nave_menu">
		            <nav class="navbar navbar-default" id="navmenu">
		              <div class="container-fluid">

		                <!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header">
		                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                  </button>
		                  <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="margin-left:15px">
		                      <img src="<?php echo e(asset('/img/jhtlog.png')); ?>">
		                  </a>
		                </div>
		                <!-- Collect the nav links, forms, and other content for toggling -->
		                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                  <ul class="nav navbar-nav navbar-right">
		                    <!-- <li><a href="#">Store</a></li>-->
		                    <!--<li><a href="<?php echo e(url('/PO')); ?>">Purchase Order</a></li>-->
		                    <?php if(Auth::guest()): ?>
		                      <li>
		                        <a data-toggle="modal" href="#" data-target="#login">Log In</a>
		                        <!--<a href="<?php echo e(url('/login')); ?>"><i class="glyphicon glyphicon-lock"></i> Sign In</a>-->
		                      </li>
		                      <li><a data-toggle="modal" href="#" data-target="#register">Sign Up</a></li>

		                      <!--<li><a class="btn-warning outline"  href="/registerpenjahit" style="color:#eb8f34">Penjahit?</a></li>
		                      <li>
		                        <a href="<?php echo e(url('/register')); ?>"><i class="glyphicon glyphicon-user"></i> Sign Up</a>
		                      </li>-->
		                    <?php elseif(Auth::user()->role_id=='1'): ?>
		                      <li><a href="<?php echo e(url('/pilihModelSendiri')); ?>">Order</a></li>
		                      <li class="dropdown">
		                        <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo e(Auth::user()->name); ?>&nbsp;<b class="caret"></b></a>
		                        <ul class="dropdown-menu">
		                          <li><a href="<?php echo e(url('/HistoryTransaksi')); ?>">History Transaksi</a></li>
		                          <li>
		                             <a href="<?php echo e(url('/cpass')); ?>">Change Password</a>
		                          </li>
		                          <li>
		                             <a href="<?php echo e(url('/logout')); ?>"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
		                          </li>

		                        </ul>
		                      </li>
		                    <?php elseif(Auth::user()->role_id=='4'): ?>
		                    	<li class="">
			                      <a href="<?php echo e(url('/controlweb')); ?>">Home</a>
			                    </li>
			                    <li class="">
			                      <a href="<?php echo e(url('/controlweb/listPenjahit')); ?>">List Penjahit</a>
			                    </li>
			                    <!--<li class="dropdown">
			                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi&nbsp;<b class="caret"></b></a>
			                      <ul class="dropdown-menu">
			                        <li>
			                          <a href="<?php echo e(url('/controlweb/Preorder')); ?>">Preorder</a>
			                        </li>
			                      </ul>
			                    </li>
			                    <li><a href="<?php echo e(url('/homeblog')); ?>">Blog</a></li>-->
			                    <li class="dropdown">
			                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Master&nbsp;<b class="caret"></b></a>
			                      <ul class="dropdown-menu">
			                        <!--<li>
			                           <a href="<?php echo e(url('/controlweb/kategoriKain')); ?>">Kategori Kain</a>
			                        </li>
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/Kain')); ?>">Kain</a>
			                        </li>
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/Ukuran')); ?>">Ukuran</a>
			                        </li>-->
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/kategoriModel')); ?>">Kategori Model</a>
			                        </li>
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/SubKategoriModel')); ?>">SubKategori Model</a>
			                        </li>
			                        <!--<li>
			                           <a href="<?php echo e(url('/controlweb/Model')); ?>">Model</a>
			                        </li>-->
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/Pembayaran')); ?>">Pembayaran</a>
			                        </li>
			                        <!--<li>
			                           <a href="<?php echo e(url('/controlweb/Biaya')); ?>">Biaya</a>
			                        </li>-->
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/KodePromo')); ?>">Kode Promo</a>
			                        </li>
			                      </ul>
			                     </li>
			                     <!--<li class="dropdown">
			                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Blog&nbsp;<b class="caret"></b></a>
			                      <ul class="dropdown-menu">
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/blog')); ?>">Insert Blog</a>
			                        </li>
			                        <li>
			                           <a href="<?php echo e(url('/controlweb/blog')); ?>">List Komentar</a>
			                        </li>
			                      </ul>
			                     </li>-->
			                      <li class="dropdown">
			                        <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo e(Auth::user()->name); ?>&nbsp;<b class="caret"></b></a>
			                        <ul class="dropdown-menu">
			                          <li>
			                             <a href="<?php echo e(url('/cpass')); ?>">Change Password</a>
			                          </li>
			                          <li>
			                             <a href="<?php echo e(url('/logout')); ?>"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
			                          </li>

			                        </ul>
			                    </li>
		                    <?php endif; ?>
		                  </ul>
		                </div>
		                

		              </div>
		             </nav>
		          </div>  
		        </div>
		      </div>
		    </div>
		  </header> <!--End of header -->

		  <div class="modal fade" id="login" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
		          <h4 class="modal-title"><center><img src="<?php echo e(asset('/img/jhtlog.png')); ?>"></center></h4>
		        </div>
		        <div class="modal-body">
		          <div class="section">
		            <div class="container">
		                <div class="row">

		                    <div class="col-md-6">
		                      <?php if(session()->has('error')): ?>
		                        <?php echo $__env->make('umum/error', ['type' => 'danger', 'message' => session('error')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		                      <?php endif; ?>
		                      <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
		                        <?php echo e(csrf_field()); ?>

		                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> col-md-12" >
		                            <label for="email" class="sr-only">Email address</label>
		                            <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="<?php echo e(old('email')); ?>">
		                            <?php if($errors->has('email')): ?>
		                                <span class="help-block">
		                                    <strong><?php echo e($errors->first('email')); ?></strong>
		                                </span>
		                            <?php endif; ?>
		                        </div>
		                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?> col-md-12">
		                            <label for="password" class="sr-only">Password</label>
		                            <input id="password" type="password" class="form-control" placeholder="Password" name="password">
		                            <?php if($errors->has('password')): ?>
		                                <span class="help-block">
		                                    <strong><?php echo e($errors->first('password')); ?></strong>
		                                </span>
		                            <?php endif; ?>
		                        </div>
		                        <div class="form-group col-md-12">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" name="remember" id="remember"> Remember Me
		                                </label>
		                                <a class="btn-link" href="<?php echo e(url('/password/email')); ?>" style="float:right">Forgot Your Password?</a>
		                            </div>
		                        </div>
		                        <div class="form-group col-md-12">
		                            <center><button type="submit" class="btn1 btn-primary">
		                                Login
		                            </button></center>
		                        </div>
		                      </form>
		                      <div class="row margin-bottom-10">
		                        <div class="col-md-6 col-sm-6 col-xs-6">
		                            <a href="redirectFB"><button  class="loginBtn loginBtn--facebook">Sign In With Facebook</button></a>
		                        </div>
		                        <div class="col-md-6 col-sm-6 col-xs-6">
		                            <a href="redirectGO"><button class="loginBtn loginBtn--google">Sign In With Google+</button></a>
		                        </div>
		                      </div>
		                  </div>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="modal-footer">
		          
		        </div>
		      </div>
		    </div>
		  </div>

		  <div class="modal fade" id="register" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
		          <h4 class="modal-title"><center><img src="<?php echo e(asset('/img/jhtlog.png')); ?>"></center></h4>
		        </div>
		        <div class="modal-body">
		          <div class="section">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-6">

		                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
		                            <?php echo e(csrf_field()); ?>

		                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?> col-md-12">
		                                <label for="name" class="sr-only">Nama Lengkap</label>
		                                <input id="name" type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="<?php echo e(old('name')); ?>">
		                                <?php if($errors->has('name')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('name')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                            <div class="form-group<?php echo e($errors->has('telepon') ? ' has-error' : ''); ?> col-md-12">
		                                <label for="telepon" class="sr-only">Telepon</label>
		                                <input id="telepon" type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo e(old('telepon')); ?>">
		                                    <?php if($errors->has('telepon')): ?>
		                                        <span class="help-block">
		                                            <strong><?php echo e($errors->first('telepon')); ?></strong>
		                                        </span>
		                                    <?php endif; ?>
		                            </div>
		                            <div class="form-group<?php echo e($errors->has('emailRe') ? ' has-error' : ''); ?> col-md-12" >
		                                <label for="emailRe" class="sr-only">Email address</label>
		                                <input id="email" type="emailRe" class="form-control" name="emailRe" placeholder="Email address" value="<?php echo e(old('emailRe')); ?>">
		                                <?php if($errors->has('emailRe')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('emailRe')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                            <div class="form-group<?php echo e($errors->has('passwordRe') ? ' has-error' : ''); ?> col-md-12">
		                                <label for="passwordRe" class="sr-only">Password</label>
		                                <input id="passwordRe" type="password" class="form-control" placeholder="Password" name="passwordRe">
		                                <?php if($errors->has('passwordRe')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('passwordRe')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                            <div class="form-group<?php echo e($errors->has('passwordRe_confirmation') ? ' has-error' : ''); ?> col-md-12">
		                                <label for="passwordRe_confirmation" class="sr-only">Confirm Password</label>
		                                <input id="passwordRe_confirmation" type="password" class="form-control" placeholder="Confirm Password" name="passwordRe_confirmation">
		                                <?php if($errors->has('passwordRe_confirmation')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('passwordRe_confirmation')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                            <div class="form-group col-md-12">
		                                <center><button type="submit" class="btn1 btn-primary">
		                                    Register
		                                </button></center>
		                            </div>
		                        </form>
		                        <div class="row margin-bottom-10">
			                        <div class="col-md-6 col-sm-6 col-xs-6">
			                            <a href="redirectFB"><button  class="loginBtn loginBtn--facebook">Sign In With Facebook</button></a>
			                        </div>
			                        <div class="col-md-6 col-sm-6 col-xs-6">
			                            <a href="redirectGO"><button class="loginBtn loginBtn--google">Sign In With Google+</button></a>
			                        </div>
			                    </div>
		                    </div>
		                </div>
		            </div>
		          </div>
		        </div>
		        <div class="modal-footer">
		          
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="content">
		  	<?php echo $__env->yieldContent('content'); ?>   
		  </div>

		<!-- Footer -->
		  <footer class="footer-distributed">
		    <div class="footer-left">
		      <img class="img-responsive" src="<?php echo e(asset('/img/jhtlog1.png')); ?>" alt="Chania" width="200px" padding="10px">
		      <p class="footer-links">
		        <a href="#">Home</a>
		        ·
		        <a href="#">Blog</a>
		        .
		        <a href="#about">About Us</a>
		        ·
		        <a href="#">How To Measure</a>
		        ·
		        <a href="#">Order</a>
		        ·
		        <a href="#">Faq</a>
		        ·
		        <a href="#">Terms and Conditions</a>
		      </p>

		      <p class="footer-company-name">Jahitin.com &copy; 2017</p>
		    </div>
		    <div class="footer-center">
		      <div>
		        <i class="fa fa-map-marker"></i>
		        <p><span>Koridor Coworking Space, Siola Lt. 3
		        <br>Jalan Tunjungan, Genteng
		        <br>Surabaya, Indonesia 60275 </span> </p>
		      </div>
		      <div>
		        <i class="fa fa-phone"></i>
		        <p>+62 81217033258</p>
		      </div>
		      <div>
		        <i class="fa fa-envelope"></i>
		        <p><a href="mailto:csjahitindotcom@jahitin.com">csjahitindotcom@jahitin.com</a></p>
		      </div>
		    </div>
		    <div class="footer-right">
		      <p class="footer-company-about">
		        <span>Supported By</span>
		        <img class="img-responsive" src="<?php echo e(asset('/img/gsd.png')); ?>" alt="Chania" width="100px">
		        <img class="img-responsive" src="<?php echo e(asset('/img/az.png')); ?>" alt="Chania" width="100px">
		      </p>
		      <div class="footer-icons">
		        <a href="#"><i class="fa fa-facebook"></i></a>
		        <a href="#"><i class="fa fa-twitter"></i></a>
		        <a href="#"><i class="fa fa-instagram"></i></a>
		        <a href="#"><i class="fa fa-youtube"></i></a>
		      </div>
		    </div>
		  </footer>
		  <!-- START SCROLL TO TOP  -->
		  <div class="scrollup">
		      <a href="#"><i class="fa fa-chevron-up"></i></a>
		  </div>
		  <!-- jQuery -->
		  <script type="text/javascript" src="<?php echo e(url('/lib/jquery-1.10.2.min.js')); ?>"></script>
		  <script src="<?php echo e(url('/js/vendor/jquery-1.11.2.min.js')); ?>"></script>
		  <script type="text/javascript" src="<?php echo e(url('/source/jquery.fancybox.pack.js?v=2.1.5')); ?>"></script>
		  <link rel="stylesheet" type="text/css" href="<?php echo e(url('source/jquery.fancybox.css?v=2.1.5')); ?>" media="screen" />

		  <!-- Bootstrap Core JavaScript -->
		  <script src="<?php echo e(url('/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

		  <!-- Plugin JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

		  <!-- Contact Form JavaScript -->
		  <script src="<?php echo e(url('/js/jquery.easypiechart.min.js')); ?>"></script>
		  <script src="<?php echo e(url('/js/jquery.mixitup.min.js')); ?>"></script>
		  <script src="<?php echo e(url('/js/jquery.easing.1.3.js')); ?>"></script>
		  <script src="<?php echo e(url('/css/skills/inview.min.js')); ?>"></script>
		  <script src="<?php echo e(url('/css/skills/progressbar.js')); ?>"></script>
		  <script src="<?php echo e(url('/css/skills/main.js')); ?>"></script>
		  <script src="<?php echo e(url('/js/plugins.js')); ?>"></script>
		  <script src="<?php echo e(url('/js/main1.js')); ?>"></script>
		  <script type="text/javascript">

		    <?php if(count($errors) > 0): ?>
		      <?php if($errors->has('password')): ?>
		        $('#login').modal('show')
		      <?php else: ?>
		        $('#register').modal('show');
		      <?php endif; ?>
		    <?php endif; ?>
		    <?php if(!empty(Session::get('error'))): ?>
		      $('#login').modal('show');
		    <?php endif; ?>
		  </script>
	</body>
</html>