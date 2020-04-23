<div class="container">

    <div class="row mt-3">
        
        <div class="col-md-6" >

        <?php foreach ($user as $us) : ?>
            <div class="card">
            
                <div class="card-header">
                    <b><?= $us['name']; ?></b>
                    <a style="margin: 3px" href="<?= base_url(); ?>admin/delete/<?= $us['id'] ;?>" class="badge badge-danger float-right" onclick="return confirm('are you sure ?');">Delete</a>   
                </div>
                <div class="card-body">
                    <b>Email      :</b><br>       <?= $us['email']; ?><br>
                    <b>Password :</b><br>    <?= $us['password']; ?>
                </div>
            </div>
            <br>
        <?php endforeach; ?>


        </div>
    </div>

</div>