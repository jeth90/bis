<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url()?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url()?>assets/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url()?>assets/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url()?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= base_url()?>image/logo.png" alt="San Teodoro">
                            </a>
                        </div>
                        <div class="login-form">
                            <?php echo form_open('user/login'); ?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" id="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>                                    
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>                                
                            </form>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?=base_url()?>assets/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url()?>assets/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>assets/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>assets/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>assets/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>assets/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>assets/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>assets/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->