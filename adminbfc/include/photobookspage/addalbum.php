<form role="form" method="POST" enctype="multipart/form-data" action="../include/photobookspage/serverside/add_newdata.php" name="uploaddata">
	<div class="form-group">
         <label>Add new album</label>
    </div>
	<div class="form-group">
         <label>Album Name</label>
          <input id="albumname" name="albumname" class="form-control" type="text" placeholder="Album name">
    </div>
    <div class="form-group">
         <label>Category</label>
      	 <select id="album-category" name="album-category"class="form-control">
      	 	<option value="0">Choose Category</option>
      	   
      	 </select>
    </div>
    <div class="form-group">
    	<label>Cover Album</label> 	
    	<input type="file" name="imgCover" id="imgCover">
    </div>
    <div class="form-group">
      <label>Image 1 </label>  
      <input type="file" name="img1" id="img1">
    </div>
    <div class="form-group">
      <label>Image 2 </label>  
      <input type="file" name="img2" id="img2">
    </div>
    <div class="form-group">
      <label>Image 3 </label>  
      <input type="file" name="img3" id="img3">
    </div>
     <div class="form-group">
      	 <input type="submit" id="submit" class="btn btn-outline btn-default" value="submit">
      <span id="eror"></span>
    </div>
    


</form>

<script type="text/javascript">

 
 $.getJSON('../include/photobookspage/serverside/getcategory.php',getcategory);

 	function getcategory(data) {
 			$('#album-category').find('option :gt(1)').remove();
 			$.each(data, function(i,key){

 			

 				$('#album-category').append('<option value='+key.id_category+'>'+ key.name_category +'</option>');


 			});

 	}


  $('#submit').click(function(event){
    console.log($("#imgCover")[0].files[0].type);
    var albumname = $('#albumname').val();
    var albumCategory = $('#album-category').val();
    var imgCover = $('#imgCover').val();
    //var imgCoverSize = $("#imgCover")[0].files[0].size;
    var img1 = $('#img1').val();
    var img2 = $('#img2').val();
    var img3 = $('#img3').val();

    if(albumname == ''){
         $('#eror').text('Please fill album name');
        return false;
    }else if(albumCategory == 0){
        
        $('#eror').text('Please choose album category');
        return false;
    }else if(!imgCover){
         $('#eror').text('Please choose image cover');
        return false;

    }else if(!img1){
        $('#eror').text('Please choose image 1');
        return false;

    }else if(!img2){
        $('#eror').text('Please choose image 2');
        return false;
    }else if(!img3){
        $('#eror').text('Please choose image 3');
        return false;
    }else{
      return true;
    }


    

    return false;
  });
</script>

