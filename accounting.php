<!doctype HTML>
<html lang="fa">

<head>
	<title> سیستم حسابداری</title>
	<?php include "components/php/head.php"; ?>
</head>

<body class="accounting">
	<?php include "components/php/navigation.php";  ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-7">
				<div class="row">
					<div class="col-md-12">
						<div class="box border shadow box-container top-bar">
							<div class="row">
								<div id="datepickerfromContainer" class="col-md-6 col-sm-6">
									<label for="datepickerfrom" class="select-text-datepicker">
					                    		انتخاب تاریخ - از
	                    					</label>
									<input type="text" id="datepickerfrom" class="datepicker" />
								</div>
								<!-- col-md-3 -->
								<div id="datepickertoContainer" class="col-md-6 col-sm-6">
									<label for="datepickerto" class="select-text-datepicker">
				                        			انتخاب تاریخ - تا
							    			</label>
									<input type="text" id="datepickerto" class="datepicker" />
								</div>
								<!-- col-md-3 -->
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="table-container">
							<table class="table table-responsive box shadow">

								<tbody>
									<tr>
										<td>۱۳۹۶ / ۰۱ / ۰۲</td>
										<td>۱۵:۳۰</td>
										<td>نقدی</td>
										<td>برداشت</td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- table-container -->
						<div class="table-container">
							<table class="table table-responsive box shadow">

								<tbody>
									<tr>
										<td>۱۳۹۶ / ۰۱ / ۰۲</td>
										<td>۱۵:۳۰</td>
										<td>نقدی</td>
										<td>برداشت</td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- table-container -->
						<div class="table-container">
							<table class="table table-responsive box shadow">

								<tbody>
									<tr>
										<td>۱۳۹۶ / ۰۱ / ۰۲</td>
										<td>۱۵:۳۰</td>
										<td>نقدی</td>
										<td>برداشت</td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- table-container -->
						<div class="table-container">
							<table class="table table-responsive box shadow">

								<tbody>
									<tr>
										<td>۱۳۹۶ / ۰۱ / ۰۲</td>
										<td>۱۵:۳۰</td>
										<td>نقدی</td>
										<td>برداشت</td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- table-container -->
						<div class="table-container">
							<table class="table table-responsive box shadow">

								<tbody>
									<tr>
										<td>۱۳۹۶ / ۰۱ / ۰۲</td>
										<td>۱۵:۳۰</td>
										<td>نقدی</td>
										<td>برداشت</td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
									<tr>
										<td colspan="2">مبلغ</td>
										<td colspan="2">۵۰۰۰۰۰۰ <span class="label">ریال</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- table-container -->
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-5">

			</div>
		</div>
		<!-- container row -->
	</div>
	<!-- container -->
	<?php include "components/php/js_source.php"; ?>
	<script type="text/javascript" src="_js/persian-datepicker.min.js"></script>
	<script type="text/javascript">
		$('#datepickerfrom').datepicker({
			onSelect: function(dateText, inst) {
				$('#datepickerto').datepicker('option', 'minDate', new JalaliDate(inst['selectedYear'], inst['selectedMonth'], inst['selectedDay']));
			}
		});
		$('#datepickerto').datepicker();
		$('#datepickerfrom').on('blur', function() {
			$(this).removeClass('datepicker-selected');
			$('#datepickerfromContainer').removeClass('datepicker-container');
		}).on('focus', function() {
			$(this).addClass('datepicker-selected');
			$('#datepickerfromContainer').addClass('datepicker-container');

		});
		$('#datepickerto').on('blur', function() {
			$(this).removeClass('datepicker-selected');
			$('#datepickertoContainer').removeClass('datepicker-container');
		}).on('focus', function() {
			$(this).addClass('datepicker-selected');
			$('#datepickertoContainer').addClass('datepicker-container');
		});
	</script>
</body>

</html>
