$(document).ready(function() {
  // $("#goTopBtn").click(function(e) {
  //   e.preventDefault;
  //   $("html, body").animate({scrollTop: 0}, "slow");
  // });
  // $('#goTopBtn').click(function(){
  //       $("html, body").animate({ scrollTo: 0 }, 500);
  //       return false;
  //   });

  $("#roundtrip").on("click", function() {
    $(this).addClass("active");
    $(".roundtrip").show();
    $("#one_way").removeClass("active");
    $(".one-way").hide();
    // $("#multi_city").removeClass("active");
    // $(".multi-city").hide();
    set_min_date();
  });
  $("#one_way").on("click", function() {
    $(this).addClass("active");
    $(".one-way").show();
    $("#roundtrip").removeClass("active");
    $(".roundtrip").hide();
    // $("#multi_city").removeClass("active");
    // $(".multi-city").hide();
    set_min_date();
  });
});


function set_min_date() {
  var date_from = $("#date-from");;
  date_from.on("click", function(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm
        }
    today = yyyy+'-'+mm+'-'+dd;

    document.getElementById('date-from').setAttribute("min", today);
    document.getElementById('date-to').setAttribute("min", today);
    date_from.on("change", function(){
      var date_to = $(this).val();
      document.getElementById('date-to').setAttribute("min", date_to);
    });
  });
};

// function toggle_bcc_ways(element) {
//   if (element.hasClass("active")) {
//     element.attr("style", "background-color: #d7e7f2");
//   } else {
//     element.attr("style", "background-color: transparent");
//   }
// };

// $("#multi_city").on("click", function() {
//   $(this).addClass("active");
//   $(".multi-city").show();
//   $("#roundtrip").removeClass("active");
//   $(".roundtrip").hide();
//   $("#one_way").removeClass("active");
//   $(".one-way").hide();
//   var date_from = $("#date-from");;
//   date_from.on("click", function(){
//     var today = new Date();
//     var dd = today.getDate();
//     var mm = today.getMonth()+1;
//     var yyyy = today.getFullYear();
//      if(dd<10){
//             dd='0'+dd
//         }
//         if(mm<10){
//             mm='0'+mm
//         }
//     today = yyyy+'-'+mm+'-'+dd;
//     $(".multi-city input[type='date']").each(function (i, el) {
//       el.setAttribute("min", today);
//       // $(".multi-city input").val(set_date);
//     });
//     // document.getElementById('date-from').setAttribute("min", today);
//     // document.getElementById('date-to').setAttribute("min", today);
//   });
// });
// $(".multi-city input").each(function(i, el){
//   $(".multi-city input").on("change", function(){
//     var set_date = $(".multi-city input").val();
//     $(".multi-city input[type='date']").each(function (i, el) {
//       $(".multi-city input").val(set_date);
//     });
//   });
// });


// $("#logo").on("hover", function() {
//   $("#logo").setAttribute("src", "../img/Booking-red.png");
// });


// function getRandomInt(max) {
//   return Math.floor(Math.random() * max);
// }
// var rand_pos = getRandomInt(9);
// if (rand_pos == 0) {
//   $("#qr_code").css("background-position", "left top");
// }else if (rand_pos == 1) {
//   $("#qr_code").css("background-position", "center top");
// }else if (rand_pos == 2) {
//   $("#qr_code").css("background-position", "right top");
// }else if (rand_pos == 3) {
//   $("#qr_code").css("background-position", "left center");
// }else if (rand_pos == 4) {
//   $("#qr_code").css("background-position", "center center");
// }else if (rand_pos == 5) {
//   $("#qr_code").css("background-position", "right center");
// }else if (rand_pos == 6) {
//   $("#qr_code").css("background-position", "left bottom");
// }else if (rand_pos == 7) {
//   $("#qr_code").css("background-position", "center bottom");
// }else if (rand_pos == 8) {
//   $("#qr_code").css("background-position", "right bottom");
// }
// $(".goTopBtn").click(function() {
//   window.scrollTo({top: 0, behavior: "smooth"}, "slow");
// })


// $(".goTopBtn").click(function() {
//   window.scrollTo({top: 0, behavior: "smooth"}, "slow");
// })
