    $(document).ready(function(){

        $('.beneficios_slick').not('.slick-initialized').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          dots: true,
          prevArrow: false,
        	nextArrow: false,
        });

      $(".menu-item-20 a").addClass( "btn-lineal btn-green btn-border-rev-o" );
      
    });



    function openNav() {
  document.getElementById("myNav").style.width = "100%";
  $("html").addClass("disabled-scroll");
  $("body").addClass("disabled-scroll");
  $("header").hide(0);
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    $("html").removeClass("disabled-scroll");
    $("body").removeClass("disabled-scroll");
    document.getElementById("myNav").style.width = "0%";
    $("header").show(0);
}