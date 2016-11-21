
$(document).ready(function(){


	$.getJSON('newsroom/getnews.php', success);

	 
	function success(data){
	
	var page = 1;

	var jumlah_data = data.length;
	var data_perpage = 5;
	var data_perpage_fix = 5;

	var pager = Math.ceil(jumlah_data / data_perpage);
	
   for (var i = 1; i <= pager; i++) {
					
	
	$('#pagelist').append('<li id='+i+'><a  id='+i+'>'+i+'</a></li>');
			
	};
	$('#newsroom div').remove();
	//console.log('page sekarang' + page);
	for (var i =1; i<=data_perpage; i++) {
	var item = data[i];
	
	$('#newsroom').append('<div class="col-md-4 image_news" id="kiri'+ item.id_news+'" style="background-image : url(adminbfc/uploads/'+item.banner_image+');"></div><div class="col-md-4 desc" id="kanan'+item.id_news+'"><div id="newcontent"><h3 id="heading">'+item.title+'</h3><br><p id="shortcontent">'+item.content.substring(0,55)+'...</p><br><a href="newsdetail.php?pageid='+item.id_news+'"><i class="glyphicon glyphicon-pushpin"></i>More detail click here</a></div></div>');
	   	
    };	
	 	
   		
	   $('#pagelist li').click(function(){
	 	 
	 	 var id = $(this).prop('id');

	 	 
	 	 page = id;
	 	
	 	 if(page == 1){

	 	 	data_perpage_fix = 5; 
	 	 	$('#newsroom div').remove();
	 	 	for (var i =1; i <=data_perpage_fix; i++) {
	 	 		var item = data[i];

	 	 		$('#newsroom').append('<div class="col-md-4 image_news" id="kiri'+ item.id_news+'" style="background-image : url(adminbfc/uploads/'+item.banner_image+');"></div><div class="col-md-4 desc" id="kanan'+item.id_news+'"><div id="newcontent"><p id="heading">'+item.title+'</p><br><p id="shortcontent">'+item.content.substring(0,55)+'...</p><br><a href="newsdetail.php?pageid='+item.id_news+'"><i class="glyphicon glyphicon-pushpin"></i>More detail click here</a></div></div>');
				}


	 	 }else{
	 	 	data_perpage = 5 * id;
	 	  	var databatas = data_perpage - 5;
	 	  	
	 	  $('#newsroom div').remove();
	 	 
	 	 for (var i =databatas; i < data_perpage; i++) {
	 	 		var item = data[i];
	 	 $('#newsroom').append('<div class="col-md-4 image_news" id="kiri'+ item.id_news+'" style="background-image : url(adminbfc/uploads/'+item.banner_image+');"></div><div class="col-md-4 desc" id="kanan'+item.id_news+'"><div id="newcontent"><p id="heading">'+item.title+'</p><br><p id="shortcontent">'+item.content.substring(0,55)+'...</p><br><a href="newsdetail.php?pageid='+item.id_news+'"><i class="glyphicon glyphicon-pushpin"></i>More detail click here</a></div></div>');

	 	 }
	 				
	 		
	 	 }

	 	$('.image_news').mouseenter(function(){
		    var id = $(this).prop('id');
		   
		    var idsebelahnya = $(this).next().prop('id');
		    var style = {
		    	backgroundColor : '#BFBFBF',
		        
		    };

		  
		    $('#'+idsebelahnya).css(style);
		    
		});


		$('.image_news').mouseleave(function(){
		    var id = $(this).prop('id');
		    var idsebelahnya = $(this).next().prop('id');
		    var style = {
		    	backgroundColor : '#EEEEEE'

		    };

		   
		    $('#'+idsebelahnya).css(style);
		    
		});

	

	 	});
		$('.image_news').mouseenter(function(){
		    var id = $(this).prop('id');
		   
		    var idsebelahnya = $(this).next().prop('id');
		    var style = {
		    	backgroundColor : '#BFBFBF',
		        
		    };

		   
		    $('#'+idsebelahnya).css(style);
		    
		});


		$('.image_news').mouseleave(function(){
		    var id = $(this).prop('id');
		    var idsebelahnya = $(this).next().prop('id');
		    var style = {
		    	backgroundColor : '#EEEEEE'

		    };

		    $('#'+idsebelahnya).css(style);
		    
		});

	 }

	
});

