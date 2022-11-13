<?php
if(isset($_SESSION['id']))
{
    header('Location: action.php?page=dashboard');
}
?>
<?php include("header.php") ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark fw-semibold text-info shadow-lg">
                        <div class="card-header fw-bold text-center border-info h3">Login Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-danger"><?php echo $result; ?></h4>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">Email Address</div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Password</div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="login-btn" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include("footer.php") ?>