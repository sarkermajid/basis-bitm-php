<?php include 'header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white shadow-lg">
                        <div class="card-header"><h2 class="text-center text-info">All Student Info</h2></div>
                        <div class="card-body">
                            <h3 class="text-center text-danger mb-3"><?php echo isset($message) ? $message : '' ;?></h3>
                            <table class="table table-bordered text-white text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) { ?>
                                    <tr>
                                        <td><?php echo $student['name'] ?></td>
                                        <td><?php echo $student['email'] ?></td>
                                        <td><?php echo $student['mobile'] ?></td>
                                        <td>
                                            <a href="action.php?edit=<?php echo $student['id']?>" class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                            &nbsp;
                                            <a href="action.php?delete=<?php echo $student['id']?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i> Delete</a>
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

<?php include 'footer.php'?>