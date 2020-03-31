<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Add Food
            </div>
            <div class="card-body">
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert"><?= validation_errors();?>
                    </div>
                <?php endif; ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="food">Food Name</label>
                        <input type="text" name="fname" class="form-control" id="fname">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="serving">Food serving</label>
                        <input type="text" name="fserving" class="form-control" id="fserving">
                    </div>
                    <div class="form-group">
                        <label for="calori">Food Calori (per serving)</label>
                        <input type="text" name="fcalori" class="form-control" id="fcalori">
                    </div>
                    <button type="submit" name="add" class="btn btn-primary float-right">Add Food</button>
                </form>
                
            </div>
        </div>


        </div>
    </div>

</div>