<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo e($title); ?> | Seduluran</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo e(base_url()); ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo e(base_url()); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo e(base_url()); ?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo e(base_url()); ?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo e(base_url()); ?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container login-cover">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content pb-20">

					<!-- Tabbed form -->
					<div class="tabbable panel login-form width-400">

						<div class="tab-content panel-body">

              <form action="<?php echo e(base_url('authentication/login/customer')); ?>" method="post">
								<div class="text-center">
									<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
									<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="email" class="form-control" placeholder="Username" name="email" required="required">
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="password" class="form-control" placeholder="Password" name="password" required="required">
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group login-options">
									<div class="row">
										<div class="col-sm-6">
											<label class="checkbox-inline">
												<input type="checkbox" class="styled" checked="checked">
												Remember
											</label>
										</div>

										<div class="col-sm-6 text-right">
											<a href="login_password_recover.html">Forgot password?</a>
										</div>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
					<!-- /tabbed form -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
