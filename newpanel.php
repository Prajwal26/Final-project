<?php

    session_start();
    if(array_key_exists("email",$_COOKIE)){
        $_SESSION['email'] = $_COOKIE['email'];
    }
    if(array_key_exists("email",$_SESSION)){

    }
    else{
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en"  ng-app="appHome">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
    .col-lg-9
    {
      max-width: 100%;
    }
    .panelrow
    {
    	font-size: 20px;
    	font-style: bold;

    }
    </style>

</head>


<body class="animsition" ng-controller="home as x">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                        </li>
                        <li>
                            <a href="persontable.php">
                                <i class="fas fa-chart-bar"></i>Person details</a>
                        </li>
                        <li class="">
                            <a href="event.php">
                                <i class="fas fa-table"></i>Event details</a>
                        </li>
                        <li class="">
                            <a href="data_table.php">
                                <i class="fas fa-table"></i>Joint Table</a>
                        </li>
                        <li class="">
                            <a href="newpanel.php">
                                <i class="fas fa-table"></i>Analysis Table</a>
                        </li>
                        <li class="">
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.php?logout=1">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    	<div class="row">
                    		<div class="d-block w-100">
                    			<span class="panelrow mx-3">Slide 1.</span>
                    			<div class="d-flex">
                    			<div class="input-group mb-3 w-30 mx-3">
									  <div class="custom-file">
										    <input type="file" class="custom-file-input" id="inputGroupFile02">
											    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
										  </div>
										  <div class="input-group-append">

								  </div>
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									 <input id="target" type="text" ng-keyup="x.up(5,s1)" class="form-control" ng-model=s1  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									<input id="target" type="text" class="form-control" ng-keyup="x.up(6,s1d)" ng-model=s1d aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>

							</div>

                    		</div>
                    		<div class="d-block w-100">
                    			<span class="panelrow mx-3">Slide 2.</span>
                    			<div class="d-flex">
                    			<div class="input-group mb-3 w-30 mx-3">
									  <div class="custom-file">
										    <input type="file" class="custom-file-input" id="inputGroupFile02">
											    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
										  </div>
										  <div class="input-group-append">

								  </div>
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									 <input id="target" type="text" class="form-control" ng-keyup="x.up(7,s2)" ng-model=s2 aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									<input id="target" type="text" class="form-control" ng-keyup="x.up(8,s2d)" ng-model=s2d aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
							</div>

                    		</div>
                    		<div class="d-block w-100">
                    			<span class="panelrow mx-3">Slide 3.</span>
                    			<div class="d-flex">
                    			<div class="input-group mb-3 w-30 mx-3">
									  <div class="custom-file">
										    <input type="file" class="custom-file-input" id="inputGroupFile02">
											    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
										  </div>
										  <div class="input-group-append">

								  </div>
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									 <input id="target" type="text" class="form-control" ng-keyup="x.up(9,s3)" ng-model=s3 aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									<input id="target" type="text" class="form-control"ng-keyup="x.up(10,s3d)" ng-model=s3d  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
							</div>

                    		</div>
                    		<div class="d-block w-100">
                    			<span class="panelrow mx-3">Slide 4.</span>
                    			<div class="d-flex">
                    			<div class="input-group mb-3 w-30 mx-3">
									  <div class="custom-file">
										    <input type="file" class="custom-file-input" id="inputGroupFile02">
											    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
										  </div>
										  <div class="input-group-append">

								  </div>
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									 <input id="target" type="text" class="form-control" ng-keyup="x.up(11,s4)" ng-model=s4  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>

								<div class="input-group mb-3 mx-3 w-30">
									<input id="target" type="text" class="form-control" ng-keyup="x.up(12,s4d)" ng-model=s4d  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
							</div>

                    		</div>


                    	</div>

                    	<div class="row">
                    		<div class="subrow d-flex w-100 my-3">
                    			<div class="d-block mx-3 w-50"><span>Vendors:</span><input ng-keyup="x.up(13,c1)" ng-model=c1  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
                    			<div class="d-block mx-3 w-50"><span>Projects:</span><input ng-keyup="x.up(14,c2)" ng-model=c2 " type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
                    		</div>
                    		<div class="subrow d-flex w-100 my-3">
                    			<div class="d-block mx-3 w-50"><span class="\">Events Planned:</span><input type="text" ng-keyup="x.up(15,c3)" ng-model=c3 class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
                    			<div class="d-block mx-3 w-50"><span>Cities:</span><input type="text" class="form-control"  ng-keyup="x.up(16,c4)" ng-model=c4  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
                    		</div>

                    	</div>




                        <div class="row">
                            <div class="col-md-12">
                              <div class="copyright mx-auto">
                                  <p>Copyright © 2019 <a href="http://wizitsolutions.in/">Wiz It Solutions</a>. All rights reserved.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src=js/angular.min.js ></script>
    <script src="js/backend.js" charset="utf-8"></script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->

    <!-- <script src="js/all.Service.js" charset="utf-8"></script> -->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
