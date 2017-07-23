<!doctype HTML>
<html lang="fa">

<head>
	<title> استعلام قیمت</title>
	<?php include "components/php/head.php"; ?>
</head>

<body class="price">
	<?php include "components/php/navigation.php";  ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 hidden-print">
				<div class="box-container box border shadow top-bar">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<label for="selectpicker" class="select-text">
                           				 انتخاب کالا -
                      				</label>
								<select id="selectpicker" class="selectpicker" name="" title="همه" data-size="6" data-width="100%" data-container="body">
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                             <option value="">خودکار</option>
			                         </select>
							</div><!-- form-group -->
						</div><!-- col-md-3 -->
						<div id="datepickerfromContainer" class="col-md-3 col-sm-3">
							<label for="datepicker" class="select-text-datepicker">
				                    برو به
                    			</label>
							<input type="text" id="datepicker" class="datepicker" />
						</div>
						<div class="col-md-3 col-sm-3">
								<nav aria-label="Page navigation" class="pagination-container">
									<ul class="pagination ">
										<li>
											<a href="#" aria-label="Previous">
												<span class="arrow-right"></span>
											</a>
										</li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li>
											<a href="#" aria-label="Next">
												<span class="arrow-left"></span>
											</a>
										</li>
									</ul>
								</nav>
						</div><!-- col-md-3 -->
						<div class="col-md-3 col-sm-3">
							<a href="#" title="چاپ" onclick="window.print()"><img src="_img/_svg/print.svg" alt="چاپ" class="price-icons"></a>
							<a href="#" title="دانلود PDF"><img src="_img/_svg/pdf.svg" alt="دانلود PDF" class="price-icons"></a>
						</div>
					</div><!-- top-bar Row -->
				</div><!-- top-bar -->
			</div><!-- col-md-12 -->
			<div class="col-sm-6 table-container">
				<table class="table table-striped table-responsive table-hover table-condensed-xs box border shadow">
					<thead>
						<tr>
							<th>ردیف</th>
							<th>کد کالا</th>
							<th>توضیحات</th>
							<th>ابعاد</th>
							<th>قیمت</th>
							<th>روند</th>
							<th>نمودار</th>
						</tr>
					</thead>
					<tbody data-link="row" class="rowlink" >
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><!-- table-container col-sm-6 -->
			<div class="col-sm-6 table-container">
				<table class="table table-striped table-responsive table-hover table-condensed-xs box border shadow">
					<thead>
						<tr>
							<th>ردیف</th>
							<th>کد کالا</th>
							<th>توضیحات</th>
							<th>ابعاد</th>
							<th>قیمت</th>
							<th>روند</th>
							<th>نمودار</th>
						</tr>
					</thead>
					<tbody data-link="row" class="rowlink" >
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="Product-detail">1</a></td>
							<td> CPMX </td>
							<td> کاغذ ک‍‍پی مکس</td>
							<td> 22.5</td>
							<td> 55000</td>
							<td> 22.5</td>
							<td class="rowlink-skip">
								<a href="Product-detail#price-change" title="نوسان قیمت">
									<img src="_img/_svg/chart.svg" alt="نوسان قیمت" class="table-chart">
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><!-- table-container col-sm-6 -->
		</div><!-- container row -->
	</div><!-- container -->
	<?php include "components/php/js_source.php"; ?>
	<script type="text/javascript">
		$('tbody').rowlink()
		$('#datepicker').datepicker();
		$('#datepicker').on('blur', function() {
			$(this).removeClass('datepicker-selected');
			$('#datepickerfromContainer').removeClass('datepicker-container');
		}).on('focus', function() {
			$(this).addClass('datepicker-selected');
			$('#datepickerfromContainer').addClass('datepicker-container')
		});
	</script>
</body>

</html>
