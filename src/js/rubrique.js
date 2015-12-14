$(document).ready(function () {
	bindEvent();
	presentArticles();
});


function bindEvent(){
	$('#abonnement').click(function(){
		alert("le mec s'abonne, faudra définir exactement ce qu'il se passe" );
	});
}

function presentArticles(){

	$.each(  $('.container > div'), function( key, value ) {

	  if (key == 2 || key == 5) {
	  	$(this)
	  	.css('height', '350px')
	    .css('width', '100%')
	   	.css('backgroundColor', '#ffdac1');
	  } 
	  else if (key == 0 || key == 3){
	  	$(this)
	  	.css('height', '320px')
	    .css('width', '49%')
	    .css('left', '0')
	    .css('backgroundColor', '#e9d8cc');
	  }
	  else if (key == 1 || key == 4){
	  	$(this)
	  	.css('height', '320px')
	    .css('width', '49%')
	    .css('float', 'right')
	    .css('backgroundColor', '#e9d8cc');
	  }

	});

}

