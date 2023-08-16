<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete project with bootstrap css</title>
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
                    <li><a class="nav-link" href="action.php?page=home"><i class="fa-solid fa-house-user"></i> Home</a></li>
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
                    <li><a class="nav-link" href="action.php?page=portfolio"><i class="fa-solid fa-list"></i> Portfolio</a></li>
                    <li><a class="nav-link" href="action.php?page=contact"><i class="fa-regular fa-address-book"></i> Contact</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li><a class="nav-link" href=""><i class="fa-solid fa-user"></i>&nbsp;Log in</a></li>
                    <li><a class="nav-link" href=""><i class="fa-solid fa-id-card"></i>&nbsp;Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <!-- slider section star  -->
    <div class="carousel slide" id="slide" data-bs-interval="5000" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slide" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#slide" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#slide" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#slide" data-bs-slide-to="3"></button>
        </div>
        <div class="carousel-inner " >
            <div class="carousel-item active">
                <img src="assets/images/00 (3).jpg" alt="" class="w-100" id="slider-img">
                <div class="carousel-caption">
                    <h1 class="wow fadeInDownBig" data-wow-duration="2s"  > Lorem ipsum dolor sit amet.</h1>
                    <p class="wow fadeInLeft" data-wow-duration="3s" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis officia molestias facilis quisquam inventore dolorem pariatur laborum quis dolores distinctio?</p>
                    <a href="" class="btn btn-success wow fadeInUp"  data-wow-duration="3s">Read more</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="assets/images/00 (2).jpg" alt="" class="w-100" id="slider-img">
                <div class="carousel-caption">
                    <h1 class="wow fadeInDownBig" data-wow-duration="2s"  > Lorem ipsum dolor sit amet.</h1>
                    <p class="wow fadeInLeft" data-wow-duration="3s" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis officia molestias facilis quisquam inventore dolorem pariatur laborum quis dolores distinctio?</p>
                    <a href="" class="btn btn-success wow fadeInUp"  data-wow-duration="3s" >Read more</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="assets/images/00 (1).jpg" alt="" class="w-100" id="slider-img">
                <div class="carousel-caption">
                    <h1 class="wow fadeInDownBig" data-wow-duration="2s"  > Lorem ipsum dolor sit amet.</h1>
                    <p class="wow fadeInLeft" data-wow-duration="3s" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis officia molestias facilis quisquam inventore dolorem pariatur laborum quis dolores distinctio?</p>
                    <a href="" class="btn btn-success wow fadeInUp"  data-wow-duration="3s">Read more</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="assets/images/00 (4).jpg" alt="" class="w-100" id="slider-img">
                <div class="carousel-caption">
                    <h1 class="wow fadeInDownBig" data-wow-duration="2s"  > Lorem ipsum dolor sit amet.</h1>
                    <p class="wow fadeInLeft" data-wow-duration="3s" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis officia molestias facilis quisquam inventore dolorem pariatur laborum quis dolores distinctio?</p>
                    <a href="" class="btn btn-success wow fadeInUp"  data-wow-duration="3s" >Read more</a>
                </div>
            </div>
        </div>
        <a href="#slide" class="carousel-control-prev" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></a>
        <a href="#slide" class="carousel-control-next" data-bs-slide="next"><span class="carousel-control-next-icon"></span></a>
    </div>
    <!-- slider section end  -->
    <!-- /  -->
    <div>
        <h1  class="text-center py-3">
            Select Books <span ><i class="fa-solid fa-arrow-turn-down"></i></span>
        </h1>
    </div>
    <!-- card section start  -->
    <section class="py-3 c-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4 card-layout">
                    <div class="card wow fadeInLeftBig" data-wow-duration="1.5s">
                        <div class="layer"></div>
                        <img src="assets/images/222.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit Earum, obcaecati.</p>
                            <a href="" class="btn btn-outline-success wow bounceIn" data-wow-iteration="1000">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-layout">
                    <div class="card wow fadeInUpBig" data-wow-duration="1.5s">
                        <div class="layer"></div>
                        <img src="assets/images/223.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, obcaecati.</p>
                            <a href="" class="btn btn-outline-success wow bounceIn" data-wow-iteration="1000">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-layout">
                    <div class="card wow fadeInRightBig" data-wow-duration="1.5s"><div class="layer"></div>
                        <img src="assets/images/224.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, obcaecati.</p>
                            <a href="" class="btn btn-outline-success wow bounceIn" data-wow-iteration="1000">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-layout">
                    <div class="card wow fadeInLeftBig" data-wow-duration="1.5s"><div class="layer"></div>
                        <img src="assets/images/225.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit Earum, obcaecati.</p>
                            <a href="" class="btn btn-outline-success wow bounceIn" data-wow-iteration="1000">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-layout">
                    <div class="card wow fadeInUpBig" data-wow-duration="1.5s"><div class="layer"></div>
                        <img src="assets/images/226.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, obcaecati.</p>
                            <a href="" class="btn btn-outline-success wow bounceIn" data-wow-iteration="1000">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-layout">
                    <div class="card wow fadeInRightBig" data-wow-duration="1.5s" ><div class="layer"></div>
                        <img src="assets/images/00 (3).jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem, ipsum dolor.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, obcaecati.</p>
                            <a href="" class="btn btn-outline-success wow bounceIn" data-wow-iteration="1000">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- card section end  -->
    <!-- /  -->
    <!-- acording section start  -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card yt">
                        <iframe height="315" src="https://www.youtube.com/embed/Jko4L42bN-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button type="button" class="accordion-button" data-bs-target="#quesOne" data-bs-toggle="collapse">
                                    What is your name!
                                </button>
                            </h1>
                            <div class="accordion-collapse collapse show" id="quesOne" data-bs-parent="#myAccordion">
                                <p class="p-4">My name is Hasibul hamim romel.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button type="button" class="accordion-button" data-bs-target="#quesTwo" data-bs-toggle="collapse">
                                    What is CSS!
                                </button>
                            </h1>
                            <div class="accordion-collapse collapse" id="quesTwo" data-bs-parent="#myAccordion">
                                <p class="p-4">Cascading style sheet</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button type="button" class="accordion-button" data-bs-target="#quesThree" data-bs-toggle="collapse">
                                    What is HTML!
                                </button>
                            </h1>
                            <div class="accordion-collapse collapse" id="quesThree" data-bs-parent="#myAccordion">
                                <p class="p-4">Hypertext Markup Language</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button type="button" class="accordion-button" data-bs-target="#quesFour" data-bs-toggle="collapse">
                                    What is JS!
                                </button>
                            </h1>
                            <div class="accordion-collapse collapse" id="quesFour" data-bs-parent="#myAccordion">
                                <p class="p-4">Java Script</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button type="button" class="accordion-button" data-bs-target="#quesFive" data-bs-toggle="collapse">
                                    What is python!
                                </button>
                            </h1>
                            <div class="accordion-collapse collapse" id="quesFive" data-bs-parent="#myAccordion">
                                <p class="p-4">python is .........</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- acording section end  -->

    <!-- modal pop up box button start  -->
    <section class="py-5 cta">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 text-center">
                    <a href="#" class="btn btn-outline-success rounded-0" data-bs-toggle="modal" data-bs-target="#myModal">Register to find more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- modal pop up box button end  -->

