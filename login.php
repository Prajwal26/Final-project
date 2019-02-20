<?php

    session_start();
    $error = '';
    if(array_key_exists("logout",$_GET))
    {
        unset($_SESSION['email']);
        setcookie("email","",time()- 60*60*360);
        $_COOKIE['email']= "";
        header("location:login.php");
    }
    elseif (array_key_exists("email", $_SESSION) OR array_key_exists("email",$_COOKIE)) {
        header("location:dashboard.php");
    }

    if (array_key_exists('submit', $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "draw_event");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 

            
            $email = $_POST['email'];
            $password = $_POST['password'];

        
        
        if ($_POST['email'] == '') {
            
            $error = "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            $error = "<p>Password is required.</p>";
            
        } else {
            
            $query = "SELECT * FROM `person_details` WHERE email = '$email' and password = '$password'";
            
            $result = mysqli_query($link, $query) or die( mysqli_error($link));;
            
            $row = mysqli_fetch_array($result);
            if($row['email'] == $email && $row['password'] == $password){

                $_SESSION['email'] = $_POST['email'];

                if(array_key_exists("remember",$_POST))
                {
                    if($_POST['remember'] == 'true')
                    {
                        setcookie("email",$_POST['email'],time()+60*60*24*365);
                    }

                 
                
            }
            if($row['email']=="demo@gmail.com")
                header("location: dashboard.php");
            else
                header("location:login.php");
        }
          else{
               $error = "login failed";
            }
        }
        
    }

    


?>

<style type="text/css">
    #error{
        margin-top: 10px;
    }
</style>


<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>


                            <div id="error"><?php if($error!='') { echo '<div class="alert alert-danger" role="alert">'.$error.'</div>'; } ?></div>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox"  name="remember"  id=rem>Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" id="submit" type="submit" name="submit">sign in</button>
                               
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
    <script src="js/main.js"></script>
    <script type="text/javascript">
   

    </script>

  
</body>

</html>
<!-- end document-->