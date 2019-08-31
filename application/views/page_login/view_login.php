<!DOCTYPE html>
<html>
<head>

    <!--------- Title --------->
    <title>Login | <?php echo $company[0]->name; ?></title>

    <!--------- Meta --------->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!---------- Favicon --------->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!--------- CSS --------->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>tamplate/login-page/css/main.css">
    <style>
        .focus-input100 {
            border: 1px solid #1683e9;
        }
        .btn-show-pass:hover {
            color: #1683e9;
        }
        .login100-form-btn {
            background-color: #1683e9;
        }
        .input-checkbox100:checked + .label-checkbox100::before {
            color: #1683e9;
        }
        .login100-form-btn:hover {
            background-color: #7eaad3;
        }
        a:hover {
            color: #7eaad3;
        }
    </style>

</head>
<body>

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						<center>Login</center>
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="username@onggolt.com">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

    <div id="dropDownSelect1"></div>

    <!--------- Javascript --------->    
    <script src="<?php echo base_url(); ?>tamplate/login-page/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo base_url(); ?>tamplate/login-page/js/main.js"></script>
    
</body>
</html>