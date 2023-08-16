<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_GET['page']?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Handjet:wght@300&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <nav class="navbar fixed-top navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand me-auto"><i class="fa-solid fa-hotel fa-lg"></i>&nbsp;E-Library</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link" href=""><i class="fa-solid fa-house-user"></i> Home</a></li>
                    <li class="dropdown my-dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle = "dropdown"><i class="fa-regular fa-address-card"></i> About</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="" class="dropdown-item">one</a></li>
                            <li><a href="" class="dropdown-item">Two</a></li>
                            <li><a href="" class="dropdown-item">Three</a></li>
                            <li><a href="" class="dropdown-item">Four</a></li>
                            <li><a href="" class="dropdown-item">Five</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href=""><i class="fa-solid fa-list"></i> Portfolio</a></li>
                    <li><a class="nav-link" href=""><i class="fa-regular fa-address-book"></i> Contact</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li><a class="nav-link" href=""><i class="fa-solid fa-user"></i>&nbsp;Log in</a></li>
                    <li><a class="nav-link" href=""><i class="fa-solid fa-id-card"></i>&nbsp;Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="mt-5">
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php
                foreach ($students as $key => $student){
                    ?>
                <div class="col-md-4 pb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/00 (2).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ID : <?php echo $key+1?></h5>
                            <p class="card-text">NAME: <?php echo $student['name'] ?></p>
                        </div>
                        <ul class="list-group list-group-flush"><li class="list-group-item">age : <?php echo $student['age'] ?></li>
                            <li class="list-group-item">address : <?php echo $student['address'] ?></li>
                            <li class="list-group-item">mobile 1 : <?php echo $student['mobile']['mobile-01'] ?></li>
                            <li class="list-group-item">mobile 2 : <?php echo $student['mobile']['mobile-02'] ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-danger">Student details</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>
















<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
