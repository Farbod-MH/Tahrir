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
					<li class="active">
						<span>
								ثبت مشخصات
						</span>
					</li>
					<li class="active">
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
			<div class="col-md-12 paying-method">
				<div class="box border shadow box-container">
					<form action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<ul class="row">
									<li class="col-sm-6">
										<input type="radio" id="cash" name="selector">
										<label for="cash">نقدی</label>
										<div class="check"></div>
									</li>
									<li class="col-sm-6">
										<input type="radio" id="account" name="selector">
										<label for="account">کسر از حساب</label>
										<div class="check"></div>
									</li>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="product-price">
									<p>
										۵۵۵۵۵۵۵۵۵<span>ریال</span>
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-sm-offset-4">
								<button type="submit" class="btn btn-primary btn-block">پرداخت</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- container row -->
	</div>
	<!-- container -->
	<?php include "components/php/js_source.php"; ?>
</body>

</html>
