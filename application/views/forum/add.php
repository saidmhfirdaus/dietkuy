<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Create Discussion
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="ftitle" class="form-control" id="ftitle">
                        </div>


                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" name="fdesc" class="form-control" id="fdesc">
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Create</button>
                    </form>

                </div>
            </div>


        </div>
    </div>

</div>