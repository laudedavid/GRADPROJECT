$(document).ready(function() {
	$('.box div').draggable({
		helper: 'clone'		
	});
	
	$('.box').droppable({
		//tolerance: 'touch',
		 overlap: 0.75,
		drop: function(event,ui) {
			var id = $(ui.draggable).attr('id');
			var cake = $(ui.draggable).html();
			var box = $(this).attr('id');
			
			$.ajax({
				url: '/addItemCakeModel',
				type: 'GET',
				data: {
					'id' : id,
					'box' : box
				},

				'success': function(data) {
					//$(ui.draggable).remove();
				
					$('#' + box).append('<div id="' + id + '">' + cake + '</div>');
					$('div#' + id).draggable({
						helper: 'clone'
					});
					$(this).css('min-height' , 'auto');
					location.reload();
				}
			});
		}
	});
});



	