$(document).ready(function () {

  $('[data-toggle="popover"]').popover({ 
      trigger: "hover" 
  });

  $('[data-toggle="tooltip"]').tooltip({
      placement: 'bottom',
  });

  $('.selectpicker').selectpicker('refresh');

  $('#navbar-scrollspy a[href*=#]:not([href=#]), .content-foot a[href*=#]:not([href=#]), .btn-anchor-back').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });

});