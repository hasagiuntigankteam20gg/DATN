$(document).ready(function() {
  var toggler = document.querySelector('.toggle-switch');
  toggler.onclick = function() {
    toggler.classList.toggle('active');
  }
});
