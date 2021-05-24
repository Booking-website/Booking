$(document).ready(function() {
  // Scroll Reveal
  // ScrollReveal().reveal('.flights, .part1, .part2, .part3, .part4, .part5', { delay: 100 });


  $(".goTopBtn").click(function() {
    $('html, body').animate({scrollTop:0},'500');
    // window.scrollTo({top: 0, behavior: "smooth"});
  });






  set_min_date();
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
