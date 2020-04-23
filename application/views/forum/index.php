<div class="container">
    <?php if ($this->session->flashdata('food')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Forum has been <strong>successfully </strong><?= $this->session->flashdata('forum'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">

        <div class="col-md-6">
            <a href="<?= base_url();  ?>forum/add" class="btn btn-primary">Create a New Discussion</a>
        </div>
    </div>


    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($forum as $fd) : ?>
                    <tr>

                        <td><?= $no ?></td>
                        <?php $no = $no + 1 ?>
                        <td><?= $fd['title']; ?></td>
                        <td><?= $fd['desc']; ?></td>
                        <td><a style="margin: 3px" href="<?= base_url(); ?>forum/update/<?= $fd['id'];?>" class="badge badge-success float-left" onclick="return confirm('are you sure ?');">Update</a><a style="margin: 3px" href="<?= base_url(); ?>forum/delete/<?= $fd['id'] ;?>" class="badge badge-danger float-left" onclick="return confirm('are you sure ?');">Delete</a> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>