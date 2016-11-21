$(document).ready(function() {

	$.getJSON('../include/invitationspage/serverside/getListAlbum.php',getListAlbum);


	function getListAlbum(listdata){
		var no = 1;
		
		

		$.each(listdata, function(i,key){
			
			$('#album tbody').append('<tr><td>'+ no++ +'</td><td>'+ key.product_name +'</td><td>'+ key.name_category +'</td><td><img id="cover" src="../uploads/'+ key.img_album +'"></td><td><img id="content" class="content" src="../uploads/'+ key.img1 +'"><td>'+key.date+'</td><td><button id="edit" class="btn btn-info btn-xs edit" value="'+ key.id_product +'">Edit</button>&nbsp;&nbsp;<button id="delete" class="btn btn-info btn-xs delete" value="'+ key.id_product +'">Delete</button></td></tr>');

		});

		//$("#album").tablesorter({widthFixed: true, widgets: ['zebra']}).tablesorterPager({container: $("#pager")}); 
		
		$('#album').tablesorter().tablesorterPager({positionFixed: false,container: $("#pager")})
		

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
	
	}


	

	$("#add").click(function(){

		$('.table').hide();
		$(this).hide();
		$('#filterShow').hide();
		$('#addalbumform').load('../include/invitationspage/addinvitation.php');

	});


	function edit(){
		$('.edit').click(function(){
		var id = $(this).val();
		$('#filterShow').hide();
		$('.table').hide();
		$('#addalbumform').load('../include/invitationspage/editalbum.php?id='+id+'');
		$(this).hide();
		$('#add').hide();

		});
	}



	function deletedata(){
		$('.delete').click(function(){
			var id = $(this).val();
			 $.getJSON('../include/invitationspage/serverside/getDataDel.php', {id: id}, datadel);

			function datadel(datadel){
			  var img_album,img1;
				$.each(datadel, function(i,key){

					img_album = key.img_album;
	  				img1 = key.img1;


				});

				$.post('../include/invitationspage/serverside/deletealbum.php',{id:id, img_album : img_album , img1 : img1}, function(message){
					
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


	
});