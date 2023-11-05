var countDownDate = new Date("Nov 5, 2023 18:56:25").getTime();

var x = setInterval(function() {

  var y = document.getElementById("demo");
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    btn.style.display ='block';
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

//winner 
const win =  document.querySelector("#winner");
const load =  document.querySelector("#load");
const btn =  document.querySelector("#winner");

var myModal = new bootstrap.Modal(document.getElementById('modal'), {keyboard: false})

win.addEventListener('click' , function(){
load.style.display ='block';
setTimeout(function(){
myModal.show();
}, 5000);

});


