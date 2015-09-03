// JavaScript Document


//header event
$('.space').hide();
$('.subMenu').hide();
$('.tutorial').hide();
$('footer').hide();



//click event to show the animation of the rocket


$('.enter').click(function(e) {
	$('.space').show();
	$('.subMenu').show(3000);
	setTimeout(function(){
	$('.space').css('transform','translateX(350px)');
	}, 3000);
	e.preventDefault();
});
//click on the nav will show all the content
$('.subNavBtn').click(function(e) {
    $('.enter1').show();  
	$('.tutorial').show();
	$('footer').show();
});

//back to home page to reset all
$('#reset').click(function(e) {
	$('.space').hide();
	$('.subMenu').hide();
	$('.tutorial').hide();
	$('footer').hide();
});

//sticky menu in section 1
 $(document).ready(function(){
    $(".subMenu").sticky({topSpacing:0});
  });
 
//end of sticky menu

//click event to hide the button in section 2
$('.enter1').click(function(e) {
    $('.enter1').hide();  
});

//click menu the button will show in section 2

$('.subNavBtn').click(function(e) {
    $('.enter1').show();
	$('#typer').hide();  
});

//end of click event to hide the button

//typer function in section 3

$('#section-3').mouseenter(function(e) {
	$('#typer').show();
	$('#typer').typeTo(" This is my last JavaScript tutorial. I hope the tutorials are easy to read and understand. Thank you for viewing.");
	e.preventDefault();
});

if(typeof InstallTrigger !== 'undefined') {
  $('#display-image-only').css('background','url(../images/rocket_2.png)')
}



//end of typer function




