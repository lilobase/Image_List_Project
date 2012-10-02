<HTML>
 <HEAD>
     <LINK rel=STYLESHEET href="<?php echo site_url('assets/bootstrap.css');?>" type="text/css">
 </HEAD>
 <BODY>
<?php

    if (count($data)>0) {
    foreach ($data as $image) {
        echo '<img src ='.$image['path'].' class="img-rounded" height="100" width="100" />';
        echo $image['title'].'<br/>';
        
        echo '<A HREF="'.site_url('upload_controller/del_image?var='.$image['title']).'" class="btn btn-large btn-primary">Delete Image</A><br/>';
    }
    }
?>

    <form>
    <input type="button" value="Add image" class="btn btn-large btn-primary" onclick="self.location.href='<?php echo site_url().'upload_controller'?>'">
    </form> 
     
      </BODY>
</HTML>


