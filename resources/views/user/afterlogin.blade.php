<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">
</head>



<body>
    <!-- .......Start NavBar........................... -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid ">
            <a class="navbar-brand navname" href="#">AdvenTure</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            &emsp;
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item active">
                        <a class="nav-link fontcolor  " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontcolor" href="/package.html">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontcolor" href="/about.html">About</a>
                    </li>

                    <li class="nav-item" href="#">
                        <a class="nav-link fontcolor " href="/team.html">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fontcolor" href="/contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontcolor" href="/profile.html">Profile</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    <!--Start Corousal  -->
    <section>
        <div id="carouselExampleRide" class="carousel slide carousel-fade" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item  active">
                    <img src="cr2.jpg" class="d-block w-100" alt="..."
                        style="height: 550px; width: 100%; opacity: 0.8;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="crh2">The Journey of a Thousand Miles Begin With a Single Step.</h2>
                        <p class="crp">"Travel is an Investment in yourself."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="cr1.jpg" class="d-block w-100  " alt="..."
                        style="height: 550px; width: 100%; opacity: 0.8;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="crh2">Take only memories, leave only footprints.</h2>
                        <p class="crp">"Travel is an Investment in yourself."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="cr3.jpg" class="d-block w-100" alt="..."
                        style="height: 550px; width: 100%; opacity: 0.8;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="crh2">Life begins at the end of your comfort zone</h2>
                        <p class="crp">"Travel is an Investment in yourself."</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--End Corousal -->

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6 ">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Tour</strong>
                        <h3 class="mb-0">Lumbani</h3>
                        <hr>
                        <div class="mb-1 text-body-secondary">Rs.5000</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <button class="btn btn-outline-info  viewtourbtn">View Tour</button>
                    </div>
                    <div class="col-auto d-lg-md-sm-block  ">
                        <img src="lumbani1.jpg" alt="" class="bd-placeholder-img" width="200"
                            height="270">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Tour</strong>
                        <h3 class="mb-0">Lumbani</h3>
                        <hr>
                        <div class="mb-1 text-body-secondary">Rs.5000</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <button class="btn btn-outline-info  viewtourbtn">View Tour</button>
                    </div>
                    <div class="col-auto d-lg-md-sm-block  ">
                        <img src="ktm.jpg" alt="" class="bd-placeholder-img" width="200"
                            height="270">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Tour</strong>
                        <h3 class="mb-0">Lumbani</h3>
                        <hr>
                        <div class="mb-1 text-body-secondary">Rs.5000</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <button class="btn btn-outline-info  viewtourbtn">View Tour</button>
                    </div>
                    <div class="col-auto d-lg-md-sm-block  ">
                        <img src="ktm.jpg" alt="" class="bd-placeholder-img" width="200"
                            height="270">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Tour</strong>
                        <h3 class="mb-0">Lumbani</h3>
                        <hr>
                        <div class="mb-1 text-body-secondary">Rs.5000</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <button class="btn btn-outline-info  viewtourbtn">View Tour</button>
                    </div>
                    <div class="col-auto d-lg-md-sm-block  ">
                        <img src="lumbani.jpg" alt="" class="bd-placeholder-img" width="200"
                            height="270">
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Starts Footer -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-4 col-md-4 mb-3">
                    <h5>Features</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Team
                                Features</a></li>

                    </ul>
                </div>

                <div class="col-4 col-md-4 mb-3">
                    <h5>Resources</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Resources</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Resources
                                name</a></li>

                    </ul>
                </div>

                <div class="col-4 col-md-4 mb-3">
                    <h5>About</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Team</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Location</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Privacy</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Terms</a></li>

                    </ul>
                </div>


            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy;2023 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><img href="cr1.jpg"
                                class="bi" width="24" height="24 ">

                        </a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- End Foooter -->



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>
