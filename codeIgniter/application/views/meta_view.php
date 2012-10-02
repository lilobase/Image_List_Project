<html>
    <head>
        <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/image-grille.css'); ?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/jquery.lightbox-0.5.css'); ?>" media="screen" />
    </head>
    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Gallerie d'image <small>imported from japan</small></h1>
                <p>Gallerie d'images</p>
            </div>
            
            <?php if(!empty($error_message)): ?>
                <div class="alert alert-error">
                    <h4>Error</h4>
                    <p>
                    <?php echo $error_message; ?>
                    </p>
                </div>
            <?php endif; ?>
            
            <?php if(!empty($success_message)): ?>
                <div class="alert alert-success">
                    <h4>Success</h4>
                    <p>
                    <?php echo $success_message; ?>
                    </p>
                </div>
            <?php endif; ?>
            
            <?php if(!empty($delete_message)): ?>
                <div class="alert alert-info">
                    <h4>Delete</h4>
                    <p>
                    <?php echo $delete_message; ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php if (!empty($data)): ?>
                <ul class="thumbnails">
                <?php foreach ($data as $image): ?>
                    <li class="span4">
                        <div class="thumbnail">
                            <a href="<?php echo $image['big_url'] ?>" class="lightbox-link">
                                <img src ="<?php echo $image['thumb_url'] ?>"  alt="<?php echo $image['name'] ?>" title="<?php echo $image['name'] ?>" />
                            </a>
                            <p>
                                 <h3><?php echo (empty($image['name'])) ? '&nbsp;' : $image['name'] ?></h3>
                                <a href="<?php echo site_url('imagelist_controller/del_image?var=' . $image['title']) ?>" class="btn btn-mini btn-primary delete">
                                    Delete Image
                                </a>
                            </p>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>            
                <div class="">
                    <button id="add" type="button" class="btn" data-toggle="button">Add Image</button>
                </div>
            <?php endif; ?>



            <div id="div_form" class="<?php if(!empty($data)) echo 'hide'; ?>">
<?php $this->load->view('form/uploadimage'); ?>
            </div>


            <script type="text/javascript" src="<?php echo site_url('assets/js/jquery.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('assets/js/jquery.lightbox-0.5.js'); ?>"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.hide').hide();
                    $('#add').click(function(){
                        $('#div_form').toggle();
                    });
                    $(' .lightbox-link').lightBox({fixedNavigation:true});
                });

            </script>
        </div>
    </body>
</html>