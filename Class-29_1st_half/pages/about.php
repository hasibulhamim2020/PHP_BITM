<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo strtoupper($_GET['page'])?></title>
    <link rel="stylesheet" href="<?php asset('css/bootstrap.css'); ?>">


</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="route.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="route.php?page=about">About</a>

<!--                        <a class="nav-link" href="--><?php //\App\classes\Action::index1(about) ;?><!--">About</a>-->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


</header>



<section class="py-5">
    <div class="container">
        <div class="row">

            <?php
            foreach ($allData as $data) {


            ?>
            <div class="col-md-4">



                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $data['img']  ;?>" class="card-img-top w-100" height="200px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['name']; ?></h5>
                        <p class="card-text"> <?php echo $data['address']; ?>  </p>
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


<script src="<?php  asset('js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>


<?php

//print_r($data);
//print_r($allData );



?>

