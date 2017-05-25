$(document).ready(function() {
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

    $('#input-send').click(function() {
    var numberBox = $('#input-number').val();
    $('#input-text').val(wordifyRials(numberBox));
    });
    $('#number1').val("");
    $('#number2').val("");
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
