<?php
if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}
?>
<?php include("header.php") ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card bg-dark text-info fw-semibold shadow-lg">
                    <div class="card-header fw-bold text-center border-info h3">All Blog Info</div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result; ?></h4>
                        <table class="table table-bordered table-dark table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>Blog Title</th>
                                    <th>Author Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($blogs as $blog) { ?>
                                <tr class="text-center">
                                    <td><?php echo $blog['title'] ?></td>
                                    <td><?php echo $blog['author'] ?></td>
                                    <td><?php echo $blog['description'] ?></td>
                                    <td><img src="<?php echo $blog['image'] ?>" alt="" height="40" width="40"/></td>
                                    <td class="">
                                        <a href="action.php?page=edit&&id=<?php echo $blog['id'] ?>" class="btn btn-sm btn-outline-info"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        &nbsp;
                                        <a href="action.php?page=delete&&id=<?php echo $blog['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete this ?')"><i class="fa-solid fa-trash"></i> Delete</a>
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
