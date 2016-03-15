$( document ).ready(function() {
    
    for (i = 1; i <= 12; i++) { 

    $("#icon" + i).hover(function () {
        $(this).toggleClass("colored");
    });

    }
    

    $(".btnHome").click(function() {
        $('html, body').animate({
            scrollTop: $(".section1").offset().top
        }, 2000);
    });
        
    $(".btnProjects").click(function() {
        $('html, body').animate({
            scrollTop: $(".section2").offset().top
        }, 2000);
    });
        
    $(".btnAbout").click(function() {
        $('html, body').animate({
            scrollTop: $(".section3").offset().top
        }, 2000);
    });
        
    $(".btnContact").click(function() {
        $('html, body').animate({
            scrollTop: $(".section4").offset().top
        }, 2000);
    });
    
    $("#projectKorfballButton").click(function() {
        $("#projectKorfballDescription").toggleClass("minimize");
        $("#iconp1").toggleClass("iconArrowOpen");
    });
    
     $("#projectFoodButton").click(function() {
        $("#projectFoodDescription").toggleClass("minimize");
        $("#iconp2").toggleClass("iconArrowOpen");
    });
    
    
        

  $('body,html').bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup', function(e){
     if ( e.which > 0 || e.type == "mousedown" || e.type == "mousewheel"){
      $("html,body").stop();
     }
    });
    
    
    /*  Interests animations */ 
    
    
    $("#guitarIcon").click(function() {
    
      $(".interestText").removeClass("interestVisible");
      $("#guitarText").addClass("interestVisible");
    
      $(".icon2").removeClass("active");
      $("#guitarIcon").addClass("active");
    
    });
    
    $("#forestIcon").click(function() {
        
      $(".interestText").removeClass("interestVisible");
      $("#forestText").addClass("interestVisible");
        
      $(".icon2").removeClass("active");
      $("#forestIcon").addClass("active");
        
    });
    
    $("#yodaIcon").click(function() {
        
      $(".interestText").removeClass("interestVisible");
      $("#yodaText").addClass("interestVisible");
        
      $(".icon2").removeClass("active");
      $("#yodaIcon").addClass("active");

        
    });
    
    $("#beerIcon").click(function() {
        
      $(".interestText").removeClass("interestVisible");
      $("#beerText").addClass("interestVisible");
        
      $(".icon2").removeClass("active");
      $("#beerIcon").addClass("active");
        
    });
    
    $("#diceIcon").click(function() {
    
      $(".interestText").removeClass("interestVisible");
      $("#diceText").addClass("interestVisible");
        
      $(".icon2").removeClass("active");
      $("#diceIcon").addClass("active");
        
    });
    
    $("#gameIcon").click(function() {
        
      $(".interestText").removeClass("interestVisible");
      $("#gameText").addClass("interestVisible");
        
      $(".icon2").removeClass("active");
      $("#gameIcon").addClass("active");

    });
    
    $("#fitnessIcon").click(function() {
        
      $(".interestText").removeClass("interestVisible");
      $("#fitnessText").addClass("interestVisible");
        
      $(".icon2").removeClass("active");
      $("#fitnessIcon").addClass("active");
        
    });
    
    $("#televisionIcon").click(function() {
        
      $(".interestText").removeClass("interestVisible");
      $("#televisionText").addClass("interestVisible");
              
      $(".icon2").removeClass("active");
      $("#televisionIcon").addClass("active");
        
    });
   
});