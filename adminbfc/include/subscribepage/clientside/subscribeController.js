$('document').ready(function() {
		$.getJSON('../include/subscribepage/serverside/subscribeController.php',getlistSubscribe);



function getlistSubscribe(data){
	var no = 1;
	$.each(data,function(i,key){

		$('#listsubscribe tbody').append('<tr><td>'+ no++ +'</td><td>'+ key.email +'</td></tr>');

	});

	var jumlah_data = data.length;
	var data_perpage = 10;
	var jumlahpage = Math.ceil(jumlah_data / data_perpage);

	//itung jumlah data
	for (var i = 1; i <=jumlahpage; i++) {
		$('.pagination').append('<li><a>'+i+'</a></li>');
	};


}		


});