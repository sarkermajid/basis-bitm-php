<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Website</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">File Upload</div>
                        <div class="card-body">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-3">Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Upload file">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr/>
                    <table class="table table-bordered table-dark table-striped">
                        <tr>
                            <th>Input Name</th>
                            <td><?php echo $result['name']?></td>
                        </tr>
                        <tr>
                            <th>Input Image</th>
                            <td><img src="<?php echo $result['image'] ?>" alt="" height="250"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/jquery-3.6.1.min.js"></script>
</body>
</html>