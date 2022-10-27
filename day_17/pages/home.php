<?php include("header.php") ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">This is Home Page</h1>
            </div>
        </div>
        <div class="row py-5">
            <?php
//                print_r($studentInfo);
                foreach ($studentData as $item)
                {
            ?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; background-color: red; color: yellow;">
                    <div class="card-body">
                        <img src="assets/img/1.jpg" alt="" class="img-fluid">
                        <p class="card-title"><?php echo "Id :" . $item['id'];?></p>
                        <p class="card-title"><?php echo "Name :". $item['name'];?></p>
                        <p class="card-title"><?php echo "Profession :" . $item['profession'];?></p>
                        <p class="card-title"><?php echo "Mobile :". $item['mobile'];?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>

<?php include("footer.php") ?>