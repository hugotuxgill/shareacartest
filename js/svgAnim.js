$(document).ready(function(){

	animateCar1();	
	animateCar2();
	animateCar3();
	animateCar4();
	animateCar5();

	animatePlane();
	
	// PLAY VIDEO
	$( ".block-3" ).click(function() {
	 	
	 	$(this).find("div").css("visibility", "visible");
	 	$(this).find("div").animate({ opacity: 1 }, 500);
	 	$(this).css("height", "100%");

	 	$("#video")[0].src += "?autoplay=1";
    	ev.preventDefault();
	});
	// 
		
});


function animateCar1 () {
  $('#carro1')
	  .velocity(
	  	{  left: "-110px" }, 
	  	{ duration: 5000, easing: "linear", 
	  		complete: function() { 
	  				$("#carro1").css('left','110%');
		      		animateCar1();
		    	}
	  	});
};


function animateCar2 () {
  $('#carro2')
	  .velocity(
	  	{ right: "-110px" }, 
	  	{ duration: 10000, easing: "linear", 
	  		complete: function() { 
	  				$("#carro2").css('right','110%');
	  				 animateCar2();
		    	}
	  	});
};


function animateCar3 () {
  $('#carro3')
	  .velocity(
	  	{  left: "-110px" }, 
	  	{ duration: 10000, easing: "linear", 
	  		complete: function() { 
	  				$("#carro3").css('left','110%');
	  				animateCar3();
		      		
		    	}
	  	});
};


function animateCar4 () {
  $('#carro4')
	  .velocity(
	  	{ right: "-110px" }, 
	  	{ duration: 7000, easing: "linear", 
	  		complete: function() { 
	  				$("#carro4").css('right','110%');
	  				 animateCar4();
		      		 
		    	}
	  	});
};


function animateCar5 () {

  $('#carro5')
	  .velocity(
	  	{ right: "-110px" }, 
	  	{ duration: 20000, easing: "linear", 
	  		complete: function() { 
	  				$("#carro5").css('right','110%');
	  				 animateCar5();
		    	}
	  	});
};


function animatePlane () {
  $('#aviao')
	  .velocity(
	  	{ 
	  	   right: "-310px",
	  	   top: "100px" 
	  	}, 
	  	{ duration: 25000, easing: "linear", 
	  		complete: function() { 
	  				$("#aviao").css('right','110%');
	  				$("#aviao").css('top','0px');

	  				setTimeout(function() {
	  				 	animatePlane();
	      			}, 5000 ); 
		    	}
	  	});
};

