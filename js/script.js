$(document).ready(function() {

  'use strict';

  var $isAnimatedSecond = $('.second .is-animated'),
      $isAnimatedThird = $('.third .is-animated'),
      $isAnimatedFourth = $('.fourth .is-animated'),
      $isAnimatedFifth = $('.fifth .is-animated'),
      $isAnimatedSixth = $('.sixth .is-animated'),
      $isAnimatedSeven = $('.seven .is-animated');

  $('#fullpage').fullpage({
    anchors: ['sinyar', 'about', 'whatwedo', 'excellence', 'portfolio', 'process', 'services', 'concept', 'lifestyleevents', 'specialoccasion', 'culinary', 'csr', 'ourteam', 'contact'],
    sectionsColor: ['#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#152d54'],   
    css3: true,
    navigation: false,
    responsiveWidth: 600,
      onLeave: function(index, nextIndex, direction){
  
      // second section
      if( index == 1 && nextIndex == 2 ) { 
        $isAnimatedSecond.addClass('animated flipInY'); 
        $isAnimatedSecond.eq(0).css('animation-delay', '.3s');
      }
      
      // third animation
      else if( ( index == 1 || index == 2 ) && nextIndex == 3 ) {
        $isAnimatedThird.eq(0).addClass('animated flipInY').css('animation-delay', '.3s'); 
      }
      
      // fourth animation
      else if( ( index == 1 || index == 2 || index == 3 ) && nextIndex == 4 ) {
        $isAnimatedFourth.addClass('animated flipInY'); 
        $isAnimatedFourth.eq(0).addClass('animated flipInY').css('animation-delay', '.3s'); 
      }
      
      // fifth animation
      else if( ( index == 1 || index == 2 || index == 3 || index == 4 ) && nextIndex == 5 ) { 
      	$isAnimatedFifth.addClass('animated flipInY'); 
        $isAnimatedFifth.eq(0).addClass('animated flipInY').css('animation-delay', '.3s'); 
      }
      
      // sixth animation
      else if( ( index == 1 || index == 2 || index == 3 || index == 4 || index == 5  ) && nextIndex == 6 ) { 
         $isAnimatedSixth.addClass('animated flipInY'); 
        $isAnimatedSixth.eq(0).addClass('animated flipInY').css('animation-delay', '.3s'); 
      }
      
      // seven animation
      else if( ( index == 1 || index == 2 || index == 3 || index == 4 || index == 5 || index == 6  ) && nextIndex == 7 ) { 
        $isAnimatedSeven.addClass('animated flipInY'); 
        $isAnimatedSeven.eq(0).addClass('animated flipInY').css('animation-delay', '.3s'); 
      }

    }

  });

});


$(function() {

	circle_radius = 200;
	$links = $('nav ul.gallery li a');
	total_links = $links.size();
	$links.each(function(index) {
		$(this).attr('data-index',index);
		animateCircle($(this), 1);
	});

	$('ul.gallery > li a').hover(function() {
		animateCircle($(this), 1.1);
	}, function() {
		animateCircle($(this), 1);

	});
    
    // let the trash be droppable, accepting the gallery items
    $( "#droparea" ).droppable({
      accept: "ul.gallery > li a",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {
          alert('dropped');
        //deleteImage( ui.draggable );
      }
    });
   
	function animateCircle($link, expansion_scale) {
		index = $link.attr('data-index');
		radians = 2*Math.PI*(index/total_links);
		x = -(Math.sin(radians)*circle_radius*expansion_scale);
		y = -(Math.cos(radians)*circle_radius*expansion_scale);
		$link.animate({
			top: x+'px',
			left: y+'px'
		}, 200);
	}
});




$(document).ready(function(){
$("#btnservice1").hover(function(event){
$("#service0").hide();
$("#service1").show();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice2").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").show();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice3").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").show();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });


$("#btnservice4").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").show();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice5").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").show();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice6").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").show();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice7").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").show();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });


$("#btnservice8").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").show();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice9").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").show();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice10").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").show();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice11").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").show();
$("#service12").hide();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice12").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").show();
$("#service13").hide();
$("#service14").hide();
   });

$("#btnservice13").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").show();
$("#service14").hide();
   });
 });

$("#btnservice14").hover(function(event){
$("#service0").hide();
$("#service1").hide();
$("#service2").hide();
$("#service3").hide();
$("#service4").hide();
$("#service5").hide();
$("#service6").hide();
$("#service7").hide();
$("#service8").hide();
$("#service9").hide();
$("#service10").hide();
$("#service11").hide();
$("#service12").hide();
$("#service13").hide();
$("#service14").show();
   });



  //JS for "Reasons" dropdown in Footer
  $('#menulink1').click(function(){
    $('#mainlink').text($('#menulink1').text());
    $('#reasons').val($('#menulink1').text());
  });

  $('#menulink2').click(function(){
      $('#mainlink').text($('#menulink2').text());
      $('#reasons').val($('#menulink2').text());
  });

  $('#menulink3').click(function(){
      $('#mainlink').text($('#menulink3').text());
      $('#reasons').val($('#menulink3').text());
  });
  //End of JS for "Reasons" dropdown in Footer

