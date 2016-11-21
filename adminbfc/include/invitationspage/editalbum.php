<?php
	$id = $_GET['id'];
?>

<form name="update" method="POST" enctype="multipart/form-data" action="../include/invitationspage/serverside/edit_data.php"> 

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
	      	 <select id="album-category" name="album-category"class="form-control">
	      	 	<option value="0">Choose Category</option>
	      	   
	      	 </select>
	    </div>
	    
	    <div class="form-group">
	    	<label>Cover Album</label><br>
	    	<div class="" id="gmbrCover">
	        
	        </div><br>
	    	<input type="file" name="imgCover" id="imgCover">
	    	<input type="hidden" name="imgCoverLama" id="imgCoverLama">
	    </div>
	    
	    <div class="form-group">
	      <label>Image 1 </label><br>
	       <div class="" id="gmbr1">
	        
	    </div>
	      <input type="file" name="img1" id="img1">
	       <input type="hidden" name="img1Lama" id="img1Lama">
	    	
	    </div>
	
	   
	     <div class="form-group">
	      	 <input type="submit" id="submit" class="btn btn-outline btn-default" value="submit">
	      <span id="eror"></span>
	</div>

</form>

<script type="text/javascript">

 var id = '<?php echo $id  ?>';
 var id_category;
$.getJSON('../include/invitationspage/serverside/getcategoryperid.php',{id : id}, dataItem);





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
	 
	  	$('#imgCoverLama').val(key.img_album);
	  	$('#img1Lama').val(key.img1);
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


