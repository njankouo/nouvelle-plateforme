/**
 * author:@kemajoufred 
 *
 * partie délicate, faire très attention
 */
 $(document).ready(function(){
    $('.dropdown-trigger').dropdown({
      inDuration: 300,
      outDuration: 225,
      coverTrigger:false,
      hover: true, // Activate on hover
      // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
  }
);
    $('.sidenav').sidenav(); 
    
    $('.collapsible').collapsible({
      accordion:false
    }); 
    
    var btn = $('#button');
  
      $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
          btn.addClass('show');
      } else {
          btn.removeClass('show');
      }
      });
  
      btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
      });
   
    
  });
/**
 * Où il faut continuer, sans toucher les fonctions du dessus
 * ici, on peut bien faire du ajax ou tout autre langage concernant le js
 * faire bien attention, car ici le moindre changement peut être catastrophique.
 */