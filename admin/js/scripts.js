$(document).ready(function(){

	$('#selectAllBoxes').click(function(event){

	if(this.checked) {

	$('.checkBoxes').each(function(){

	    this.checked = true;

	});

} else {


	$('.checkBoxes').each(function(){

	    this.checked = false;

	});


	}



});

	var div_box = "<div id='page-load'><div id='loading'></div></div>";

	$('body').prepend(div_box);

	$('#page-load').delay(700).fadeOut(500, function () {
		$(this).remove();
    });



	});