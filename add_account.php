<!doctype HTML>
<html lang="fa">

<head>
    <title> شارژ حساب</title>
    <?php include "components/php/head.php"; ?>
</head>

<body class="account add-account">
    <?php include "components/php/navigation.php";  ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box-container box border shadow">
                    <h3 class="page-title">نقدی</h3>
                    <!-- when the bank payment is approved show this div, otherwise toggle its class to "hidden" -->
                    <div class="hover-container hidden">
                        <div class="hover-bg"></div>
                        <img src="_img/_svg/done.svg" alt="پرداخت با موفقیت انجام شد" class="hover">
                    </div>
                    <!-- -->
                    <div class="form-container">
                        <form action="" method="post">
                            <span class="select-text">مبلغ به عدد</span>
                            <input type="text" id="number1" placeholder="0">
                            <span class="select-text rial">ریال</span>
                            <p>
                                مبلغ به حروف
                                <span id="numberToText1">صفر ریال</span>
                            </p>
                            <button type="submit" class="btn btn-primary btn-block">پرداخت</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-container box border shadow">
                    <h3 class="page-title">اعتباری</h3>
                    <!-- contains some information -->
                    <div class="hover-container" >
                        <div class="hover-bg"></div>
                        <img src="_img/_svg/done.svg" alt="پرداخت با موفقیت انجام شد" class="hover">
                    </div>
                    <!-- -->
                    <div class="form-container">
                        <form action="" method="post">

                            <span class="select-text">مبلغ به عدد</span>
                            <input type="text" id="number2" placeholder="0">
                            <span class="select-text rial">ریال</span>
                            <p>
                                مبلغ به حروف
                                <span id="numberToText2">صفر ریال</span>
                            </p>
                            <button type="submit" class="btn btn-primary btn-block">پرداخت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row container -->
    </div> <!-- container -->
    <script type="text/javascript" src="_js/wordifyfa.min.js"></script>
    <?php include "components/php/js_source.php"; ?>
</body>

</html>
