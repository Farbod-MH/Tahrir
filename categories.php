<!doctype HTML>
<html lang="fa">

<head>
     <title> محصولات</title>
     <?php include "components/php/head.php"; ?>
</head>

<body class="category">
     <?php include "components/php/navigation.php";  ?>
     <div class="container">
          <div class="row">
               <div class="box-container">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                         <div class="category-container box shadow">
                              <div class="img-container">
                                   <a href="#">
                                        <img src="http://placehold.it/300x300" class="img-responsive" alt="عکس محصول">
                                   </a>
                              </div>
                              <div class="category-name">
                                   <p>
                                        خودکار
                                   </p>
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
     <script type="text/javascript" src="_js/jquery.ui.touch-punch.min.js"></script>
     <script>
               $( "#slider" ).slider({
     			range: true,
                    min: -10000000,
                    max: -1000,
     			values: [ -8000000, -2000 ],
                    slide: function(event, ui) {
                         $(".amount .min-price").text(addCommas (ui.values[1]*-1) + " ریال ");
                         $(".amount .max-price").text(addCommas (ui.values[0]*-1) + " ریال ");
                    }
     		});

               $(".amount .min-price").text(addCommas ($("#slider").slider( "values", 1 )*-1  ) + " ریال ");
               $(".amount .max-price").text(addCommas ($("#slider").slider( "values", 0 )*-1  ) + " ریال ");
     		// Hover states on the static widgets
     		$( "#dialog-link, #icons li" ).hover(
     			function() {
     				$( this ).addClass( "ui-state-hover" );
     			},
     			function() {
     				$( this ).removeClass( "ui-state-hover" );
     			}
     		);

			$(".product-quantity").on('input', function(){
				var $this = $(this);
				var values = $this.val();
				var quantity = $this.closest('.row').find('.product-package').selectpicker('val');
				$this.closest('.row').find('.product-final').text(values * quantity);
			})
               $( ".product-package" ).change(function() {
				var $this = $(this);
				var values = $this.selectpicker('val');
				var quantity = $this.closest('.row').find('.product-quantity').val();
				$this.closest('.row').find('.product-final').text(values * quantity);
	          });
	</script>
</body>

</html>
