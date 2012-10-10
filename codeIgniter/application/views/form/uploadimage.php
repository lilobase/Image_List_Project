<form class="form-horizontal" method="post" action ="<?php echo site_url() . 'image_controller/upload' ?>" enctype="multipart/form-data" >
 
    <legend>Ajouter une image</legend>
    <div class="control-group">
        <label for="image" class="control-label">Image</label>
        <div class="controls">
            <input type ="file" name ="image" value=""/>
        </div>
    </div>
    
    <div class="control-group">
        <label for="image_name" class="control-label">Nom de l'image</label>
        <div class="controls">
            <input type ="text" name ="image_name" value=""/>
        </div>
    </div>
    
    <input type="submit" class="btn" value="Envoyer" />

</form>

