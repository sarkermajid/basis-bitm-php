<?php include "header.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white fw-bold">
                    <div class="card-header text-center fw-bold display-6 text-info">Word & String Counter</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">Write Something</div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" rows="5" name="get_message" ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" value="Make Result" class="btn btn-outline-info w-100" name="word_str_btn">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Number of Word</div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $wordResult ?>" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Number of String</div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $stringResult ?>"" class="form-control" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php" ?>
