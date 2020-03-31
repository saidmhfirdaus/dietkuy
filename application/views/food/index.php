<div class="container">
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Serving</th>
                    <th scope="col">Calori</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $food as $fd) : ?>
                <tr>
                    <th scope="row"><?= $fd['id']; ?></th>
                    <td><?= $fd['name']; ?></td>
                    <td><?= $fd['serving']; ?></td>
                    <td><?= $fd['calori']; ?></td>
                </tr>
                <?php endforeach ?>
             </tbody>
            </table>
    </div>
</div>