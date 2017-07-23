<header>
	<nav id="sidebar" class="sidebar navmenu navmenu-default navbar-default navmenu-fixed-right offcanvas-sm shadow">
		<div class="sidebar-container">
			<!-- firefox bug -->
			<div class="menu-container">
				<div class="row">
					<div class="navbar-header navmenu-brand visible-md visible-lg">
						<a href="price.php" title="تحریر سنتر">
							<img src="_img/logo.png" alt="logo of tahrir center" class="img-responsive navbar-brand">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 cart-icon">
						<a href="cart.php" title="سبد خرید"><img src="_img/_svg/cart.svg" alt="cart" class="img-responsive navbar-icon "><span class="badge">۲۲</span></a>
					</div>
					<div class="col-xs-4 phone-icon">
						<a href="contact_us.php" title="تماس با ما"><img src="_img/_svg/phone.svg" alt="phone" class="img-responsive navbar-icon "></a>
					</div>
					<div class="col-xs-4 user-icon">
						<a href="add_account.php" title="حساب کاربری"><img src="_img/_svg/user.svg" alt="user" class="img-responsive navbar-icon "></a>
					</div>
				</div>

				<!-- user info -->
				 <!-- <div class="nav-user-details row">
				<div class="col-xs-12">
					<p>آقای جلالی</p>
				</div>
				<div class="col-xs-12">
					<p class="user-budget"> ۵۰،۵۵۵،۵۵۵ ریال
						<a href="add_account.php" title="افزودن به موجودی"><img src="_img/_svg/add.svg" alt="adding to budget"></a>
					</p>
				</div>
			</div> -->
				<!-- -->

				<!-- sign in and sign up btns -->
				 <div class="log-in row">
					<div class="col-xs-6 sign-in">
						<a href="log-in.php" title="ورود" class="btn btn-primary">ورود</a>
					</div>
					<div class="col-xs-6 sign-up">
						<a href="registration.php" title="ثبت نام" class="btn btn-primary">ثبت نام</a>
					</div>
				</div>
				<!-- -->

				<form class="navbar-form row" role="search" action="/search" method="post">
					<div class="input-group input-group-search">
						<span class="input-group-addon">
							<button type="submit" class="search-btn">
							    <span class= "search-icon"></span>
						</button>
						</span>
						<input type="text" name="search" class="form-control" id="searchInput" placeholder="جستجو...">
					</div>
				</form>

				<div class="products-nav row">
					<a href="#" id="hide-products-nav" title="بازگشت به منو اصلی" id="back-btn">
						<div class="col-xs-12 back-btn">
							<img src="_img/back-arrow.png" alt="بازگشت به منو اصلی">
							<span>بازگشت</span>
						</div>
					</a>
					<div class="col-xs-12 products-nav-container">
						<div class="row">
							<div class="col-md-12">
								<span class="products-nav-title">بازه قیمت</span>
							</div>
							<div class="col-md-12">
								<div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
				                         <div class="ui-slider-range ui-corner-all ui-widget-header">

				                         </div>
				                         <span tabindex="1" class="ui-slider-handle ui-corner-all ui-state-default">

				                         </span>
				                         <span tabindex="2" class="ui-slider-handle ui-corner-all ui-state-default" >

				                         </span>
				                    </div>
							</div>
							<div class="col-md-12">
								<div class="amount">
									<span class="min-price pull-right"></span>
									<span class="max-price pull-left"></span>
								</div>
							</div>
							<div class="col-md-12">
								<span class="products-nav-title">برند ها</span>
							</div>
							<div class="col-md-12 brand-container">
								<ul>
									<li>
										<input type="checkbox" id="brand1" name="brand1" value="" class="brand-checkbox">
										<label for="brand1">
											<span class="brand-name">
												<img src="_img/logo.png" alt="Brand">
												برند
												<span class="brand-eng pull-left">Brand</span>
											</span>
										</label>
									</li>
									<li>
										<input type="checkbox" id="brand2" name="brand2" value="" class="brand-checkbox">
										<label for="brand2">
											<span class="brand-name">
												<img src="_img/logo.png" alt="Brand">
												برند
												<span class="brand-eng pull-left">Brand</span>
											</span>
										</label>
									</li>
									<li>
										<input type="checkbox" id="brand3" name="brand3" value="" class="brand-checkbox">
										<label for="brand3">
											<span class="brand-name">
												<img src="_img/logo.png" alt="Brand">
												برند
												<span class="brand-eng pull-left">Brand</span>
											</span>
										</label>
									</li>
									<div class="collapse" id="see-more-collapse">
										<li>
											<input type="checkbox" id="brand4" name="brand4" value="" class="brand-checkbox">
											<label for="brand4">
												<span class="brand-name">
													<img src="_img/logo.png" alt="Brand">
													برند
													<span class="brand-eng pull-left">Brand</span>
												</span>
											</label>
										</li>
										<li>
											<input type="checkbox" id="brand5" name="brand5" value="" class="brand-checkbox">
											<label for="brand5">
												<span class="brand-name">
													<img src="_img/logo.png" alt="Brand">
													برند
													<span class="brand-eng pull-left">Brand</span>
												</span>
											</label>
										</li>
									</div>
									<li>
										<a class="btn see-more see-more-container" role="button" data-toggle="collapse" href="#see-more-collapse" aria-expanded="false" aria-controls="see-more-collapse">
											بیشتر...
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- account navigation. visible by default in account pages -->
				<ul class="nav nav-stacked account-nav">
					<li>
						<span class="list-item-icon products-icon"></span>
						<a title="منوی اصلی" href="#" id="show-main-nav">  منوی اصلی<span class="arrow-left"></span></a>
					</li>
					<li>
						<span class="list-item-icon add-account-icon"></span>
						<a title="شارژ حساب" href="add_account.php"></span>شارژ حساب <span class="arrow-right"></span></a>
					</li>
					<li>
						<span class="list-item-icon accounting-icon"></span>
						<a title="سیستم حسابداری" href="accounting.php">سیستم حسابداری<span class="arrow-right"></span></a>
					</li>
					<li>
						<span class="list-item-icon invoice-search-icon"></span>
						<a title="بررسی فاکتور" href="invoice_search.php">بررسی فاکتور<span class="arrow-right"></span></a>
					</li>
					<li>
						<span class="list-item-icon contract-search-icon"></span>
						<a title="بررسی قرارداد" href="contract_search.php">بررسی قرارداد<span class="arrow-right"></span></a>
					</li>
					<li>
						<span class="list-item-icon contract-icon"></span>
						<a title="عقد قرارداد" href="contract.php">عقد قرارداد<span class="arrow-right"></span></a>
					</li>
				</ul>
				<!-- -->
				<!-- the main navigation -->
				<ul class="nav nav-stacked main-nav">
					<!-- print this <li> if the user is logged in -->
					<li>
						<span class="list-item-icon user-icon"></span>
						<a title="منوی کاربری" href="#" id="show-account-nav">منوی کاربری<span class="arrow-right"></span></a>
					</li>
					<!-- -->

					<li>
						<span class="list-item-icon chart-icon"></span>
						<a title="استعلام قیمت" href="price.php">  استعلام قیمت<span class="arrow-right"></span></a>
					</li>
					<li class="dropdown">
						<span class="list-item-icon products-icon"></span>
						<a title="محصولات" href="#" class="dropdown-toggle" data-toggle="dropdown"></span> محصولات <span class="arrow-right"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a title="ورق" href="products.php">ورق<span class="arrow-right"></span></a></li>
							<li><a title="میز اداری" href="products.php">میز اداری<span class="arrow-right"></span></a></li>
							<li><a title="پونس" href="products.php">پونس<span class="arrow-right"></span></a></li>
							<li><a title="نوشت افزار" href="products.php">نوشت افزار<span class="arrow-right"></span></a></li>
							<li><a title="نوشت افزار" href="products.php">نوشت افزار<span class="arrow-right"></span></a></li>
						</ul>
					</li>
					<li>
						<span class="list-item-icon about-us-icon"></span><a title="درباره ما" href="About_Us.php"> درباره ما<span class="arrow-right"></span></a>
					</li>
					<li>
						<span class="list-item-icon rules-icon"></span><a title="قوانین و مقررات" href="Rules"> قوانین و مقررات<span class="arrow-right"></span></a>
					</li>
					<li>
						<span class="list-item-icon about-us-icon"></span><a title="مشتریان ما" href="customers">مشتریان ما<span class="arrow-right"></span></a>
					</li>
				</ul>
			</div>
			<div class="footer">
				<div class="row">
					<div class="col-xs-12">
						<p> Copyright &copy; Tahrircenter.com 2016-2017 </p>
					</div>
				</div>
				<!-- footer row -->
			</div>
			<!-- footer -->
		</div>
		<!-- sidebar container -->
	</nav>
	<!-- nav id=#sidebar -->
	<!-- navbar header for viewports smaller than 992px -->
	<div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg shadow">
		<div class="navbar-header navmenu-brand">
			<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
				<span class="line"></span>
           		<span class="line"></span>
           		<span class="line"></span>
			  </button>
			<a title="نحریر سنتر" href="price.php">
				<img src="_img/logo-eng.png" alt="logo of tahrir center" class="img-responsive navbar-brand">
			</a>
		</div>
		<!-- navbar header -->
	</div>
	<!-- navbar -->
	<!-- -->
</header>
