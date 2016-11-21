<?php $id = $_GET['id']; ?>

<form role="form" method="POST" enctype="multipart/form-data" action="../include/newsroompage/serverside/edit_data.php" name="uploaddata">
  <div class="form-group">
         <label>Edit news</label>
    </div>
    <div class="form-group">
         <label>News Title</label>
          <input id="newstitle" name="newstitle" class="form-control" type="text" placeholder="News Title">
          <input type="hidden" name="id" id ="id" value="<?php echo $id; ?>">
    </div>

    <div class="form-group">
         <label>News Content</label>
         <textarea id="content" name="content" class="editor"></textarea>
    </div>

    <div class="form-group">
        <div class="" id="gmbr1">
          
         </div>
    </div>
    
    <div class="form-group">
      <label>Banner Image</label>
      <input type="hidden" name="imageCoverLama" id="imageCoverLama">
      <input type="file" name="imgCover" id="imgCover">
    </div>
    
  
     <div class="form-group">
         <input type="submit" id="submit" class="btn btn-outline btn-default" value="submit">
      <span id="eror"></span>
    </div>
    


</form>

<script type="text/javascript">
$(".editor").jqte({link: false, unlink: false, format: false});
  
  var id = '<?php  echo $id ?>';


  $.getJSON('../include/newsroompage/serverside/getnewsData.php',{id : id },getNews);


  function getNews(data){

    $.each(data, function(i,key){

       $('#newstitle').val(key.title);
       $('.editor').jqteVal(key.content);
       $('#imageCoverLama').val(key.banner_image);
       $('#gmbr1').append('<img class="coverpage" src="../uploads/'+key.banner_image+'">');



    });


  }



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
    }else{

      return true;
    } 

    return false;
  });
</script>

