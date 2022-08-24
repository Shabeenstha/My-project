// JavaScript Document
  $(document) .ready(function(e) {
	  $(".menu-triger") .click(function(e) {
		  $(".navigation") .slideToggle(400, function() {
			  $(this) .toggleClass("navs") .css('display', '')	 
		  });
	  });
});


