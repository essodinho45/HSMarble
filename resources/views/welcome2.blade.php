<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    {{-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0"> --}}
    <title>HS Marble London</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">



    <!-- Bootstrap core CSS -->
    {{-- <link href="./Product example · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link rel="apple-touch-icon" href="{{ URL::to('/') }}/images/icon.png" sizes="180x180">
    <link rel="icon" href="{{ URL::to('/') }}/images/icon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ URL::to('/') }}/images/icon.png" sizes="16x16" type="image/png">
    <!-- Favicons -->
    {{--
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
        color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico"> --}}
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Custom styles for this template -->
    {{-- <link href="./Product example · Bootstrap v5.0_files/product.css" rel="stylesheet"> --}}
</head>

<body>

    <header class="site-header sticky-top py-1">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-md-none" href="#">
                    <img src="/images/logow.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <a class="navbar-brand d-none d-md-block" href="#">
                            <img src="/images/logow.png" alt="">
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="#quote">Get Quote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light" id="home">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">HS London Marble</h1>
                <p class="lead fw-normal">HS London Marble is a premier glass and mirrors company specializing in high-quality custom pieces for residential and commercial spaces. With a focus on craftsmanship and attention to detail, we offer a wide range of products including bespoke mirrors, glass staircases, shower enclosures, and much more. Our team of skilled artisans uses only the finest materials to create stunning, unique pieces that add elegance and sophistication to any environment. From design concept to installation, HS Marble London delivers the utmost in customer satisfaction and luxury.</p>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="services">
            <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="about">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
            <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="quote">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="portofolio">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                </div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-body shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
    </main>

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="d-block mb-2" role="img" viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                    </path>
                </svg>
                <small class="d-block mb-3 text-muted">© 2017–2021</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Cool
                            stuff</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Random
                            feature</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Team
                            feature</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Stuff
                            for developers</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Another
                            one</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Last
                            time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Resource
                            name</a></li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Resource</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Another
                            resource</a></li>
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Final
                            resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Business</a></li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Education</a></li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Government</a></li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="https://getbootstrap.com/docs/5.0/examples/product/#">Team</a>
                    </li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Locations</a></li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Privacy</a></li>
                    <li><a class="link-secondary"
                            href="https://getbootstrap.com/docs/5.0/examples/product/#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
