<form role="form" method="POST" enctype="multipart/form-data" action="../include/invitationspage/serverside/add_newdata.php" name="uploaddata">
	<div class="form-group">
         <label>Add new Invitation album</label>
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

    var albumname = $('#albumname').val();
    var albumCategory = $('#album-category').val();
    var imgCover = $('#imgCover').val();
    var img1 = $('#img1').val();
   

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

    }else{
      return true;
    }


    

    return false;
  });
</script>

