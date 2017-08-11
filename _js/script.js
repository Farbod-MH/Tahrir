$(document).ready(function() {
     //index functions
     var wHeight = $(window).height();
     $('.full-height').css('height', wHeight);
     $('.full-height').each(function() {
          var $this = $(this);
          $this.children('.row').each(function() {
               $this.css('min-height', $(this).height());
          });
     });
     $(window).resize(function() {
          var wHeight = $(window).height();
          $('.full-height').css('height', wHeight);
          $('.full-height').each(function() {
               var $this = $(this);
               $this.children('.row').each(function() {
                    $this.css('min-height', $(this).height());
               });
          });
     });
     //
     //navigation functions
     $("#show-main-nav").on("click", function() {
          $(".account-nav").fadeOut("fast", function() {
               $(".main-nav").fadeIn("slow");
          });
     });
     $("#show-account-nav").on("click", function() {
          $(".main-nav").fadeOut("fast", function() {
               $(".account-nav").fadeIn("slow");
          });
     });
     $("#hide-products-nav").on("click", function() {
          $(".products-nav").fadeOut("fast", function() {
               $(".main-nav").fadeIn("slow");
               $('.products .main-nav .dropdown').addClass('open');
          });
     });
     //
     //responsive menu function
     $(".hamburger").click(function() {
          $(".hamburger").toggleClass("is-active");
          $("#sidebar").toggleClass("show");
          if ($("#sidebar").hasClass("show")) {
               $("body").css("overflow", "hidden");
          } else {
               $("body").css("overflow", "visible");
          }
     });
     $(".container").click(function() {
          if ($("#sidebar").hasClass("show") && $(".hamburger").hasClass("is-active")) {
               $("#sidebar").removeClass("show");
               $(".hamburger").removeClass("is-active");
               $("body").css("overflow", "visible");
          }
     });
     //
     //product-detail carousels
     $('#products-carousel-1').carousel({
          interval: 0
     });
     $('#products-carousel-2').carousel({
          interval: 0
     });
     $('.products-carousel .item').each(function() {
          var itemToClone = $(this);
          for (var i = 1; i < 4; i++) {
               itemToClone = itemToClone.next();
               if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
               }
               itemToClone.children(':first-child').clone().addClass("cloneditem-" + (i)).appendTo($(this));
          }
     });
     //
}); //document ready function

function addCommas(nStr) {
     nStr += '';
     x = nStr.split('.');
     x1 = x[0];
     x2 = x.length > 1 ? '.' + x[1] : '';
     var rgx = /(\d+)(\d{3})/;
     while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
     }
     return x1 + x2;
}

function printImg() {
     popup = window.open();
     var img = $("#modalImg").attr('src');
     popup.document.write("<img src='" + img + "' </img>");
     popup.focus(); //required for IE
     popup.print();
};

function changeImgSrc(src) {
     $("#modalImg").attr('src', src);
};

$('#number1').on('input', function() {
     if ($('#number1').val() == "") {
          $('#numberToText1').text("صفر ریال");
     } else {
          var rawNumber = $('#number1').val();
          $('#numberToText1').text(wordifyRials(rawNumber));
          $('#number1').val(rawNumber);
     }
});
$('#number2').on('input', function() {
     if ($('#number2').val() == "") {
          $('#numberToText2').text("صفر ریال");
     } else {
          var rawNumber = $('#number2').val();
          $('#numberToText2').text(wordifyRials(rawNumber));
          $('#number2').val(rawNumber);
     }
});
$('.see-more').click(function() {
     var $this = $(this);
     $this.toggleClass('see-more');
     if ($this.hasClass('see-more')) {
          $this.text('بیشتر...');
     } else {
          $this.text('کمتر...');
     }
});

// search function
$(function() {
     $.widget("custom.catcomplete", $.ui.autocomplete, {
          _create: function() {
               this._super();
               this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
          },
          _renderMenu: function(ul, items) {
               var that = this,
                    currentCategory = "";
               $.each(items, function(index, item) {
                    var li;
                    if (item.category != currentCategory) {
                         ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
                         currentCategory = item.category;
                    }
                    li = that._renderItemData(ul, item);
                    if (item.category) {
                         li.attr("aria-label", item.category + " : " + item.label);
                    }
               });
          }
     });
     var data = [{
               label: "کاغذی",
               category: "مداد"
          },
          {
               label: "ای125",
               category: "مداد"
          },
          {
               label: "ای123",
               category: "مداد"
          },
          {
               label: "ای127",
               category: "مداد"
          },
          {
               label: "ای129",
               category: "مداد"
          },
          {
               label: "ای124",
               category: "مداد"
          },
          {
               label: "بی222",
               category: "مداد"
          },
          {
               label: "بیک",
               category: "خودکار"
          },
          {
               label: "پنتر",
               category: "خودکار"
          },
          {
               label: "فرانسوی",
               category: "خودکار"
          },
          {
               label: "دبل ای",
               category: "کاغذ"
          },
          {
               label: "ییی",
               category: "کاغذ"
          },
          {
               label: "یسش",
               category: "کاغذ"
          }
     ];

     $("#searchInput").catcomplete({
          delay: 0,
          source: data
     });
});



$("#searchInput").on("keyup blur", function(event, ui) {
     if ($('#searchInput').catcomplete('widget').is(':visible')) {
          $('#searchInput, .input-group-addon').addClass('selected');
     } else if (!$('#searchInput').catcomplete('widget').is(':visible')) {
          $('#searchInput, .input-group-addon').removeClass('selected');
     }
});
