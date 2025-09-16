
// On Click hand emoji will take you to the top of the page
// @ts-ignore
document.getElementById('top-button').addEventListener('click',function(){
    window.scrollTo(0,0);
});

// @ts-ignore
$(window).scroll(function(){
  var threshold = 208;  
  // @ts-ignore
  var op = (($(document).height() - $(window).height()) - $(window).scrollTop()) / threshold;
  if( op <= 13 ){
    // @ts-ignore
    $("#top-button").show();
  } else {
    // @ts-ignore
    $("#top-button").hide();
  }
});




 // @ts-ignore
$('#switch1').on('click', function(){
  // @ts-ignore
  $('body').toggleClass('night')
})


 // @ts-ignore
$(document).ready(function(){
  var date = new Date();
  var current_time = date.getHours();
  if (current_time > 19 || current_time < 6)
     document.body.className = "night";
  else
     document.body.className = "";
});

// @ts-ignore
$(window).load(function() {
      // @ts-ignore
      $("#top-button").hide();
});


 // @ts-ignore
$('.project_used span').on({
    mouseover: function() {
        // @ts-ignore
        event.preventDefault();
        // @ts-ignore
        $(this).animate({opacity: 0.25});
    },
    mouseout: function() {
        // @ts-ignore
        event.preventDefault();
        // @ts-ignore
        $(this).animate({opacity: 1});
    }
});


