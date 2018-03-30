<?php include('includes/template_functions.php'); ?>
<?php include('includes/functions.php');
if($_POST['submit']){
	
	$email = $_POST['email'];
	$pass  = $_POST['password'];
	$sql = getLogin($email, $pass);
	if($sql['success']){
	/*echo '<pre>';
	print_r($sql);
	die;*/
	$_SESSION['customer_id'] = $sql['customer_id'];
	header('Location: my_account.php');
	}else{
		$error = $sql['error'];
	}
}
/*echo '<pre>';
	print_r($error);
	die;*/
 ?>
<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from themes.fastwp.net/cc/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2018 04:39:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php echo $lang['site_title'].' | '.$lang['home_page_title']; ?></title>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Lato:400,400italic,600" rel="stylesheet" type="text/css" />
<script src="js/modernizr.js" type="text/javascript"></script>
</head>
<body class="home blog">
<!-- insert Preloader here -->
<div id="wrap">
  <div id="background-color"></div>
  <?php include('includes/header.php'); ?>
  <div class="content-wrapper">
    <div id="content" style="background:url('images/main-bg.jpg'); height:650px;background-size: 100% 100%;">
      <div class="container">
        <!--<h1 id="logo"><a href="index.php"><img src="images/nimawat-logo-new.png" alt="" /><span>Nimawat</span></a></h1>-->
        <div id="container" class="clearfix">
          <div class="element  clearfix rectangle col1-1 home">
            <figure class="images"></figure>
          </div>
          <div class="element  clearfix rectangle col2-2 home">
            <div class="padding-wrapper">
              <div class="covering-image visible">
                <div class="covering-image visible">
                  <div class="info-box-content">
                    <div class="parent">
                      <div class="child">
                        <p class="small login">User Login</p>
						<?php if($error){ ?>
						<span id="message" class="error"><?php echo $error; ?></span>
						<?php } ?>
                        <!--<h4 class="header">Sign up for our newsletter and receive a $20 bonus code</h4>-->
                        <form class="form-part newsletter" method="post" action="" name="loginform" id="contactform" >
                          <input name="email" type="email" id="email" size="30" placeholder = "Enter your Email.." required = "required" />
                          <div class="input-wrapper clearfix">
                          <div class="clear"></div><br />
                          <input name="password" type="password" id="password" size="30" placeholder = "Enter your Password.." required = "required" />
                          <div class="input-wrapper clearfix">
                            <div class="clear"></div>
                            <input type="submit" class="login-btn" value="Submit" id="login-btn" name="submit" />
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end #container -->
      </div>
      <!-- end .container -->
    </div>
    <!-- end content -->
  </div>
  <!-- end content-wrapper -->
</div>
<!-- end wrap -->
<?php include('includes/footer.php'); ?>
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope2.min.js" type="text/javascript"></script>
<script src="js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="js/packery-mode.pkgd.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.load.js" type="text/javascript"></script>
<script src="js/main2.js" type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script src="js/input.fields.js" type="text/javascript"></script>
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.magnific-popup.min.html" type="text/javascript"></script>
</body>
<!-- Mirrored from themes.fastwp.net/cc/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2018 04:40:30 GMT -->
</html>
