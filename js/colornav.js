$(document).ready(function() {
    var $window = $(window);
    var number = 1 + Math.floor(Math.random() * 12);
    function checkWidth() {
        
        var windowsize = $window.width();
        if (windowsize < 992) {
           $( "nav").removeClass( "bg-transparent" ).addClass( "bg-darker" );
           $( "#logo").removeClass( "logo-lg" ).addClass( "logo-sm" );
        } else if (windowsize > 992){
           $( "nav").removeClass( "bg-darker" ).addClass( "bg-transparent" );
           $( "#logo").removeClass( "logo-sm" ).addClass( "logo-lg" );
        }
        
    }
    checkWidth();
    $(window).resize(checkWidth);
});

$(window).scroll(function() {
  var $winWidth = $(window).width();
  var $fromTop = $(window).scrollTop();

  if ($fromTop == 0 && $winWidth > 1000){
    $( "nav").removeClass( "bg-darker" ).addClass( "bg-transparent" );
    $( "#logo").removeClass( "logo-sm" ).addClass( "logo-lg" );
    $( "nav").fadeIn( "slow" );
    console.log("Fade In");
  } else if ($fromTop > 3){
    $( "nav").removeClass( "bg-transparent" ).addClass( "bg-darker" );
    $( "#logo").removeClass( "logo-lg" ).addClass( "logo-sm" );
  }
});