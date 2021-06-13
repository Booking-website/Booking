$(document).ready(()=>{
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

  const input1 = document.getElementById("card-number1");
  input1.addEventListener("keyup", ()=>{
    if(input1.value.length > 4){
      input1.value = null;
    }
  });

  const input2 = document.getElementById("card-number2");
  input2.addEventListener("keyup", ()=>{
    if(input2.value.length > 4){
      input2.value = null;
    }
  });

  const input3 = document.getElementById("card-number3");
  input3.addEventListener("keyup", ()=>{
    if(input3.value.length > 4){
      input3.value = null;
    }
  });

  const input4 = document.getElementById("card-number4");
  input4.addEventListener("keyup", ()=>{
    if(input4.value.length > 4){
      input4.value = null;
    }
  });

  let cardDate1 = document.getElementById("card-date1");
  cardDate1.addEventListener("keyup", ()=>{
    if (cardDate1.value > 12 || cardDate1.value < 0) {
      cardDate1.value = null;
    }
  });

  const cardDate2 = document.getElementById("card-date2");
  cardDate2.addEventListener("keyup", ()=>{
    let currentYear = new Date();
    currentYear = currentYear.getYear() - 100;
    let afterTenYears = currentYear + 10;
    if(cardDate2.value > afterTenYears){
      cardDate2.value = null;
    }
    if (cardDate2.value < currentYear) {
      cardDate2.value = cardDate2.value.slice(0,1);
    }
    if(cardDate2.value == currentYear){
      let currentMonth = new Date();
      currentMonth = currentMonth.getMonth() + 1;
      if(cardDate1.value < currentMonth){
        cardDate1.value = null;
      }
    }
  });

  const cvv = document.getElementById("cvv");
  cvv.addEventListener("keyup", ()=>{
    if(cvv.value > 1000 || cvv.value < 0){
      cvv.value = null;
    }
  });
})
