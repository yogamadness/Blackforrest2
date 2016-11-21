<form role="form" method="POST" enctype="multipart/form-data" action="../include/newsroompage/serverside/add_newdata.php" name="uploaddata">
	<div class="form-group">
         <label>Add news</label>
    </div>
	  <div class="form-group">
         <label>News Title</label>
          <input id="newstitle" name="newstitle" class="form-control" type="text" placeholder="News Title">
    </div>

    <div class="form-group">
         <label>News Content</label>
         <textarea id="content" name="content" class="editor"></textarea>
    </div>
    
    <div class="form-group">
    	<label>Banner Image</label> 	
    	<input type="file" name="imgCover" id="imgCover">
    </div>
    
  
     <div class="form-group">
      	 <input type="submit" id="submit" class="btn btn-outline btn-default" value="submit">
      <span id="eror"></span>
    </div>
    


</form>

<script type="text/javascript">
$(".editor").jqte({link: false, unlink: false, format: false});
 

  $('#submit').click(function(event){
    var title = $("#newstitle").val();
    var imgCover = $('#imgCover').val();
    var content = $('#content').val();


   

    if(title == ''){
         $('#eror').text('Please fill news title');
        return false;
    }else if(content == ''){
        
        $('#eror').text('Please fill news content');
        return false;
    }else if(!imgCover){
         $('#eror').text('Please choose image cover');
        return false;

    }else{

      return true;
    } 


    

    return false;
  });
</script>

