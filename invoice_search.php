<!doctype HTML>
<html lang="fa">

<head>
	<title> بررسی فاکتور</title>
	<?php include "components/php/head.php"; ?>
</head>

<body class="account invoice-search">
	<?php include "components/php/navigation.php";  ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box-container box border shadow">
					<div class="row">
						<div class="col-md-4">
							<form class="invoice-search-form" role="search" action="/search" method="post">
								<div class="input-group input-group-search">
									<span class="input-group-addon">
  							<button type="submit" class="search-btn">
  							    <span class= "search-icon"></span>
									</button>
									</span>
									<input type="text" name="search" class="form-control" placeholder="شماره فاکتور">
								</div>
							</form>
						</div> <!-- col-md-4 -->
					</div> <!-- row -->
				</div> <!-- box container -->
			</div> <!-- col-md-12 -->
			<div class="col-md-12">
				<div class="box-container box border shadow">
					<div class="table-container">
						<table class="table table-striped table-responsive table-condensed-xs">
							<thead>
								<tr>
									<th>ردیف</th>
									<th>شماره فاکتور</th>
									<th>تاریخ</th>
									<th>وضعیت</th>
									<th>مبلغ</th>
									<th>مشاهده فاکتور</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>۱</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۲</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-danger">پرداخت نشد</span></td>
									<td><span class="text-danger">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۳</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="">در حال انجام</span></td>
									<td><span class="">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۴</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۵</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۶</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۷</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۸</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۹</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۱۰</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۱۱</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/invoice.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div> <!-- table-container -->
				</div> <!-- box-container -->
			</div><!-- col-md-12 -->

		</div><!-- container row -->
	</div><!-- container -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header hidden-print">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
			               <div class="col-md-12">
			                    <h2 class="text-center">فاکتور فروش</h2>
			                    <h2 class="text-center">تحریر سنتر</h2>
			                    <p>شماره فاکتور: 55555</p>
			                    <p>تاریخ: 21/1/96</p>
			               </div>
			               <div class="col-md-12">
			                    <table class="table table-responsive table-condensed-xs information">
			                         <tbody>
			                              <tr>
			                                   <td>شماره تماس:</td>
			                                   <td>02122222222 09122222222</td>
			                                   <td>کد اقتصادی:</td>
			                                   <td>555555</td>
			                                   <td class="table-title" rowspan="3">
											<div>
												فروشنده
											</div>
										</td>
			                              </tr>
			                              <tr>
			                                   <td rowspan="2">نشانی:</td>
			                                   <td class="table-address" rowspan="2">اینجا   </td>
			                                   <td>کد پستی:</td>
			                                   <td>5555555555</td>
			                              </tr>
			                              <tr>

			                                   <td>شماره ثبت/ملی:</td>
			                                   <td>54545454</td>
			                              </tr>
			                         </tbody>
			                    </table>
							<table class="table table-responsive table-condensed-xs information">
			                         <tbody>
			                              <tr>
										<td>خریدار: </td>
										<td>شرکت الف</td>
			                                   <td>کد اقتصادی:</td>
			                                   <td>555555</td>
										<td class="table-title" rowspan="3">
											<div>
											خریدار
											</div>
										</td>
			                              </tr>
			                              <tr>
										<td>شماره تماس:</td>
										<td>02122222222 09122222222</td>
			                                   <td>کد پستی:</td>
			                                   <td>5555555555</td>
			                              </tr>
			                              <tr>
										<td>نشانی:</td>
										<td class="table-address"> اینجا  </td>
			                                   <td>شماره ثبت/ملی:</td>
			                                   <td>54545454</td>
			                              </tr>
			                         </tbody>
			                    </table>
							<div class="table-container">
								<table class="table table-striped  table-hover table-condensed-xs table-responsive bill">
									<thead>
										<tr>
											<th>ردیف</th>
											<th>کد کالا</th>
											<th>شرح کالا / خدمات</th>
											<th>تعداد / مقدار</th>
											<th>واحد</th>
											<th>فی</th>
											<th>مبلغ</th>
											<th>تخفیف</th>
											<th>مبلغ پس از تخفیف</th>
											<th>مبلغ نهایی</th>
										</tr>
									</thead>
									<tbody>
				                              <tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
				                              <tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
				                              <tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
				                              <tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
										<tr>
				                                   <td>1</td>
				                                   <td>000</td>
				                                   <td>کاغذ دبل ای</td>
				                                   <td>500</td>
				                                   <td>بسته</td>
				                                   <td>141000</td>
				                                   <td>70500000</td>
				                                   <td>0</td>
				                                   <td>70500000</td>
				                                   <td>70500000</td>
				                              </tr>
			                              <tfoot>
			                                   <tr>
			                                        <td colspan="7" rowspan="4">توضیحات: </td>
			                                        <td colspan="2">جمع فاکتور</td>
			                                        <td>82815000</td>
			                                   </tr>
			                                   <tr>
			                                        <td colspan="2">جمع عوارض و مالیات</td>
			                                        <td>0</td>
			                                   </tr>
			                                   <tr>
			                                        <td colspan="2">جمع تخفیف</td>
			                                        <td>0</td>
			                                   </tr>
			                                   <tr>
			                                        <td colspan="2">مبلغ قابل پرداخت (ریال)</td>
			                                        <td>82815000</td>
			                                   </tr>
			                              </tfoot>
				                         </tbody>
				                    </table>
							</div>
			               </div>
						<div class="col-md-12 signature visible-print">
							<div class="row">
								<div class="col-md-6 pull-right">
									<p>امضا خریدار</p>
								</div>
								<div class="col-md-6 pull-left">
									<p class="text-left">امضا فروشنده</p>
								</div>
							</div>
						</div>
			          </div>
				</div>

				<div class="modal-footer hidden-print">
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<a href="#" title="چاپ" class="btn-print"><img src="_img/_svg/print.svg" alt="" class="price-icons"></a>
							<a href="#" title="دانلود PDF"><img src="_img/_svg/pdf.svg" alt="" class="price-icons"></a>
						</div>
						<div class="col-md-2 col-xs-4 pull-left">
							<button type="button" class="btn btn-primary" data-dismiss="modal">بستن</button>
						</div>
					</div><!-- modal-footer row -->
				</div><!-- modal-footer -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- #myModal -->
	<?php include "components/php/js_source.php"; ?>
	<script type="text/javascript" src="_js/printThis.js"></script>
	<script type="text/javascript">
		$('.btn-print').on('click',function() {
			var $this = $(this);
			var tablesToPrint = $this.closest('.modal-dialog').find('.modal-content').html();
			$(tablesToPrint).printThis({

			});
	   	});
	</script>
</body>

</html>
