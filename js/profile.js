$(".flipToBack").click(function() {
  $('.front').css("transform", "rotateY(180deg)");
  $('.back').css("transform", "rotateY(360deg)");
});
$(".flipToFront").click(function() {
  $('.front').css("transform", "rotateY(0deg)");
  $('.back').css("transform", "rotateY(180deg)");
});
$(document).ready(function() {
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
  })
});
