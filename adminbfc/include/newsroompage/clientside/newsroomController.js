$(document).ready(function(){

	$.getJSON('../include/newsroompage/serverside/newsroomController.php',getListNews);


	function getListNews(datanews){

		var no = 1;

		$.each(datanews, function(i,key){

			$('#album tbody').append('<tr><td>'+ no++ +'</td><td>'+ key.title +'</td><td>'+ key.content+'</td><td><img class="content" src="../uploads/'+ key.banner_image+'"></td><td>'+key.news_date+'</td><td><button id="edit" class="btn btn-info btn-xs edit" value="'+key.id_news+'">Edit</button><br><button id="delete" value="'+ key.id_news +'" class="btn btn-info btn-xs delete">delete</button></td></tr>');

		});
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


	$('#add').click(function(){
		$(this).hide();
		$('.table').hide();
		$('#addnews').load('../include/newsroompage/addnews.php');

	});


		function edit(){

			$('.edit').click(function(){
			var id = $(this).val();
			$('.table').hide();
			$('#addnews').load('../include/newsroompage/editnews.php?id='+id+'');
			$(this).hide();
			$('#add').hide();
		});


		}

		function deletedata(){
			$('.delete').click(function(){
			var id = $(this).val();
			$.getJSON('../include/newsroompage/serverside/getDataDel.php', {id: id}, datadel);

			function datadel(datadel){
				var banner_image;
				$.each(datadel, function(i,key){

					banner_image = key.banner_image;

				});


				$.post('../include/newsroompage/serverside/deletealbum.php',{id:id, banner_image : banner_image}, function(message){
					
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