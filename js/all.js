$(document).ready(()=>{
  // Dissabled link
  $("a.disabled").click( e => {
    e.preventDefault();
  });

  $(".sendMessage").click(()=>{
    var messageFromUser = prompt("Write your problem or suggestion:\n");
  });

  $(".about").click(()=>{
    alert("Made by beatiful girl Aigerim Tursynbek and just Maksat Kuanysh.")
  })

  $(".donate").click(()=>{
    alert("The best donate is to travel with you!")
  })
})
