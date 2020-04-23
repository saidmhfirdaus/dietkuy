<div class="container">

    <div class="row mt-3">
        <div class="col-md-6"style="margin: auto">

            <div class="card">
                <div class="card-header">
                    Update Forum
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?= set_value('title') ?>">
                        </div>


                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="desc" class="form-control" id="desc"></textarea>
                        </div>
                        
                        <button type="submit" name="add" class="btn btn-primary float-right">Update Forum</button>
                    </form>

                </div>
            </div>


        </div>
    </div>

</div>