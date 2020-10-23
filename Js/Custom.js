
/* global $, alret, consloe*/

$('document').ready(function() {
	'use strict';
	
//* Trigger NiceScroll *//

//* var Scrollbar = window.Scrollbar;

//*  Scrollbar.init(document.querySelector('#my-scrollbar'));


//* owl-carousel / SlideShow *//
$('.owl-carousel').owlCarousel({
    items: 3,
	loop:true,
    margin:10,
    nav:true,
	autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
//*	$("Section").width($(window).width());
	$(".Header").height($(window).height());
	
//* Empty Form Value  (Order)
	var placeattr = '';
	$('input').focus(function(){
		placeattr = $(this).attr('placeholder');
		$(this).attr('placeholder','');
		});
	$('input').blur(function(){
		$(this).attr('placeholder', placeattr);
		});

//* Show Error in Customer Side- Not Work ! *//
	$('.name').blur(function(){
		if ($(this).val().length < 6) {
			$(this).parent().find('.nameerror').fadeIn(200);
			}
		else {
			$(this).parent().find('.nameerror').fadeOut(200);	
			};
		});
		
//*	Upload File (Attachment)
  $('#file').on("change", function(e){
		var files = $(this)[0].files;
		var filename = e.target.value.split('\\').pop();
		var namefile = $.map(files, function(val) { return "<br>" + val.name;  });
		if (files.length > 1){ 	 	
			$('#Selector').text(files.length + ' Files Uploaded');
			$('.modal').fadeIn(600);
			$('.TextModal').append('File Uploaded: <br/>' + namefile);
			}
		else{
		if (files.length == 0){
			$('#Selector').text('Select Files');
			$('#Selector').css('font-size','16px');
			}
		else{
			$('#Selector').text(filename);
			$('#Selector').css('font-size','12px');
			}}
		if (this.files[0].size > 24214400){
			$('.modal').fadeIn(600);
			$('.Attention').text('Max Files Size is 24MB');
			}
			
 	});
		$('.X').click(function(){
		$('.modal').fadeOut(600);
			})
		$('body').click(function(){
		$('.modal').fadeOut(600);
			})		
		if ($('.TextModal').val().length >= 1) {
		$('.modal').fadeIn(600);	
		}
//* Teamwork *//
		$('.A-pp').click(function(){
				$(this).addClass('active').siblings().removeClass('active');
			})
		$('.fa-sort-down, .C2').click(function(){
				$('.A-pp').css('bottom', '280px');
				$('.C2').removeClass('far').addClass('fas')
				$('.C1').removeClass('fas').addClass('far')						
			})
		$('.fa-sort-up, .C1').click(function(){
				$('.A-pp').css('bottom', '0px');
				$('.C1').removeClass('far').addClass('fas')
				$('.C2').removeClass('fas').addClass('far')										
			})		
		$('.Mostafa').click(function(){
				$('.A-Nancy, .A-Nehal, .A-Donia, .A-Shaima,.A-Karim').css('display','none');	
				$('.A-Mostafa').fadeIn(1000);
			})
		$('.Nancy').click(function(){
				$('.A-Mostafa, .A-Nehal, .A-Donia, .A-Shaima,.A-Karim').css('display','none');	
				$('.A-Nancy').fadeIn(1000);
			})
		$('.Nehal').click(function(){
				$('.A-Mostafa, .A-Nancy, .A-Donia, .A-Shaima,.A-Karim').css('display','none');	
				$('.A-Nehal').fadeIn(1000);
			})
		$('.Shaima').click(function(){
				$('.A-Mostafa, .A-Nehal, .A-Donia, .A-Nancy,.A-Karim').css('display','none');	
				$('.A-Shaima').fadeIn(1000);
			})
		$('.Donia').click(function(){
				$('.A-Mostafa, .A-Nehal, .A-Nancy, .A-Shaima,.A-Karim').css('display','none');	
				$('.A-Donia').fadeIn(1000);
			})
		$('.karim').click(function(){
				$('.A-Mostafa, .A-Nehal, .A-Donia, .A-Shaima,.A-Nancy').css('display','none');	
				$('.A-Karim').fadeIn(1000);
			})						
});	//* Ready doucment	