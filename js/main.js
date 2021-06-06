$(document).ready(function() {
  // Go to top button
  $(".goTopBtn").click(function() {
    $('html, body').animate({scrollTop:0},'1000');
  });

  // Card windows
  $(".part1 .card1").click(()=>{
    $(".p1c1_popup").addClass("show");
  });
  $(".p1c1_popup #closePopup").click(()=>{
    $(".p1c1_popup").removeClass("show");
  });

  $(".part1 .card2").click(()=>{
    $(".p1c2_popup").addClass("show");
  });
  $(".p1c2_popup #closePopup").click(()=>{
    $(".p1c2_popup").removeClass("show");
  });

  $(".part1 .card3").click(()=>{
    $(".p1c3_popup").addClass("show");
  });
  $(".p1c3_popup #closePopup").click(()=>{
    $(".p1c3_popup").removeClass("show");
  });

  $(".part2 .card1").click(()=>{
    $(".p2c1_popup").addClass("show");
  });
  $(".p2c1_popup #closePopup").click(()=>{
    $(".p2c1_popup").removeClass("show");
  });

  $(".part2 .card2").click(()=>{
    $(".p2c2_popup").addClass("show");
  });
  $(".p2c2_popup #closePopup").click(()=>{
    $(".p2c2_popup").removeClass("show");
  });

  $(".part2 .card3").click(()=>{
    $(".p2c3_popup").addClass("show");
  });
  $(".p2c3_popup #closePopup").click(()=>{
    $(".p2c3_popup").removeClass("show");

  });
  $(".part4 .card1").click(()=>{
    $(".p4c1_popup").addClass("show");
  });
  $(".p4c1_popup #closePopup").click(()=>{
    $(".p4c1_popup").removeClass("show");
  });

  $(".part4 .card2").click(()=>{
    $(".p4c2_popup").addClass("show");
  });
  $(".p4c2_popup #closePopup").click(()=>{
    $(".p4c2_popup").removeClass("show");

  });
  $(".part4 .card3").click(()=>{
    $(".p4c3_popup").addClass("show");
  });
  $(".p4c3_popup #closePopup").click(()=>{
    $(".p4c3_popup").removeClass("show");
  });


  // Set date input
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
  document.getElementById("from_date").setAttribute("min", today);
})
