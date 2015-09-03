//Javascript Document 

//Globals
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//game buttons
var $btnPlay = $('.btn_play');
var $btnReset = $('.btn_reset');

//game outputs - tryout & matched
var $tryOut = $('.output_tries p');
var $numberMatched = $('.output_match p');

//game cards 
var $game = $('.game');
var $cards = $('.col');
var $footer = $('footer')

// game States
var counterTries = 0;
var counterMatch = 0;
var counterClick = 0;

// game Images
var currentImage;
var previousImage;
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//function to start playing 
$btnPlay.click(function(){
	var $this = $(this);
	if($game.hasClass('no_game')){
		$game.removeClass('no_game');
		GameMatch.init();
	}
	if($('h1').hasClass("flash")){
		$('h1').removeClass("flash");
	}
	if($cards.hasClass('animated')){
		$cards.removeClass('flip');
		$cards.addClass('tada');	
	}

	$("#no").hide();
	var audio = document.getElementById("creepy");
	audio.play();	
	$('footer').show();
}) 
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//function to reset the game
$btnReset.click(function(){
	var $this = $(this);
	if($game.hasClass('game')){
		$game.addClass('no_game');
		GameMatch.init();
		counterTries = 0;//to reset
	}
	if($('h1').hasClass("animated")){
		$('h1').addClass("flash");
	}
	$("#no").show();
	$('footer').hide();

})
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// function to click on the cards
$cards.click(function(){
	var $theCardsWasClicked = $(this);
	GameMatch.gameTries($theCardsWasClicked);	
})

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// GameMatch 
var GameMatch = {
		init: function(){
			  counterTries: 0;
			  counterClick: 0;
			  counterMatch: 0;
			  $tryOut.text(0);
			  $numberMatched.text(0);
			  $cards.removeAttr('style');
			  $cards.children('img').remove();
			  var images = [];
			  for(var i = 1; i <= 27; i++){
		  images.push('images/batch1/image' + i + '.jpg');
		  images.push('images/batch1/image' + i + '.jpg');
			  } 
		  shuffleImages(images);
		  function shuffleImages(array) {
			   var counter = array.length, temp, index;
				  while (counter > 0) {
					  index = Math.floor(Math.random() * counter);
					  counter--;
					  temp = array[counter];
					  array[counter] = array[index];
					  array[index] = temp;
				  }
				  return array;
		  }
		  $cards.each(function(index, element){
			  var $this = $(this);
			  $('<img>').attr('src', images[index])
						.appendTo($this)
						.hide();		
		  })
	},
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
gameTries: function(card){
		
		counterClick++ 
		
		cardImage = card.children('img');
		currentImage = cardImage.attr('src');
		
		if(!cardImage.hasClass('selected')){
			if(!cardImage.hasClass('matched')){
				if(counterClick < 2){
					card.css('background-color', 'transparent');
					cardImage.show()
					cardImage.addClass('selected');
					previousImage = currentImage;
					
				}else if(counterClick === 2){
					if(currentImage === previousImage){
		$('img[src="' + currentImage  + '"]')
						.removeClass('selected')
						.addClass('matched')
												
		card.css('background-color', 'transparent');
		cardImage.show();
		counterTries++
		counterMatch++
		$tryOut.text(counterTries);
		$numberMatched.text(counterMatch);
		
		if(counterMatch === 27 && counterTries <= 75){
			alert('WOW No Way!!!');
			var audio = document.getElementById("sqeak");
			audio.play();
		}else if(counterMatch === 27 && counterTries <= 90){
			alert('You did a good Job. The door is opened');
			var audio = document.getElementById("sqeak");
			audio.play();
		}else if(counterMatch === 27){
			alert('Try again');
			var audio = document.getElementById("mercy");
			audio.play();	
		return;
		};
		counterClick = 0;
					}else{
					card.css('background-color', 'transparent');
					cardImage.addClass('selected');
					cardImage.show();
					setTimeout(function(){
					$('.selected').removeClass('selected')
						          .hide()
								  .parent()
								  .removeAttr('style');
					counterTries++;
					$tryOut.text(counterTries);
					counterClick = 0;
					},800)
				  } 
				} 
			}else{
				if(counterClick == 2){
					counterClick = 1;	
				}else{
					counterClick = 0;	
				}	
			}
		}else {
			counterClick = 1;	
		} 
	}	
} 
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++






