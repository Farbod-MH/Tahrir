<!doctype HTML>
<html lang="fa">

<head>
	<title> استعلام قیمت</title>
	<?php include "components/php/head.php"; ?>
</head>

<body>
	<?php include "components/php/navigation.php";  ?>

	<div class="container price">
		<div class="row">
			<div class="col-md-12 border box top-bar shadow">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<span class="select-text">
                            انتخاب کالا -
                      			</span>
							<select class="selectpicker" name="" multiple title="همه" data-selected-text-format="count>1" data-size="6" data-width="100%" data-container="body">
                             <option value="pen">خودکار</option>
                             <option value="2">خودکار</option>
                             <option value="3">خودکار</option>
                             <option value="4">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                         </select>
						</div>

					</div>
					<div class="col-md-3">
						<span class="select-text-datepicker">
                    انتخاب تاریخ - از
                    </span>
						<input type="text" id="datepickerfrom" class="datepicker" />
					</div>
					<div class="col-md-3">
						<span class="select-text-datepicker">
                        انتخاب تاریخ - تا
                    </span>
						<input type="text" id="datepickerto" class="datepicker" />
					</div>
					<!-- <div class="col-md-2">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</div> -->
					<div class="col-md-3 ">
						<a href="#"><img src="_img/_svg/print.svg" alt="" class="price-icons"></a>
						<a href="#"><img src="_img/_svg/pdf.svg" alt="" class="price-icons"></a>
					</div>
				</div>
				<!-- top-bar Row -->
			</div>
			<!-- top-bar -->
			<!-- when a single table is required -->

			<!-- <div class="col-md-12 table-container box border shadow">
				<table class="table table-striped table-responsive">
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
					<tbody>
						<tr>
							<td>1</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div> -->

			<!-- when 2 or more tables are required -->
			<div class="col-md-6 table-container">
				<table class="table table-striped table-responsive  box border shadow table-condensed">
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
					<tbody>
						<tr>
							<td>1</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- table-container col-md-6 -->
			<div class="col-md-6 table-container">
				<table class="table table-striped table-responsive table-condensed box border shadow">
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
					<tbody>
						<tr>
							<td>1</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>CPMX</td>
							<td>کاغذ ک‍‍پی مکس</td>
							<td>22.5</td>
							<td>55000</td>
							<td>22.5</td>
							<td>
								<a href="#"><img src="_img/_svg/chart.svg" alt="" class="table-chart"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- table-container col-md-6 -->
		</div>
		<!-- container row -->
	</div>
	<!-- container -->

	<?php include "components/php/js_source.php"; ?>
</body>

</html>
