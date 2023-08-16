
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php
             foreach ($allStudentData as $vlaue){
            ?>
            <div class="col-md-4 pb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $vlaue['img']; ?>" class="card-img-top w-100" height="200px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $vlaue['name']; ?></h5>
                        <p class="card-text">Address: <?php echo $vlaue['address']; ?></p>
                        <a href="route.php?page=student-details&im=<?php echo $vlaue['img']; ?>&name=<?php echo $vlaue['name']; ?>" class="btn btn-outline-primary">Student Details</a>
                    </div>
                </div>
            </div>
            <?php
             }
            ?>
        </div>
    </div>
</section>

