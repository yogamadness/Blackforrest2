var id_album;
var category;
$('document').ready(function(){


	$.getJSON('../include/photobookspage/serverside/photobooksController.php',getListAlbum);


	function getListAlbum(dataAlbum){

	//HALAMAN BELUM DI FILTER\\
	var no = 0;	
	

		$.each(dataAlbum, function(i,key){
		
			no++;
			$('#album tbody').append('<tr><td>'+no +'</td><td>'+key.product_name+'</td><td>'+key.name_category+'</td><td><img id="cover" src="../uploads/'+ key.img_album +'"></td><td><img class="content" src="../uploads/'+ key.img1+'"></td><td><img class="content" src="../uploads/'+ key.img2+'"></td><td><img class="content" src="../uploads/'+ key.img3+'"></td><td>'+key.date+'</td><td><button id="edit" class="btn btn-info btn-xs edit" value="'+key.id_product+'">Edit</button><br><button id="delete" value="'+ key.id_product +'" class="btn btn-info btn-xs delete">delete</button></td></tr>');
			id_album = key.id_product;
		});


	$('#album').tablesorter().tablesorterPager({positionFixed: false,container: $("#pager")});
	edit();
	deletedata();
		
	$('.pagesize').change(function(){
			edit();
			deletedata();
		});

		$('.next').click(function(){
				edit();
			deletedata();

		});

	
	$('#add').click(function(){

		$('.table').hide();
		$('#filterShow').hide();
		$('#addalbumform').load('../include/photobookspage/addalbum.php');
		$(this).hide();

	});

	
	function edit(){
		$('.edit').click(function(){
		var id = $(this).val();
		$('.table').hide();
		$('#filterShow').hide();
		$('#addalbumform').load('../include/photobookspage/editalbum.php?id='+id+'');
		$(this).hide();
		$('#add').hide();
	});	
	}



	function deletedata(){
		$('.delete').click(function(){

		var id = $(this).val();

	  $.getJSON('../include/photobookspage/serverside/getDataDel.php', {id: id}, datadel);


	  function datadel (datadel) {
	  	var img_album,img1,img2,img3;

	  	$.each(datadel, function(i,key){

	  		img_album = key.img_album;
	  		img1 = key.img1;
	  		img2 = key.img2;
	  		img3 = key.img3;

	  	});


	  	 

	  	$.post('../include/photobookspage/serverside/deletealbum.php',{id:id, img_album : img_album , img1 : img1 , img2 : img2 , img3 : img3}, function(message){

	  		if(message == 1){
	  			alert('delete success');
	  			window.location.reload();
	  		}else{
	  			alert('delete failed');
	  		}

	  	});


	  }



	});	
	}

}

	

	



	

});