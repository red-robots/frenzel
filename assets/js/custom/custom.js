/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {

	// $('#open').click(function() {
 //    var fixedData1 = 'http://frenzel.localhomesearch.net/idx/?op=query&stype=area&_srf=1',
 //        fixedData2 = '+',
 //        userEntry1 = $('#property_type').find(":selected").val(),
 //        userEntry2 = $('#neighborhood').find(":selected").val();

 //    var newWindow = window.open(fixedData1 + userEntry1 + fixedData2 + two, '_blank');
 //    newWindow.focus();

 //    function showURL() {
	//     var d1 = $("#property_type").find(":selected").attr("value");
	//     var d2 = $("#neighborhood").find(":selected").attr("value");
	//     //var d3 = $("#pets").find(":selected").attr("value");
	//     var url = ("http://frenzel.localhomesearch.net/idx/?op=query&stype=area&_srf=1&area=" + d1 + "&subdivision=" + d2);
	//     alert(url);
	//     window.location = url;
	//     return false;
	// }

	
	/*
	*
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
 	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();


	$(document).on("click","#toggleMenu",function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		$("#mobile-navigation").slideToggle();
	});


	$("#quick_search .js-select2").select2({
	    placeholder: "",
	    allowClear: true
	});

	$("#idx .idxprop").each(function(){
		var html_content = $(this).html();
		var new_content = '<div class="inner clear">'+html_content+'</div>';
		$(this).html(new_content);
		$( "b:contains('Price')" ).addClass('price');
	});

});// END #####################################    END