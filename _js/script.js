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
    $('#datepickerfrom').datepicker({
        onSelect: function(dateText, inst) {
            $('#datepickerto').datepicker('option', 'minDate', new JalaliDate(inst['selectedYear'], inst['selectedMonth'], inst['selectedDay']));
        }
    });
    $('#datepickerto').datepicker();

    $('#input-send').click(function() {
    var numberBox = $('#input-number').val();
    $('#input-text').val(wordifyRials(numberBox));
    });
    $('#number1').val("");
    $('#number2').val("");
});

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
    }
});
$('#number2').on('input', function() {
    if ($('#number2').val() == "") {
        $('#numberToText2').text("صفر ریال");
    } else {
    var rawNumber = $('#number2').val();
    $('#numberToText2').text(wordifyRials(rawNumber));
    }
});

$('#datepickerfrom').on('blur', function(){
   $(this).removeClass('datepicker-selected');
   $('#datepickerfromContainer').removeClass('datepicker-container');
}).on('focus', function(){
   $(this).addClass('datepicker-selected');
   $('#datepickerfromContainer').addClass('datepicker-container')
});
$('#datepickerto').on('blur', function(){
   $(this).removeClass('datepicker-selected');
   $('#datepickertoContainer').removeClass('datepicker-container');
}).on('focus', function(){
   $(this).addClass('datepicker-selected');
   $('#datepickertoContainer').addClass('datepicker-container')
});
