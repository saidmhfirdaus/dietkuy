<div class="container">
    <?php if($this->session->flashdata('food')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Food has been <strong>successfully </strong><?= $this->session->flashdata('food');?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">

        <div class="col-md-6">
            <a href="<?=base_url();  ?>food/add" class = "btn btn-primary">Add Food</a>
            
        </div>
        
    </div>


    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Food Name</th>
                    <th scope="col">Serving</th>
                    <th scope="col">Calori</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach( $food as $fd) : ?>
                <tr>
                    
                    <td><?= $fd['name']; ?></td>
                    <td><?= $fd['serving']; ?></td>
                    <td><?= $fd['calori']; ?></td>
                    <td><a style="margin: 3px" href="<?= base_url(); ?>food/update/<?= $fd['id'] ;?>" class="badge badge-success float-left" onclick="return confirm('are you sure ?');">Update</a><a style="margin: 3px" href="<?= base_url(); ?>food/delete/<?= $fd['id'] ;?>" class="badge badge-danger float-left" onclick="return confirm('are you sure ?');">Delete</a> </td>
                </tr>
                <?php endforeach; ?>
             </tbody>
            </table>
            
    </div>
</div>