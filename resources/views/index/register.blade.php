<!DOCTYPE html>
<html>
<head>

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>HotFire - 熱火交友</title>
<meta name="keywords" content="Dating Website" />
<meta name="description" content="HotFire - Bring your heart here!">
<meta name="author" content="BaJin">

<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link id="googleFonts"
    href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CRoboto+Slab:300,400,700&display=swap"
    rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="vendor/animate/animate.compat.css">
<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

<!-- Theme CSS -->
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/theme-elements.css">
<!-- <link rel="stylesheet" href="css/theme-blog.css">
<link rel="stylesheet" href="css/theme-shop.css">-->

<!-- Demo CSS -->
<link rel="stylesheet" href="css/demos/demo-insurance.css">

<!-- Skin CSS -->
<link id="skinCSS" rel="stylesheet" href="css/skins/skin-insurance.css">

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Head Libs -->
<script src="vendor/modernizr/modernizr.min.js"></script>
</head>

<body>
<div class="body">
<header id="header" class="header-effect-shrink"
      data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
  <div class="header-body header-body-bottom-border border-top-0">
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column">
          <div class="header-row">
            <div class="header-logo m-auto"> <a href="index.html"> <img alt="Porto" width="100" height="48"
                      data-sticky-width="82" data-sticky-height="40" src="img/logo-default-slim.png"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div role="main" class="main"> 
  
  <!-- section 2 end -->
<form action="regista" method="post">
  @csrf
  <div class="container py-4 mb-3 counters with-borders">
    <div class="counter counter-primary">
      <h2 class="font-weight-bold text-5 mb-0">註冊</h2>
      <form action="/" id="frmSignUp" method="post">
        <div class="row justify-content-center">
          <div class="col">
            <div class="form-row">
              <div class="form-group col text-left">
                <label class="text-color-dark text-3">姓 <span class="text-color-danger">*</span></label>
                <input type="text" name="firstname" value="" class="form-control form-control-lg text-4" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <label class="text-color-dark text-3 text-left">名 <span class="text-color-danger">*</span></label>
                <input type="text" name="name" value="" class="form-control form-control-lg text-4" required>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <label class="text-color-dark text-3 text-left">名稱 <span class="text-color-danger">*</span></label>
                <input type="text" name="gname" value="" class="form-control form-control-lg text-4" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <label class="text-color-dark text-3 text-left">手機 <span class="text-color-danger">*</span></label>
                <input type="text" name="cellphone" value="" class="form-control form-control-lg text-4" required>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <label class="text-color-dark text-3 text-left">電子郵件 <span class="text-color-danger">*</span></label>
                <input type="text" name="mail" value="" class="form-control form-control-lg text-4" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <div>
                  <label class="text-color-dark text-3 text-left">性別 <span class="text-color-danger">*</span></label>
                </div>
                <div class="text-left">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                      value="man">
                    <label class="form-check-label text-3" for="inlineRadio1">男</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                      value="woman">
                    <label class="form-check-label text-3" for="inlineRadio2">女</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <label class="text-color-dark text-3 text-left">出生日期 <span class="text-color-danger">*</span></label>
                <input type="text" name="birthday" value="" class="form-control form-control-lg text-4" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-row">
              <div class="form-group col">
                <div class="mb-2">
                  <label class="text-color-dark text-3 text-left">密碼 <span class="text-color-danger">*</span></label>
                  <input type="text" name="pwd" value="" class="form-control form-control-lg text-4" required>
                </div>
                <div>
                  <label class="text-color-dark text-3 text-left">重填密碼 <span class="text-color-danger">*</span></label>
                  <input type="text" value="" class="form-control form-control-lg text-4" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col">
            <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3 mt-5 mb-4" data-loading-text="Loading...">註冊</button>
</form>
            <a href="#" class="btn btn-primary-scale-3 btn-block text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3 hotfire_vi_pink_bg text-white" data-loading-text="Loading...">
                <i class="fab fa-facebook text-5 mr-2 text-white"></i> Login With Facebook</a> 
            <a href="#" class="btn btn-primary-scale-3 btn-block text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3 hotfire_vi_pink_bg color_white text-white" data-loading-text="Loading...">
                  <i class="fab fa-google text-5 mr-2 text-white"></i> Login With Google</a> 
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- main end --> 

<!-- Vendor --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/jquery.appear/jquery.appear.min.js"></script> 
<script src="vendor/jquery.easing/jquery.easing.min.js"></script> 
<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script> 
<script src="vendor/popper/umd/popper.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="vendor/jquery.validation/jquery.validate.min.js"></script> 
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script> 
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script> 
<script src="vendor/lazysizes/lazysizes.min.js"></script> 
<script src="vendor/isotope/jquery.isotope.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script src="vendor/vide/jquery.vide.min.js"></script> 
<script src="vendor/vivus/vivus.min.js"></script> 

<!-- Theme Base, Components and Settings --> 
<script src="js/theme.js"></script> 

<!-- Current Page Vendor and Views --> 
<script src="js/views/view.contact.js"></script> 

<!-- Theme Custom --> 
<script src="js/custom.js"></script> 

<!-- Theme Initialization Files --> 
<script src="js/theme.init.js"></script> 

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

</body>
</html>