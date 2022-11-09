<?php include("header.php") ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-warning fw-semibold shadow-lg">
                    <div class="card-header fw-bold text-center border-dark">All Blog Info</div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result; ?></h4>
                        <table class="table table-bordered table-warning table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Blog Title</th>
                                    <th>Author Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($blogs as $blog) { ?>
                                <tr>
                                    <td><?php echo $blog['title'] ?></td>
                                    <td><?php echo $blog['author'] ?></td>
                                    <td><?php echo $blog['description'] ?></td>
                                    <td><?php echo $blog['image'] ?></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-info"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        <a href="" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php") ?>
