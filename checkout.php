<!doctype HTML>
<html lang="fa">

<head>
	<title> پرداخت</title>
	<?php include "components/php/head.php"; ?>
</head>

<body class="checkout">
	<?php include "components/php/navigation.php";  ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="progressbar">
					<li class="active">
						<span>
								ثبت نام/ورود
						</span>
					</li>
					<li>
						<span>
								ثبت مشخصات
						</span>
					</li>
					<li>
						<span>
								نوع پرداخت
						</span>
					</li>
					<li>
						<span>
								اتمام خرید
						</span>
					</li>
				</ul>
			</div>
			<div class="registration">
				<div class="col-md-6">
					<div class="box-container box border shadow">
						<h3 class="page-title"> ثبت نام</h3>
						<div class="form-container">
							<form action="" method="post">
								<input type="text" class="form-control" id="" placeholder="نام کاربری">
								<input type="email" class="form-control" id="" placeholder="ایمیل">
								<input type="password" class="form-control" id="" placeholder="گذر واژه">
								<input type="password" class="form-control" id="" placeholder="تکرار گذرواژه">
								<button type="submit" class="btn btn-primary btn-block">ثبت</button>
							</form>
						</div>
					</div>
				</div>
				<div class="log-in-page">
					<div class="col-md-6">
						<div class="box-container box border shadow">
							<h3 class="page-title"> ورود</h3>
							<div class="form-container">
								<form action="" method="post">
									<input type="text" class="form-control" id="" placeholder="نام کاربری">
									<input type="password" class="form-control" id="" placeholder="گذر واژه">
									<button type="submit" class="btn btn-primary btn-block">ورود</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- container row -->
	</div>
	<!-- container -->
	<?php include "components/php/js_source.php"; ?>
</body>

</html>
