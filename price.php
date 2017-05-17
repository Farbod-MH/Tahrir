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
			<div class="col-md-12">
				<div class="box-container box border shadow top-bar">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<label for="selectpicker" class="select-text">
                           				 انتخاب کالا -
                      				</label>
								<select id="selectpicker" class="selectpicker" name="" multiple title="همه" data-selected-text-format="count>1" data-size="6" data-width="100%" data-container="body">
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
							<label for="datepickerfrom" class="select-text-datepicker">
				                    انتخاب تاریخ - از
                    			</label>
							<input type="text" id="datepickerfrom" class="datepicker" />
						</div><!-- col-md-3 -->
						<div id="datepickertoContainer" class="col-md-3 col-sm-3">
							<label for="datepickerto" class="select-text-datepicker">
			                        انتخاب تاریخ - تا
						    </label>
							<input type="text" id="datepickerto" class="datepicker" />
						</div><!-- col-md-3 -->
						<div class="col-md-3 col-sm-3">
							<a href="#" title="چاپ" onclick="window.print()"><img src="_img/_svg/print.svg" alt="چاپ" class="price-icons"></a>
							<a href="#" title="دانلود PDF"><img src="_img/_svg/pdf.svg" alt="دانلود PDF" class="price-icons"></a>
						</div>
					</div><!-- top-bar Row -->
				</div><!-- top-bar -->
			</div><!-- col-md-12 -->
			<!-- when two tables are required, use the next three divs -->
			<div class="col-md-6 table-container">
				<table class="table table-striped table-responsive  box border shadow table-condensed-xs">
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
			</div><!-- table-container col-md-6 -->
			<div class="col-md-6 table-container clearfix">
				<table class="table table-striped table-responsive table-condensed-xs box border shadow">
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
			</div> <!-- table-container col-md-6 -->
			 <div class="col-md-6 pull-left">
				<nav aria-label="Page navigation">
					<ul class="pagination">
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
			</div> <!-- col-md-6 -->
			<!-- when a single table is required use this table -->
			<!-- <div class="col-md-12 table-container">
				<div class="box border shadow clearfix">
					<table id="table" class="table table-striped table-responsive table-condensed-xs">
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

					<nav aria-label="Page navigation">
						<ul class="pagination">
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
				</div> <!-- box border shadow -->
			<!-- </div> --><!-- table-container -->
		</div><!-- container row -->
	</div><!-- container -->

	<?php include "components/php/js_source.php"; ?>
	<script type="text/javascript" src="_js/persian-datepicker.min.js"></script>
	<script type="text/javascript">
	$('#datepickerfrom').datepicker({
	    onSelect: function(dateText, inst) {
		   $('#datepickerto').datepicker('option', 'minDate', new JalaliDate(inst['selectedYear'], inst['selectedMonth'], inst['selectedDay']));
	    }
	});
	$('#datepickerto').datepicker();
	$('#datepickerfrom').on('blur', function(){
	   $(this).removeClass('datepicker-selected');
	   $('#datepickerfromContainer').removeClass('datepicker-container');
	}).on('focus', function(){
	   $(this).addClass('datepicker-selected');
	   $('#datepickerfromContainer').addClass('datepicker-container')
	});
	$('#datepickerto').on('blur', function(){
	   $(this).removeClass('datepicker-selected');
	   $('#datepickertoContainer').removeClass('datepicker-container');
	}).on('focus', function(){
	   $(this).addClass('datepicker-selected');
	   $('#datepickertoContainer').addClass('datepicker-container')
	});
	</script>
</body>

</html>
