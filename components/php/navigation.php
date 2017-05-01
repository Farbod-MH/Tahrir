<header>
	<nav id="sidebar" class="sidebar navmenu navmenu-default navbar-default navmenu-fixed-right offcanvas-sm">
		<div class="sidebar-container"><!-- firefox bug -->
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
					<a href="#" title="حساب کاربری"><img src="_img/_svg/user.svg" alt="user" class="img-responsive navbar-icon "></a>
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
					<a href="#" title="ورود" class="btn btn-primary"  >ورود</a>
				</div>
				<div class="col-xs-6 sign-up">
					<a href="registration.php" title="ثبت نام" class="btn btn-primary" >ثبت نام</a>
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
					<input type="text" name="search" class="form-control" placeholder="جستجو...">
				</div>
			</form>

			<!-- account navigation. visible by default in account pages -->
			<ul class="nav nav-stacked account-nav">
				<li>
					<span class="list-item-icon products-icon"></span>
					<a title="منوی اصلی" href="#" id="show-main-nav">  منوی اصلی<span class="arrow-left"></span></a>
				</li>
				<li class="dropdown">
					<span class="list-item-icon add-account-icon"></span>
					<a title="شارژ حساب" href="add_account.php"></span>شارژ حساب <span class="arrow-right"></span></a>
				</li>
				<li>
					<span class="list-item-icon accounting-icon"></span>
					<a title="سیستم حسابداری" href="#">سیستم حسابداری<span class="arrow-right"></span></a>
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
						<li><a title="ورق" href="#">ورق<span class="arrow-right"></span></a></li>
						<li><a title="میز اداری" href="#">میز اداری<span class="arrow-right"></span></a></li>
						<li><a title="پونس" href="#">پونس<span class="arrow-right"></span></a></li>
						<li><a title="نوشت افزار" href="#">نوشت افزار<span class="arrow-right"></span></a></li>
						<li><a title="نوشت افزار" href="#">نوشت افزار<span class="arrow-right"></span></a></li>
					</ul>
				</li>
				<li>
					<span class="list-item-icon about-us-icon"></span><a title="درباره ما" href="About_Us.php"> درباره ما<span class="arrow-right"></span></a>
				</li>
				<li>
					<span class="list-item-icon rules-icon"></span><a title="قوانین و مقررات" href="Rules"> قوانین و مقررات<span class="arrow-right"></span></a>
				</li>
			</ul>
			<div class="footer">
				<div class="row">
					<div class="col-xs-6">
						<a title="ایمیل" href="#"><img src="_img/_svg/mail.svg" alt="email Tahrir Center"></a>
					</div>
					<div class="col-xs-6">
						<a title="تلگرام" href="#"><img src="_img/_svg/telegram.svg" alt="telegram"></a>
					</div>
					<div class="col-xs-12">
						<p> Copyright © Tameshkk.com 2017 </p>
					</div>
				</div><!-- footer row -->
			</div><!-- footer -->
		</div><!-- sidebar container -->
	</nav><!-- nav id=#sidebar -->
	<!-- navbar header for viewports smaller than 992px -->
	<div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg shadow">
		<div class="navbar-header navmenu-brand">
			<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
			    <img src="_img/hamburger-menu.png" alt="">
			  </button>
			<a title="نحریر سنتر" href="price.php">
				<img src="_img/logo.png" alt="logo of tahrir center" class="img-responsive navbar-brand">
			</a>
		</div><!-- navbar header -->
	</div><!-- navbar -->
	<!-- -->
</header>
