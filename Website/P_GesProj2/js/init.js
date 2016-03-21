(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});

$(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
});


$(document).ready(function(){
    $('.parallax').parallax();
});
