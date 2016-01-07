$(document).ready(function(){
  
$("html").niceScroll({
        scrollspeed: 70,
        bouncescroll: true,
		cursorcolor: "#b67376",
		 cursorborder: "",
		 cursoropacitymin : "1",
		 zindex:"9999", 
		 mousescrollstep:"60",
        cursorwidth: "5px",
        cursorborderradius: "1px",
        cursormaxheight: 10
		})
    
  $('.carousel').carousel({
   interval:6000
  });
  
  
  $('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  
  
  $(".gear-check").click(function(){
    $(".review").fadeToggle();
    });
  
  
  
  
  
   var nav = $('.navbar-default');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() >750) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
 
 
  $('body').append('<div id="toTop" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
 
 
  
$(function() {
  $('a[href*=#]:not([href=#]):not(.carousel-control ,.tab)').click(function () { 
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-210
        }, 1000);
        return false;
      }
    }
  });
  
});
});












$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
    
    
    
});














