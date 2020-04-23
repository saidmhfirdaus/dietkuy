<div class="container">

    <div class="row mt-3">
        
        <div class="col-md-6" style="margin: auto">

            <a style="color: white;font-size:50px;font-family: candara;text-align: center;margin:auto"><img src="assets/logo.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">---My Account---</a>
            <div class="card">
                
                <div class="card-header">
                    
                    <a><b><?= $user['name']; ?></b></a>  
                </div>
                <div class="card-body">
                    <b>Email      :</b><br>       <?= $user['email']; ?><br>
                    <b>Password :</b><br> <input type="password" value="<?= $user['password']; ?>" id="pass" disabled><br>
                    
                </div>
                <a href="<?= base_url(); ?>profile/update/<?= $user['id'];?>" class="btn btn-primary">Edit Profile</a>
            </div>
            <br>
        


        </div>
    </div>

</div>