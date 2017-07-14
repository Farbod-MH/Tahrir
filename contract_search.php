<!doctype HTML>
<html lang="fa">

<head>
	<title>بررسی قرارداد</title>
	<?php include "components/php/head.php"; ?>
</head>

<body class="account contract-search">
	<?php include "components/php/navigation.php";  ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box-container box border shadow">
					<div class="row">
						<div class="col-md-4">
							<form class="contract-search-form" role="search" action="/search" method="post">
								<div class="input-group input-group-search">
									<span class="input-group-addon">
  							<button type="submit" class="search-btn">
  							    <span class= "search-icon"></span>
									</button>
									</span>
									<input type="text" name="search" class="form-control" placeholder="شماره قرارداد">
								</div>
							</form>
						</div>
					</div> <!-- row -->
				</div> <!-- box-container -->
			</div> <!-- col-md-12 -->
			<div class="col-md-12">
				<div class="box-container box border shadow">
					<div class="table-container">
						<table class="table table-striped table-responsive table-condensed-xs">
							<thead>
								<tr>
									<th>ردیف</th>
									<th>شماره قرارداد</th>
									<th>مدت قرارداد</th>
									<th>تاریخ عقد</th>
									<th>وضعیت</th>
									<th>عکس</th>
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
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۲</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-danger">پرداخت نشد</span></td>
									<td><span class="text-danger">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۳</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="">در حال انجام</span></td>
									<td><span class="">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۴</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۵</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۶</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۷</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۸</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۹</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۱۰</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
									</td>
								</tr>
								<tr>
									<td>۱۱</td>
									<td>۲۵۸۷۴۵</td>
									<td>۰۵ / ۰۵ / ۱۳۹۶</td>
									<td><span class="text-success">پرداخت شد</span></td>
									<td><span class="text-success">۵۵۵۵۵۵۵۵</span></td>
									<td>
										<a data-toggle="modal" onclick="changeImgSrc('_img/factor.png')" href="#" data-target="#myModal" title="مشاهده فاکتور"><img src="_img/_svg/gallery.svg" alt="مشاهده فاکتور" class="table-chart"></a>
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
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<img src="_img/factor.png" id="modalImg" alt="" class="img-responsive">
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<a href="#" title="چاپ" onclick="printImg()"><img src="_img/_svg/print.svg" alt="" class="price-icons"></a>
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
</body>

</html>
