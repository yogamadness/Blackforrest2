var idedit ;

$(document).ready(function() {
	
	$('#addcategory').hide();
	$('#editCategory').hide();
	$.getJSON('../include/categorypage/serverside/categoryController.php',getListCategory);

	function getListCategory(datacategory){
		var no = 1;

		$.each(datacategory, function(i,key){

			$('#category tbody').append('<tr><td>'+ no++ +'</td><td>'+key.name_category +'</td><td><button id="edit" class="btn btn-primary btn-xs edit" value="'+key.id_category+'">Edit</button>&nbsp;&nbsp;<button id="delete" class="btn btn-danger btn-xs delete" value="'+key.id_category+'">Delete</button></td></tr>');


		});


		$('.edit').click(function(){
			 $('.table').hide();
		 	 $(this).hide();
		 	 $('#editCategory').show();
		 	 $('#add').hide();
		 	 var id = $(this).val();
		 	 idedit = id;
		 	 $.getJSON('../include/categorypage/serverside/getNameCategory.php',{id : id },getNameCategory);

		 	 function getNameCategory(datanamecategory){

		 	 	$.each(datanamecategory, function(i, key){

		 	 		$('#namaCategoryEdit').val(key.name_category);

		 	 	});


		 	 }	

		});


		$('.delete').click(function(){
			var id = $(this).val();

			$.post('../include/categorypage/serverside/deleteCategory.php',{id : id}, function(message){

				window.location.reload();	
					return true;
			});
			

		});



	}

	$('#add').click(function(){
		 $('.table').hide();
		 $(this).hide();
		 $('#addcategory').show();
	});


	$("#submit").click(function(){
		var namaCategory = $('#namaCategory').val();

		if(namaCategory == ''){
			$('#eror').text('Please fill category name');
			return false;
		}else{

			$.post('../include/categorypage/serverside/addcategory.php',{namaCategory : namaCategory}, function(message){

				if(message == 0){

					$('#eror').text('Category name Already Exist');
					return false;

				}else{

					window.location.reload();
					return true;
				}

			});


		}

		return false;
	});


	$("#submitEdit").click(function(){
		var namaCategory = $('#namaCategoryEdit').val();

		if(namaCategory == ''){
			$('#eror').text('Please fill  category name');
			return false;
		}else{
			$.post('../include/categorypage/serverside/editCategory.php',{id :idedit, namaCategory : namaCategory}, function(message){

				
					window.location.reload();	
					return true;
			});	

		}

		return false;
	});


});