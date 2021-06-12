// $(document).ready(()=>{
  // Credit card
  $("input#bank_card").click(()=>{
    document.getElementById("bank_card").setAttribute("checked", "checked");
    if ($('input#bank_card').is(':checked')) {
      $(".main__bank-card-dropdown").addClass("show");
    } else {
      $(".main__bank-card-dropdown").removeClass("show");
    }
  });
  $("input#debit_card").click(()=>{
    document.getElementById("bank_card").removeAttribute("checked");
    $(".main__bank-card-dropdown").removeClass("show");
  });
  $("input#net_banking").click(()=>{
    document.getElementById("bank_card").removeAttribute("checked");
    $(".main__bank-card-dropdown").removeClass("show");
  });

  $(".flipToBack").click(()=>{
    $('.front').css("transform", "rotateY(180deg)");
    $('.back').css("transform", "rotateY(360deg)");
  });
  $(".flipToFront").click(()=>{
    $('.front').css("transform", "rotateY(0deg)");
    $('.back').css("transform", "rotateY(180deg)");
  });

  // $("#card-number1").keyup(()=>{
  //   if (this.value.length > 4) {
  //     this.value = this.value.slice(0, 4);
  //   }
  // });
  $("#card-number1").on('input', () => {
    if ($(this).val().length > 4) {
      $(this).val() = this.value.slice(0, 4);
    }
  });
  $("input.card-date1").keyup(()=>{
    if (this.value > 12) {
      this.value = this.value.slice(0, 1);
    }
    if (this.value.charAt(0) > 1) {
      this.value = this.value.slice(0, 0);
    }
  });
  $("input.card-date2").keyup(()=>{
    if (this.value.charAt(0) == 0) {
      this.value = this.value.slice(0, 0);
    }
    if (this.value.length > 2) {
      this.value = this.value.slice(0, 2);
    }
    if (this.value < 10) {
      this.value = this.value.slice(0, 1);
    }
  });
  $("input.card-cvv").keyup(()=>{
    if (this.value.length > 3) {
      this.value = this.value.slice(0, 3);
    }
  });
// })
