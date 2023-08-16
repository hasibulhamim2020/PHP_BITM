
<?php //print_r($_GET);  ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" ">
                <img src="<?php echo $_GET['im'] ?>" class="card-img-top w-100" height="350px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name: <?php echo $_GET['name'] ?> <?php ?> </h5>
                    <p class="card-text">Address: <?php ?> </p>
                    <p class="card-text">Age: <?php ?></p>
                    <p class="card-text">Class: <?php ?> </p>
                    <p class="card-text">Email: <?php ?> </p>
                    <p class="card-text">Mobile: <?php ?> </p>

                </div>
                </div>
            </div>
        </div>

    </div>
</section>
