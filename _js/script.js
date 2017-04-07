// $(document).ready(function() {
//     $(window).on('resize', function(event) {
//         var windowWidth = $(window).width();
//         if (windowWidth > 992) {
//             console.log("asdasd");
//             var bottomPos = $('#sidebar').outerHeight(true) - $(window).height();
//             $(window).scroll(function() {
//                 if ($(window).scrollTop() > bottomPos) {
//                     $('#sidebar').css({
//                         'position': 'fixed',
//                         'top': 'auto',
//                         'bottom': '0px'
//                     });
//                 } else {
//                     $('#sidebar').css({
//                         'position': 'absolute',
//                         'top': '0px'
//                     });
//                 }
//             });
//         } else {
//             console.log("bbbbb")
//             $('#sidebar').css({
//                 'position': 'fixed',
//                 'top': '0',
//                 'bottom': '0px'
//             });
//         }
//     });
// });

// $(document).ready(function() {
//
//     enquire.register("screen and (min-width:992px)", function() {
//         var bottomPos = $('#sidebar').outerHeight(true) - $(window).height();
//         $(window).scroll(function() {
//             if ($(window).scrollTop() > bottomPos) {
//                 $('#sidebar').css({
//                     'position': 'fixed',
//                     'top': 'auto',
//                     'bottom': '0px'
//                 });
//             } else {
//                 $('#sidebar').css({
//                     'position': 'absolute',
//                     'top': '0px'
//                 });
//             }
//         });
//     });
// });
