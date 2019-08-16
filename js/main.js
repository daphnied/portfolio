//show when 20px from the top of page
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       document.getElementById("myBtn").style.display = "block";
   } else {
       document.getElementById("myBtn").style.display = "none";
   }
}

// Scolls to top when clicked
function topFunction() {
   document.body.scrollTop = 0; // Safari
   document.documentElement.scrollTop = 0; // Chrome, Firefox, IE & Opera
}
