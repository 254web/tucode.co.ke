<template>
    <div>
        <!-- Topbar Start -->
        <div class="container-fluid bg-light d-none d-lg-block">
            <div class="row align-items-center top-bar">
                <div class="col-lg-3 col-md-12 text-center text-lg-start">
                    <a href="" class="navbar-brand m-0 p-0">
                        <h1 class="text-primary m-0">TuCode</h1>
                    </a>
                </div>
                <div class="col-lg-9 col-md-12 text-end">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <i class="fa fa-map-marker-alt text-primary me-2"></i>
                        <p class="m-0 text-sm">Likoni, Lunga lunga RD, county 001,Kenya</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <i class="far fa-envelope-open text-primary me-2"></i>
                        <p class="m-0">info@tucode.co.ke</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
                <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                    <h1 class="text-primary m-0 btn btn-link">TuCode</h1>
                </a>
                <button class="navbar-toggler shadow-lg" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-dark"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto">
                        <a href="" class="nav-item nav-link active">Home</a>
                        <router-link to="/about" class="nav-item nav-link">About</router-link>
                        <!-- <router-link to="/team" class="nav-item nav-link">Our Team</router-link> -->
                        <router-link :to="{ name: 'service' }" class="nav-item nav-link"
                            target="_blank">Services</router-link>
                        <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="#" class="dropdown-item">Web Development</a>
                            Covers web application part as well
                            <a href="#" class="dropdown-item">Web applications</a>
                            <a href="#" class="dropdown-item">Web Hosting</a>
                            <a href="#" class="dropdown-item">Desktop Applications</a>
                            <a href="team.html" class="dropdown-item">Project Management</a>
                            <a href="#" class="dropdown-item">Content Management</a>
                            Covers project management as well
                            <a href="#" class="dropdown-item">Maintenance</a>
                            <a href="#" class="dropdown-item">Cyber Services</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>-->

                        <router-link to="/contact" class="nav-item nav-link">Contact</router-link>
                    </div>
                    <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center shadow-lg">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                            style="width: 45px; height: 45px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="mb-1 text-white">Available on contact:</p>
                            <h5 class="m-0 text-secondary"><a href="tel:+254 746 512687"
                                    style="text-decoration: none; color: aliceblue;">+254(0) 746 512687</a></h5>
                        </div>
                    </div>
                </div>
            </nav>
    </div>
    <!-- Navbar End -->
</div></template>
