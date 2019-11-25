
<html>

<head>
   <title>Job Portal System</title>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	
	
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
	
	<link href="b/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Vendor CSS-->
    <link href="b/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="b/css/main.css" rel="stylesheet" media="all">
	
  
	 
	
</head>



<body>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
  
  <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="homepage.php" class="text-black h2 mb-0"><img src="jobplanet.png" height="70px"></img></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="homepage.php">Home</a></li>
                <li class="active"><a href="admin_login.php">Admin</a></li>
                <li class="has-children">
                  <a href="category.html">Employee</a>
                  <ul class="dropdown">
                    <li><a href="emp_login.php">Login</a></li>
                    <li><a href="cus_su.php">Signup</a></li>                 
                  </ul>
                </li>
				<li class="has-children">
                  <a href="category.html">Company</a>
                  <ul class="dropdown">
                    <li><a href="com_login.php">Login</a></li>
                    <li><a href="com_su.php">Signup</a></li>                 
                  </ul>
                </li>
				<li><a href="aboutus.php">About</a></li>
				</ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
  
   </div>
   
   
   <div class="page-wrapper bg-gra-02 p-b-100 font-poppins" style="padding-top:80px;" >
		
		<div class="wrapper " style="max-width:480px">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Company Login</h2>
                    <form method="POST" action="comLogin1.php">
                        <div class="row row-space ">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Email</label>
									<input  class="input--style-4" type="text" placeholder="email" name="email" required>
                                </div>
                            </div>
							
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4"  type="password" placeholder="Password" name="password"  required>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Login</button>
                        </div>
                    </form>
					<div  align="center" ><br>
      <p  >If You Are New Then <a href="com_su.php" style="font-weight:bold;">Sign UP</a> First</p>
    </div>
                </div>
            </div>
        </div>
		
    </div>
	
	
	 <script src="b/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="b/vendor/select2/select2.min.js"></script>
    <script src="b/vendor/datepicker/moment.min.js"></script>
    <script src="b/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="b/js/global.js"></script>
  
   
</body>

</html>
