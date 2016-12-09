$(document).ready(function(){
  // Add smooth scrolling to all links
$("#menu-menu_general").prepend('<li id="img_menu"><a href="#home" data-target="home"><img class="nav-logo" src="http://localhost/A2/Methodologie_Agile-Scrum/wp-content/themes/methode-agile/img/logo-min.png" alt="Betraying The Martyrs" /></a></li>');
$("#img_menu").insertBefore(".menu-item:eq(3)");
$('.menu-item>a').addClass("mon_scroll");
  $(".mon_scroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});



