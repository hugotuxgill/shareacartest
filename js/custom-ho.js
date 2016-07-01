$(document).ready(function(){

	$('.block-4 li').click(function(){
	     if(!$(this).find('p').is(':visible') ){
	     		$('.block-4 li p').slideUp(500);
 				$(this).find('p').slideDown(500);
	     } else {
	     		$('.block-4 li p').slideUp(500);
	     }
	});


	var realValues = [6000, 8000, 10000 , 12000,14000,16000,18000,20000,22000,24000,28000,32000,36000,38000,42000,44000,46000,50000];
	  //var labelValues = ['6000&euro;', '8000', '10000' , '12000','14000','16000','18000','20000','22000','24000','28000','32000','36000','38000','42000','44000','46000','50000'];

	  var r = $('#ex1').slider({
	    max: 17,
	    min: 0,
	    step: 1,
	    //ticks: [0, 1, 2, 3],
	    /*formatter: function(val) {
	      //return labelValues[val];
	    }*/
	  })
	  .on('change', function(data){
	    console.log(data);
	     $("#ex6SliderVal").text(realValues[data.value.newValue]+'€');

	     switch(realValues[data.value.newValue]){
	     	case 6000:{ car=0; dayValue= 30; carImg='carro_1.svg'; } break;
	     	case 8000:{ car=1; dayValue= 32; carImg='carro_1.svg';  } break;
	     	case 10000:{ car=2; dayValue= 34; carImg='carro_1.svg';  } break;
	     	case 12000:{ car=3; dayValue= 40; carImg='carro_2.svg'; } break;
	     	case 14000:{ car=4; dayValue= 45; carImg='carro_2.svg';  } break;
	     	case 16000:{ car=5; dayValue= 50; carImg='carro_2.svg'; } break;
	     	case 18000:{ car=6; dayValue= 60; carImg='carro_2.svg'; } break;
	     	case 20000:{ car=7; dayValue= 65; carImg='carro_3.svg'; } break;
	     	case 22000:{ car=8; dayValue= 75; carImg='carro_3.svg'; } break;
	     	case 24000:{ car=9; dayValue= 100; carImg='carro_3.svg'; } break;
	     	case 28000:{ car=10; dayValue= 110; carImg='carro_3.svg'; } break;
	     	case 32000:{ car=11; dayValue= 130; carImg='carro_4.svg'; } break;
	     	case 34000:{ car=12; dayValue= 150; carImg='carro_4.svg'; } break;
	     	case 36000:{ car=13; dayValue= 180; carImg='carro_4.svg'; } break;
	     	case 38000:{ car=14; dayValue= 220; carImg='carro_4.svg'; } break;
	     	case 42000:{ car=15; dayValue= 250; carImg='carro_4.svg'; } break;
	     	case 44000:{ car=16; dayValue= 260; carImg='carro_5.svg'; } break;
	     	case 50000:{ car=17; dayValue= 300; carImg='carro_5.svg'; } break;

	     }

	    	days = $('#ex2').val();

	     earn = dayValue * days*12;
	     $('.earn-value').html(earn+'€');


	     if($('.car-earn').attr('src') != 'images/'+carImg ){
		     $('.car-earn').fadeOut(100, function() {
		     	$('.car-earn').attr('src','images/'+carImg);
		     	$('.car-earn').fadeIn(100);
		     });


		 }

			cashImg = calculateCashImg(car, days);

		 if($('.money-earned img').attr('src') != 'images/'+cashImg ){
		    // $('.money-earned img').fadeOut(100, function() {
		     	$('.money-earned img').attr('src','images/'+cashImg);
		     //	$('.money-earned img').fadeIn(100);
		    // });

		    
		 }
	     
	  });


	/**/

	$('#ex2').slider({
		formatter: function(value) {
			//return 'Current value: ' + value;
			$('.day-number').html(value);
		}
	}).on('change', function(data){
		//alert('hello');

		//get ex1 val
		car =$('#ex1').val();
		console.log('CAR:'+car);

		switch(car){
	     	case '0':{ dayValue= 30;  } break;
	     	case '1':{ dayValue= 32;  } break;
	     	case '2':{ dayValue= 34; } break;
	     	case '3':{ dayValue= 40; } break;
	     	case '4':{ dayValue= 45; } break;
	     	case '5':{ dayValue= 50; } break;
	     	case '6':{ dayValue= 60; } break;
	     	case '7':{ dayValue= 65; } break;
	     	case '8':{ dayValue= 75; } break;
	     	case '9':{ dayValue= 100; } break;
	     	case '10':{ dayValue= 110; } break;
	     	case '11':{ dayValue= 130; } break;
	     	case '12':{ dayValue= 150; } break;
	     	case '13':{ dayValue= 180; } break;
	     	case '14':{ dayValue= 220; } break;
	     	case '15':{ dayValue= 250; } break;
	     	case '16':{ dayValue= 260; } break;
	     	case '17':{ dayValue= 300; } break;

	     }

	     days = $('#ex2').val();

	     if(dayValue==='undefined'){
	     	dayValue=6;
	     }

	     earn = dayValue * days*12;
			cashImg = calculateCashImg(car, days);
			//alert(cashImg);
	      $('.earn-value').html(earn+'€');

	       if($('.money-earned img').attr('src') != 'images/'+cashImg ){
		     //$('.money-earned img').fadeOut(100, function() {
		     	$('.money-earned img').attr('src','images/'+cashImg);
		     	$('.money-earned img').fadeIn(100);
		     //});

		    
		 }


	});

});



function calculateCashImg(car, days){

	/*if (car>=0 && car<=2 ) {*/

		if(days<=2){
			cashImg='dinheiro_1-01.png';
		} else if(days>2 && days<=8) {
			cashImg='dinheiro_2-01.png';

		} else if(days >8 && days<=18 ){
			cashImg='dinheiro_3-01.png';

		}else if(days >18 && days <= 24){
			cashImg='dinheiro_4-01.png';

		} else {
			cashImg='dinheiro_5-01.png';

		}
	

	/*if (car>=3 && car<=6 ) {

		if(days<=6){
			cashImg='dinheiro_1-01.png';
		} else if(days>6 && days<=8) {
			cashImg='dinheiro_2-01.png';

		} else if(days >8 && days<=18 ){
			cashImg='dinheiro_3-01.png';

		}else if(days >18 && days <= 24){
			cashImg='dinheiro_4-01.png';

		} else {
			cashImg='dinheiro_5-01.png';

		}
	}*/



	return cashImg;


}






