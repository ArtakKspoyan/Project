var count_section_1 = 0;
var count_section_2 = 0;
var count_section_3 = 0;


$(document).on({
  mouseenter: function() {
    $(".home-one-left").addClass("home-one-left-expanded");
    $(".home-one-right").addClass("home-one-right-collapsed");
    $(".home-one-left-main").addClass("left-hero-tilt-expanded");
    $(".home-one-right-main").addClass("right-hero-tilt-callapse");
    $(".initial-right").css("display","none");
    $(".expanded").css("display","block");
    $(".initial").css("display","none");
  },
  mouseleave: function() {
    $(".home-one-left").removeClass("home-one-left-expanded");
    $(".home-one-right").removeClass("home-one-right-collapsed");
    $(".home-one-left-main").removeClass("left-hero-tilt-expanded");
    $(".home-one-right-main").removeClass("right-hero-tilt-callapse");
    $(".initial-right").css("display","block");
    $(".expanded").css("display","none");
    $(".initial").css("display","block");
  }
}, ".home-one-left");
      
      
      
      
      
$(document).on({
  mouseenter: function() {
    $(".home-one-left").addClass("home-one-left-collapsed");
    $(".home-one-right").addClass("home-one-right-expanded");
    $(".home-one-rihgt-main").addClass("right-hero-tilt-expanded");
    $(".home-one-left-main").addClass("left-hero-tilt-callapse");
    $(".initial").css("display","none");
    $(".expanded-right").css("display","block");
    $(".initial-right").css("display","none");
  },
  mouseleave: function() {
    $(".home-one-left").removeClass("home-one-left-collapsed");
    $(".home-one-right").removeClass("home-one-right-expanded");
    $(".home-one-rihgt-main").removeClass("right-hero-tilt-expanded");
    $(".home-one-left-main").removeClass("left-hero-tilt-callapse");
    $(".initial").css("display","block");
    $(".expanded-right").css("display","none");
    $(".initial-right").css("display","block");
  }
}, ".home-one-right");
     

// Detect mouse hover, change the active class. PORTFOLIO
$( document ).ready(function() {
    $( ".portfolio_card_common" )
      .mouseenter(function() {
       /* setTimeOut(function(){
          $("#_11card_portfolio_card_two").removeClass('_11card_active');
        }, 500)*/
        $("#_11card_portfolio_card_two").removeClass('_11card_active');
      })
      .mouseleave(function() {
        $("#_11card_portfolio_card_two").addClass('_11card_active');
    });
});


// Detect mouse hover, change the active class. USE SECTION
$( document ).ready(function() {
    $( "._15card_all" )
      .mouseenter(function() {
       /* setTimeOut(function(){
          $("#_11card_portfolio_card_two").removeClass('_11card_active');
        }, 500)*/
        $("#_15card_active").removeClass('_15card_active');
      })
      .mouseleave(function() {
        $("#_15card_active").addClass('_15card_active');
    });
});

//MENU
$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    if (scrollTop >= 300) {
      $('#menu').removeClass(  ).addClass( "menu_fixed" );
    } else  {
      $('.menu_fixed').removeClass(  ).addClass( "_13menu" );
    } 
  });
});

//CEO CARD
$(document).on({
  mouseenter: function() {
    $("._17card_left").addClass("_17card_left_expanded");
    $("._17card_right").addClass("_17card_right_collapsed");
    $("._17card_left_main").addClass("_17card_left_main_expanded");
    $("._17card_right_main").addClass("_17card_right_main_callapse");
  },
  mouseleave: function() {
    $("._17card_left").removeClass("_17card_left_expanded");
    $("._17card_right").removeClass("_17card_right_collapsed");
    $("._17card_left_main").removeClass("_17card_left_main_expanded");
    $("._17card_right_main").removeClass("_17card_right_main_callapse");
  }
}, "._17card_left");
      
      
          
$(document).on({
  mouseenter: function() {
    $("._17card_left").addClass("_17card_left_collapsed");
    $("._17card_right").addClass("_17card_right_expanded");
    $("._17card_right_main").addClass("_17card_right_tilt_expanded");
    $("._17card_left_main").addClass("_17card_left_tilt_callapse");
  },
  mouseleave: function() {
    $("._17card_left").removeClass("_17card_left_collapsed");
    $("._17card_right").removeClass("_17card_right_expanded");
    $("._17card_right_main").removeClass("_17card_right_tilt_expanded");
    $("._17card_left_main").removeClass("_17card_left_tilt_callapse");
  }
}, "._17card_right");
//CEO CARD

