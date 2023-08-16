<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo strtoupper($_GET['page'])?></title>
    <link rel="stylesheet" href="<?php assets('css/bootstrap.css'); ?>">
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </div>
</nav>

<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <?php
            foreach ($allData as $data){
            ?>
            <div class=" col-md-4 pb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $data['img'] ?>" class="card-img-top w-100" height="200px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['name'] ?></h5>
                        <p class="card-text"><?php echo $data['address'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


<script href="<?php assets('js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>