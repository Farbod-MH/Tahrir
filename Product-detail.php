<!doctype HTML>
<html lang="fa">

<head>
	<title> product detail</title>
	<?php include "components/php/head.php"; ?>
	<link rel="stylesheet" href="_css/ekko-lightbox.min.css">

</head>

<body class="product-detail">
	<?php include "components/php/navigation.php";  ?>
	<div class="container">
		<div class="row">
			<div class="box-container">
					<div class="col-md-6 col-sm-6 product-img-gallery">
						<div class="row">
							<div class="col-xs-12 col-sm-9 product-main-img">
								<a href="http://placehold.it/300x300" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
									<img src="http://placehold.it/500x500" class="img-responsive product-main-img">
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="row">
							<div class="col-xs-3 col-sm-12">
								<a href="http://placehold.it/500x300" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
									<img src="http://placehold.it/100x100" class="img-responsive product-main-img">
								</a>
							</div>
							<div class="col-xs-3 col-sm-12">
								<a href="http://placehold.it/700x300" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
									<img src="http://placehold.it/100x100" class="img-responsive product-main-img">
								</a>
							</div>
							<div class="col-xs-3 col-sm-12">
								<a href="http://placehold.it/200x300" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
									<img src="http://placehold.it/100x100" class="img-responsive product-main-img">
								</a>
							</div>
							<div class="col-xs-3 col-sm-12">
								<a href="http://placehold.it/150x300" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
									<img src="http://placehold.it/100x100" class="img-responsive product-main-img">
								</a>
							</div>
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
	<script type="text/javascript" src="_js/ekko-lightbox.min.js"></script>
	<script type="text/javascript">
		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				alwaysShowClose: true,
				loadingMessage: '<div class="ekko-lightbox-loader"><div><div></div><div>wait</div></div></div>'
			});
		});
	</script>

</body>

</html>
