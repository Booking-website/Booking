$(document).ready(function() {
  // Scroll Reveal
  // ScrollReveal().reveal('.flights, .part1, .part2, .part3, .part4, .part5', { delay: 100 });



  $(".goTopBtn").click(function() {
    $('html, body').animate({scrollTop:0},'500');
    // window.scrollTo({top: 0, behavior: "smooth"});
  });


  $("a.disabled").on('click', (e) => {
    e.preventDefault();
  })



  $(".flipToBack").click(function() {
    $('.front').css("transform", "rotateY(180deg)");
    $('.back').css("transform", "rotateY(360deg)");
  });
  $(".flipToFront").click(function() {
    $('.front').css("transform", "rotateY(0deg)");
    $('.back').css("transform", "rotateY(180deg)");
  });

  $("input#bank_card").click(function() {
    document.getElementById("bank_card").setAttribute("checked", "checked");
    if($('input#bank_card').is(':checked')){
        $(".main__bank-card-dropdown").addClass("show");
    } else{
      $(".main__bank-card-dropdown").removeClass("show");
    }
  });
  $("input#debit_card").click(function() {
    document.getElementById("bank_card").removeAttribute("checked");
    $(".main__bank-card-dropdown").removeClass("show");
  });
  $("input#net_banking").click(function() {
    document.getElementById("bank_card").removeAttribute("checked");
    $(".main__bank-card-dropdown").removeClass("show");
  });






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








  $("input.card-number").keyup(function() {
    if (this.value.length > 4) {
      this.value = this.value.slice(0,4);
    }
  });
  $("input.card-date1").keyup(function() {
    if (this.value > 12) {
      this.value = this.value.slice(0,1);
    }
    if (this.value.charAt(0) > 1) {
        this.value = this.value.slice(0,0);
    }
  });
  $("input.card-date2").keyup(function() {
    if (this.value.charAt(0) == 0) {
      this.value = this.value.slice(0,0);
    }
    if (this.value.length > 2) {
      this.value = this.value.slice(0,2);
    }
    if (this.value < 10) {
      this.value = this.value.slice(0,1);
    }
  });
  $("input.card-cvv").keyup(function() {
    if (this.value.length > 3) {
      this.value = this.value.slice(0,3);
    }
  });
 // let inputDate = document.querySelector(".one-way input[type=\"date\"]");
 //  inputDate.click(()=>{
 //
 //    // set_min_date(inputDate);
  // });
 //
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
  var yyyy = today.getFullYear();
  if(dd<10){
    dd='0'+dd
  }
  if(mm<10){
    mm='0'+mm
  }
  today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("from_date").setAttribute("min", today);


  // $("footer li a").click((e) => {
  //   e.preventDefault();
  // });

  // $(".ourPartners").click(()=>{
  //   $(".partner").animate([
  //     {"transform", "scale3d(1.5, 1.5, 1.5)"}
  //   ]){
  //     delay: 4000
  //   }
  // });


});


// function set_min_date(props) {
//   props.inputDate.on("click", function(){
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
//
//     props.inputDate.setAttribute("min", today);
//     // date_from.on("change", function(){
//     //   var date_to = $(this).val();
//     //   document.getElementById('date-to').setAttribute("min", date_to);
//     // });
//   });
// };
