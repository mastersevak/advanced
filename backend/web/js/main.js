$(function(){

	$('#modalButton').click(function(){
		$('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'));
	});

	// event stexcelu hamar e, modalov date-i vra click anelov
	$(document).on('click', '.fc-day', function(){
		var date = $(this).data('date');

		$.get('index.php?r=event/create', {'date': date}, function(data){

			$('#modal-event').modal('show')
				.find('#modalContent-event')
				.html(data);
		});
	});
});
