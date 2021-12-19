

$('.myForm').submit(function(event){

	// stop the default behavior of the form
	event.preventDefault();

	// get inputs data
	var name = $('input[name="name"]').val();
	var phone = $('input[name="phone"]').val();
	var email = $('input[name="email"]').val();
	var message = $('textarea[name="message"]').val();


	var inputs = $('input , textarea').not('input:last');

	var values = [];

	Array.from(inputs).forEach(function(item ,index){

		if(!$(item).val()){
			$(item).addClass('red');

		} else {

			values.push($(item).val());
			$(item).removeClass('red');

		}

	}); // end foreach

	if (values.length == 4 ) {
			// post request
		var url = 'functions/addMessage.php';
		$.post(url , {
			Name : name , 
			Phone : phone , 
			Email : email , 
			Message : message
		} , function(data){
			console.log(data);

			$('.resData').html(data);

			// empty values 
			// $('input , textarea').val('');
			$('.myForm').trigger('reset');

		})
	}

	


})