</main>
<footer class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span> Address:</span>
                <p>BASIS Institute of Technology & Management (BITM)
                    BDBL Bhaban (3rd Floor - East), 12 Kawran Bazar, Dhaka -1215.
                    Contact Number: +8809612342486 Ext: 209-211 (from 9:30am – 5:00 pm)
                    Email address: info@bitm.org.bd</p>
            </div>
            <div class="col-md-6"><iframe class="px-5%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14607.60976799166!2d90.37524435541991!3d23.750858100000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1690707149801!5m2!1sen!2sbd" width="95%" height="250" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col-md-3">
                <span class="useful-links">useful links</span>
                <ul>
                    <li><a href="https://bitm.org.bd/">BITM</a></li>
                    <li><a href="https://basis.org.bd/">BASIS</a></li>
                    <li><a href="https://ictd.gov.bd/">ICT Division</a></li>
                    <li><a href="https://seip-fd.gov.bd/">SEIP</a></li>
                    <li><a href="http://www.mof.gov.bd/">Finance Division</a></li>
                    <li><a href="https://www.adb.org/">Asian Development Bank</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRightSection p-3">
        <div class="col-md-2 offset-md-5">
            <p>&copy; Hasibul 2023</p>
        </div>
    </div>
</footer>

<!-- modal pop up box start  -->
<section>
    <div class="modal fade"  id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Lorem ipsum dolor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis molestias qui deleniti quod cumque esse vel recusandae laboriosam fuga, voluptatibus nam eligendi est tempora voluptate a consectetur quidem aspernatur. Dolorem, velit. Facilis cum repellendus repellat velit quos, fuga asperiores nostrum.</h6>
                </div>
                <div class="modal-footer">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- modal pop up box end  -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>