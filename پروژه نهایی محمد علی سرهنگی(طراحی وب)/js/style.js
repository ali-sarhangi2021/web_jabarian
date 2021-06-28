$(document).ready(function() {
  $("#owl-about").owlCarousel({

  navigation : true,
  slideSpeed : 300,
  paginationSpeed : 400,
  singleItem : true,
  autoPlay : true,

  // "singleItem:true" is a shortcut for:
  // items : 1,
  // itemsDesktop : false,
  // itemsDesktopSmall : false,
  // itemsTablet: false,
  // itemsMobile : false

  });
});

$(document).on('click', 'a', function(event){
  if($(this).hasClass("menu-btn")){
    event.preventDefault();

      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 700);
  }
  else{
  }
});
