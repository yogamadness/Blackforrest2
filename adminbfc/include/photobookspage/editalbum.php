<?php
	$id = $_GET['id'];
?>

<form name="update" method="POST" enctype="multipart/form-data" action="../include/photobookspage/serverside/edit_data.php"> 

	<div class="form-group">
	       <label>Edit album</label>
	    </div>
		<div class="form-group">
	         <label>Album Name</label>
	          <input id="albumname" name="albumname" class="form-control" type="text" placeholder="Album name">
	    	  <input id="id" name="id" class="form-control" type="hidden">
	    </div>
	    <div class="form-group">
	         <label>Category</label>
	      	 <select id="album-category" name="album-category" class="form-control">
	      	 	<option value="0">Choose Category</option>
	      	   
	      	 </select>
	    </div>
	    
	    <div class="form-group">
	    	<label>Cover Album</label><br>
	    	<div class="" id="gmbrCover">
	        
	        </div><br>
	    	<input type="file" name="imgCover" id="imgCover">
	    	<input type="hidden" name="imgCoverLama" id="imgCoverLama">
	    	<input id="markCover" name="markCover" class="form-control" type="hidden">
	    </div>
	    
	    <div class="form-group">
	      <label>Image 1 </label><br>
	       <div class="" id="gmbr1">
	        
	    </div>
	      <input type="file" name="img1" id="img1">
	       <input type="hidden" name="img1Lama" id="img1Lama">
	    	<input id="mark1" name="mark1" class="form-control" type="hidden">
	    </div>
	
	    <div class="form-group">
	      <label>Image 2 </label><br>
	      <div class="" id="gmbr2">
	        
	     </div><br>
	      <input type="file" name="img2" id="img2">
	      <input type="hidden" name="img2Lama" id="img2Lama">
	      <input id="mark2" name="mark2" class="form-control" type="hidden">
	    </div>
	     
	    <div class="form-group">
	      <label>Image 3 </label><br>
	      <div class="" id="gmbr3">

	     </div><br>
	      <input type="file" name="img3" id="img3">
	       <input type="hidden" name="img3Lama" id="img3Lama">
	    	<input id="mark3" name="mark3" class="form-control" type="hidden">
	    </div>
	     <div class="form-group">
	      	 <input type="submit" id="submit" class="btn btn-outline btn-default" value="submit">
	      <span id="eror"></span>
	</div>

</form>

<script type="text/javascript">

 var id = '<?php echo $id  ?>';
 var id_category;

$.getJSON('../include/photobookspage/serverside/getcategoryperid.php',{id : id}, dataItem);





function dataItem (data) {
		
$.getJSON('../include/photobookspage/serverside/getcategory.php', category);

function category(datacategory){
	$('#album-category').find(':gt(1)').remove();
	$.each(datacategory,function(i,key){
		$('#album-category').append('<option value="'+key.id_category+'">'+ key.name_category +'</option>');
	});


	 $.each(data,function(i,key){

	  	$('#albumname').val(key.product_name);
	  	$('#gmbrCover').append('<img class="coverpage" src="../uploads/'+key.img_album+'">');
	  	$('#gmbr1').append('<img class="imageholder" src="../uploads/'+key.img1+'">');
	  	$('#gmbr2').append('<img class="imageholder" src="../uploads/'+key.img2+'">');
	  	$('#gmbr3').append('<img class="imageholder" src="../uploads/'+key.img3+'">');
	  	$('#imgCoverLama').val(key.img_album);
	  	$('#img1Lama').val(key.img1);
	  	$('#img2Lama').val(key.img2);
	  	$('#img3Lama').val(key.img3);
	  	$('#id').val(key.id_product);
	  	id_category = key.id_category;
	  
	
	  });


	 $.each(datacategory,function(i,key){

	 	if(key.id_category == id_category){
	 		$("#album-category option").filter(function() {

	    return $(this).text() == key.name_category; 
		}).prop('selected', true);
	 	}


	});

		 
	 	



}



	 
}


$('#submit').click(function(){

var albumname = $('#albumname').val();
var category = $('#album-category').val();
var imgCover = $('#imgCover').val();
var img1 = $('#img1').val();
var img2 = $('#img2').val();
var img3 = $('#img3').val();

 if(albumname == ''){
 	$('#eror').append('Please fill username');
 	return false;
 }else if(category == 0){
 	$('#eror').append('Please choose category');
 	return false;
 }else{
 	return true;
 }


 return false;

});


 

</script>


