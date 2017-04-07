<!doctype HTML>
<html lang="fa">
<head>
    <title>تماس با ما</title>
    <?php include "components/php/head.php"; ?>
</head>
<body>
	<?php include "components/php/navigation.php";  ?>
    <div class="container contact-us">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 box address border shadow">
                        <img src="_img/_svg/phone02.svg" alt="Tahrir Center number" class="img-responsive">
                        <p>۲۲۲ ۲۲ ۲۲ - ۰۲۱</p>
                        <img src="_img/_svg/location.svg" alt="tahrir center address" class="img-responsive">
                        <p>تهران، خیابان شهید بهشتی، خیابان صابونچی (مهناز)،پلاک 4،واحد 8 </p>
                    </div>
                    <div class="col-md-12 box social border shadow">
                        <div class="row">
                            <div class="col-xs-4 instagram-icon">
                                <a href="#"> <img src="_img/_svg/instagram.svg" alt="instagram" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-4 mail-icon">
                                <a href="#"> <img src="_img/_svg/mail.svg" alt="email" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-4 telegram-icon">
                                <a href="#"> <img src="_img/_svg/telegram.svg" alt="telegram" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 box contact  border shadow">
                <form>
                    <input type="text" class="form-control" id="" placeholder="نام">
                    <input type="email" class="form-control" id="" placeholder="ایمیل">
                    <textarea name="message" class="form-control" rows="4" cols="40" placeholder="متن پیام"></textarea>
                    <button type="submit" class="btn btn-primary btn-block">ارسال</button>
                </form>
            </div>
        </div>
    </div>

    <?php include "components/php/js_source.php"; ?>
 </body>
 </html>
