<div class="container">

    <div class="row mt-3">
        <div class="col-md-6"style="margin: auto">

            <div class="card" >
                <div class="card-header">
                    Edit Profile
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="type" name="name" class="form-control" id="name" value="<?= $user['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?= $user['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" id="password" value="<?= $user['password']; ?>">
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Confirm</button>
                    </form>

                </div>
            </div>


        </div>
    </div>

</div>