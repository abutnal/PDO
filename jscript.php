$(document).ready(function(){
	$(document).on('submit', '#saveForm', function(event){
		event.preventDefault();
		$form = $(this);
		$.ajax({
			url: $form.attr('action'),
			method: $form.attr('method'),
			data: new FormData(this),
			contentType: false,
			processData: false,
			cache:false,
			success:function(response){
			 console.log(response);
			}
		});
	});
});

$(document).ready(function(){
	$(document).on('click', '#edit', function(event){
		event.preventDefault();
		$('form#saveForm').prop('id', 'updateForm');
		$('input.create').prop('id', 'update');
		$('input.create').prop('name', 'update');
		$('.create').val('Update');
		$('.panel-heading').html('PDO | PHP - Update Records');
		$('a#cancel').show();
		// alert('I am ready');
	});
});


$(document).ready(function(){
	$('a#cancel').hide();
	$('a#cancel').on('click', function(event){
		event.preventDefault();
		$('form#updateForm').prop('id', 'saveForm');
		$('input.create').prop('id', 'create');
		$('input.create').prop('name', 'create');
		$('.create').val('Create');
		$('.panel-heading').html('PDO | PHP - Create Records');
		$('a#cancel').hide();
	});
});