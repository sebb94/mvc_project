<?php require(APPROOT . '/views/inc/header.php')?>
    <a href="<?php echo URLROOT;?>/posts/" class="btn btn-light"><i class="fa fa-backward mr-2"></i>Back</a>
    <div class="card card-body bg-light mt-5">
            <h2><?php echo $data['post']->title;?></h2>

            <div class="bg-secondary text-white p-2 mb-3">
                Written by: <?php echo $data['user']->name;?> on <?php echo $data['post']->created_at;?>
            
            </div>

            <p> <?php echo $data['post']->body;?></p>

            <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
                
                <hr> 
                <div class="row">
                      <a href="<?php echo URLROOT;?>/posts/edit/<?php echo $data['post']->id;?>" class="btn btn-info">Edit</a>
            
                <form class="pull-right ml-auto" action="<?php echo URLROOT;?>/posts/delete/<?php echo $data['post']->id;?>" method="POST">
                        <input type="submit" value="Delete" class="btn btn-danger">
                <form>
                
                </div>
              


            <?php endif; ?>
        


<?php require(APPROOT . '/views/inc/footer.php')?>