$('document').ready(function  (argument) {
		$('#month').click(function(){
			var style = {
					width : '62px',
					right : ''

			};

			$('.switch-selection').css(style);

		});


		$('#week').click(function(){
			$('.switch-selection').css('width','50px');

		});
});