$(function() {
   $('#profile').on('click', function() {
       $('#profile-image-upload').click();
   });
});

       function show() {
  document.getElementById("dThreshold").style.display ="block";
}

function showPassword() {

   var key_attr = $('#key').attr('type');

   if(key_attr != 'text') {

       $('.checkbox').addClass('show');
       $('#key').attr('type', 'text');

   } else {

       $('.checkbox').removeClass('show');
       $('#key').attr('type', 'password');

   }

}

// When the DOM is ready, run this function
$(document).ready(function() {
 //Set the carousel options
 $('#quote-carousel').carousel({
   pause: true,
   interval: 4000,
 });
});



//GOOGLE MAP