//SOOMTH SCROLLING 
$("#myservicebutton, #mservice").click(function() {
    $('html, body').animate({
        scrollTop: $("#myservice1").offset().top
    }, 1000);
});
$("#myportfoliobutton, #mportfoliobutton").click(function() {
    $('html, body').animate({
        scrollTop: $("#myportfolio").offset().top
    }, 1000);
});
$("#myourtechbutton, #mourtechbutton").click(function() {
    $('html, body').animate({
        scrollTop: $("#myourtech").offset().top
    }, 1000);
});
$("#myourteambutton, #mourteambutton").click(function() {
    $('html, body').animate({
        scrollTop: $("#myourteam").offset().top
    }, 1000);
});
$("#mycontactbutton, #mcontactbutton").click(function() {
    $('html, body').animate({
        scrollTop: $("#mycontact").offset().top
    }, 1000);
});


//MOBILE MENU
$(document).ready(function(){
  $("#mobileMenuOpan").click(function(){
    if ($("#mobile_menu").hasClass("mobile_menu")) {
      $("#mobile_menu").removeClass().addClass( "mobile_menuOpen" );

      $("#mobileMenuClose, #mservice, #mportfoliobutton, #mourtechbutton, #mourteambutton, #mcontactbutton, .mobile_menuOpen:before").click(function(){
        $("#mobile_menu").removeClass().addClass("mobile_menu")  
      });
    }
  });
});


// //INPUT
// $(document).ready(function(){
//   $("#inputOneField").click(function(){
//     if ($("#inputOne").hasClass("_contact_input_group")) {
//       $("#inputOne").addClass( "_contact_input_group_active" );
//     } 
//   });

//   $("#inputTwoField").click(function(){
//     if ($("#inputTwo").hasClass("_contact_input_group")) {
//       $("#inputTwo").addClass( "_contact_input_group_active" );
//     } 
//   });

//   $("#inputThreeField").click(function(){
//     if ($("#inputThree").hasClass("_contact_input_group")) {
//       $("#inputThree").addClass( "_contact_input_group_active" );
//     } 
//   });


//   $("#inputOneField, #inputTwoField, #inputThreeField").blur(function(){
//     $("#inputOne, #inputTwo, #inputThree").removeClass("_contact_input_group_active")
//   });
// });

//COLLAPSE
$(document).ready(function(){
  $("#_contact_collapase_title").click(function(){
      count_section_1 += 1;
      
      count_section_3 = 0;
      count_section_2 = 0;

      console.log("Count from 1st section :" + count_section_1)
      $("#collapse").addClass( "_contact_collapase_extand" );
      $("#collapse2, #collapse3").removeClass("_contact_collapase_extand");

      if (count_section_1 % 2 == 1 || count_section_1 == 1) {
        $('#collapse').removeClass('_contact_collapase_extand');
      }
  });

  $("#_contact_collapase_title2").click(function(){
      
      count_section_1 = 1;
      count_section_3 = 0;

      count_section_2 += 1;
      console.log("Count from 2nd section :" + count_section_2)
      $("#collapse2").addClass( "_contact_collapase_extand" );
      $("#collapse, #collapse3").removeClass("_contact_collapase_extand") ;

      if (count_section_2 % 2 == 0) {
        $('#collapse2').removeClass('_contact_collapase_extand');
      } 
  });

  $("#_contact_collapase_title3").click(function(){
      count_section_1 = 1;
      count_section_2 = 0;
      count_section_3 += 1; 

      console.log("Count from 3rd section :" + count_section_3)
      $("#collapse3").addClass( "_contact_collapase_extand" );
      $("#collapse, #collapse2").removeClass("_contact_collapase_extand"); 

      if (count_section_3 % 2 == 0) {
        $('#collapse3').removeClass('_contact_collapase_extand');
      }  
  });

});

$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
      $('.scrollup').fadeIn();
  } else {
      $('.scrollup').fadeOut();
  }
});

$('.scrollup').click(function(){
  $("html, body").animate({ scrollTop: 0 }, 600);
  return false;
});