<!doctype HTML>
<html lang="fa">

<head>
     <title> سبد خرید</title>
     <?php include "components/php/head.php"; ?>
</head>

<body class="cart">
     <?php include "components/php/navigation.php";  ?>
     <div class="container">
          <div class="row">
               <div class="col-md-12 table-container">
                    <div class="box-container">
                         <table class="table table-striped table-responsive box border shadow table-condensed-xs">
                              <thead>
                                   <tr>
                                        <th>ردیف</th>
                                        <th>کد کالا</th>
                                        <th>عکس کالا</th>
                                        <th>نام برند</th>
                                        <th>مقدار/حجم</th>
                                        <th>فی</th>
                                        <th>فی کل</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                                   <tr>
                                        <td>1</td>
                                        <td>222222</td>
                                        <td><img src="_img/logo.png" alt="" class="img-responsive"></td>
                                        <td>برند</td>
                                        <td>10</td>
                                        <td>100000</td>
                                        <td>1000000</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div> <!-- box-container -->
               </div> <!-- table-container -->
               <div class="col-md-12">
                    <div class="row">
                         <form action="" method="post">
                              <div class="col-md-4 col-xs-5">
                                   <a href="#" title="چاپ" onclick="window.print()"><img src="_img/_svg/print.svg" alt="چاپ" class="price-icons"></a>
                                   <a href="#" title="دانلود PDF"><img src="_img/_svg/pdf.svg" alt="دانلود PDF" class="price-icons"></a>
                              </div>
                              <div class="col-md-8 col-xs-7">
                                   <span>ریال</span>
                                   <span id="total-price" class="total-price form-control">10000</span>
                                   <span>فی کل</span>
                              </div>
                              <div class="col-md-12 col-xs-12">
                                   <button type="submit" class="btn btn-success btn-block">پرداخت</button>
                              </div>
                         </form>
                    </div> <!-- col-md-12 row -->
               </div> <!-- col-md-12 -->
          </div><!-- container row -->
     </div><!-- container -->
     <?php include "components/php/js_source.php"; ?>
</body>

</html>
