$(document).ready(function() {
  //index functions
  var wHeight = $(window).height();
  $('.full-height').css('height', wHeight);
  $('.full-height').each(function(){
    var $this = $(this);
    $this.children('.row').each(function(){
        $this.css('min-height' , $(this).height() );
    });
  });
  $(window).resize(function (){
    var wHeight = $(window).height();
    $('.full-height').css('height', wHeight);
    $('.full-height').each(function(){
      var $this = $(this);
      $this.children('.row').each(function(){
          $this.css('min-height' , $(this).height() );
      });
    });
  });
  var topoffset = 80;
  if ($(window).width() > 992) {
    topoffset = 0;
  }
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
    console.log(topoffset);
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
	$(window).scroll(function () {
    console.log(topoffset);
		var windowsPos = $(window).scrollTop();
    $(".main-nav>li>a").removeClass("active");
    if (windowsPos > $("#price").offset().top) {
      $(".main-nav>li>a").removeClass("active");
      $("a[href$='#price']").addClass("active");
    };
    if (windowsPos > $("#about-us-page").offset().top) {
      $(".main-nav>li>a").removeClass("active");
      $("a[href$='#about-us-page']").addClass("active");
    };
    if (windowsPos > $("#page-rules").offset().top) {
      $(".main-nav>li>a").removeClass("active");
      $("a[href$='#page-rules']").addClass("active");
    };
    if (windowsPos > $("#customers").offset().top) {
      $(".main-nav>li>a").removeClass("active");
      $("a[href$='#customers']").addClass("active");
    };
	})
  //
	//navigation functions
    $("#show-main-nav").on("click", function() {
        $(".account-nav").fadeOut("fast" , function() {
            $(".main-nav").fadeIn("slow");
        });
    });
    $("#show-account-nav").on("click", function() {
        $(".main-nav").fadeOut("fast" , function() {
            $(".account-nav").fadeIn("slow");
        });
    });
    $("#hide-products-nav").on("click", function() {
        $(".products-nav").fadeOut("fast" , function() {
            $(".main-nav").fadeIn("slow");
            $('.products .main-nav .dropdown').addClass('open');
        });
    });
      $(".container").click(function(){
        if ($(".navbar-toggle").hasClass("is-active")) {
          $(".navbar-toggle").removeClass("is-active");
        }

      });

      $(".navbar-toggle").click(function(){
        $(this).toggleClass("is-active");
      });
	//
	//add-account functions
    $('#input-send').click(function() {
    var numberBox = $('#input-number').val();
    $('#input-text').val(wordifyRials(numberBox));
    });
    $('#number1').val("");
    $('#number2').val("");
    //
    //product-detail carousels
    $('#products-carousel-1').carousel({ interval: 0 });
    $('#products-carousel-2').carousel({ interval: 0 });
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
});

function addCommas(nStr){
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
    popup.document.write("<img src='"+ img + "' </img>");
    popup.focus(); //required for IE
    popup.print();
};

function changeImgSrc(src){
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
$('.see-more').click(function(){
		var $this = $(this);
		$this.toggleClass('see-more');
		if($this.hasClass('see-more')){
			$this.text('بیشتر...');
		} else {
			$this.text('کمتر...');
		}
	});

// search function
$( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
          }
        });
      }
    });
    var data = [
      { label: "کاغذی", category: "مداد" },
      { label: "ای125", category: "مداد" },
      { label: "ای123", category: "مداد" },
      { label: "ای127", category: "مداد" },
      { label: "ای129", category: "مداد" },
      { label: "ای124", category: "مداد" },
      { label: "بی222", category: "مداد" },
      { label: "بیک", category: "خودکار" },
      { label: "پنتر", category: "خودکار" },
      { label: "فرانسوی", category: "خودکار" },
      { label: "دبل ای", category: "کاغذ" },
      { label: "ییی", category: "کاغذ" },
      { label: "یسش", category: "کاغذ" }
    ];

    $( "#searchInput" ).catcomplete({
      delay: 0,
      source: data
    });
  } );



$("#searchInput").on("keyup blur", function (event, ui) {
  if ($('#searchInput').catcomplete('widget').is(':visible')) {
    $('#searchInput, .input-group-addon').addClass('selected');
  } else if (!$('#searchInput').catcomplete('widget').is(':visible')) {
     $('#searchInput, .input-group-addon').removeClass('selected');
  }
});
