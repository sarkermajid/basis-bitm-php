<?php include 'header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white fw-bold p-3">
                        <div class="card-header text-center fw-bold display-4 text-info">Calculator</div>
                        <form action="action.php" method="post">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">First Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Second Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" name="second_number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Action</label>
                                    </div>
                                    <div class="col-md-9 text-center fs-3">
                                        <label><input type="radio" checked name="action" value="+">+</label>
                                        <label><input type="radio" name="action" value="-">-</label>
                                        <label><input type="radio" name="action" value="*">*</label>
                                        <label><input type="radio" name="action" value="/">/</label>
                                        <label><input type="radio" name="action" value="%">%</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" name="cal_btn" value="Calculate" class="btn btn-outline-info w-100 fw-bold">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Result</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $result ?>" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>