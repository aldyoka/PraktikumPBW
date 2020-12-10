// Get the dat
var dat = document.getElementById("mydat");

// Get the button that opens the dat
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the dat
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the dat 
btn.onclick = function() {
  dat.style.display = "block";
}

// When the user clicks on <span> (x), close the dat
span.onclick = function() {
  dat.style.display = "none";
}

// When the user clicks anywhere outside of the dat, close it
window.onclick = function(event) {
  if (event.target == dat) {
    dat.style.display = "none";
  }
}