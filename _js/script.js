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
});
