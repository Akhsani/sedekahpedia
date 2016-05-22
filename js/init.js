(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
    $('ul.tabs').tabs();
    $('.slider').slider({indicators: false});
    $('input#judul, textarea#deskripsi').characterCounter();
    $('.datepicker').pickadate({
    	selectMonths: true, 
    	selectYears: 15 
  	});


  }); // end of document ready
})(jQuery); // end of jQuery name space