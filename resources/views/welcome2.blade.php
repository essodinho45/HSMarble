<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    {{-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0"> --}}
    <title>HS London Marble</title>

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


    @vite(['resources/sass/app.scss', 'resources/css/slick.css', 'resources/css/slick-theme.css', 'resources/js/app.js', 'resources/js/slickCarousel.js'])
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
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li> --}}
                        <a class="navbar-brand d-none d-md-block" href="#">
                            <img src="/images/logow.png" alt="">
                        </a>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#quote">Get Quote</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contanct">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light" id="home">
            <div class="col-md-8 p-lg-5 mx-auto my-3 opacity-content">
                <h1 class="display-4 fw-normal">HS London Marble</h1>
                <p class="lead fw-normal">HS London Marble is a premier glass and mirrors company specializing in
                    high-quality custom pieces for residential and commercial spaces. With a focus on craftsmanship and
                    attention to detail, we offer a wide range of products including bespoke mirrors, glass staircases,
                    shower enclosures, and much more. Our team of skilled artisans uses only the finest materials to
                    create stunning, unique pieces that add elegance and sophistication to any environment. From design
                    concept to installation, HS London Marble delivers the utmost in customer satisfaction and luxury.
                </p>
            </div>
        </div>

        <div class="w-100 my-md-3" id="services">
            <h1 class="display-4 fw-normal my-4 text-center">Our Services</h1>
            <div class="d-flex align-items-start row mx-0">
                <div class="nav flex-column nav-pills col-md-4 col-12" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    @foreach ($services as $service)
                        <button
                            class="nav-link @if ($loop->index == 0) active @endif rounded-0 text-capitalize"
                            id="v-pills-srv{{ $service->id }}-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-srv{{ $service->id }}" type="button" role="tab"
                            aria-controls="v-pills-srv{{ $service->id }}"
                            aria-selected="true">{{ $service->name }}</button>
                    @endforeach
                </div>
                <div class="tab-content col-md-8 col-12" id="v-pills-tabContent">
                    @foreach ($services as $service)
                        <div class="tab-pane fade @if ($loop->index == 0) show active @endif "
                            id="v-pills-srv{{ $service->id }}" role="tabpanel"
                            aria-labelledby="v-pills-srv{{ $service->id }}-tab">
                            <p class="pe-3">
                                {!! $service->content !!}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="about">
            <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
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
        </div> --}}

        {{-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="quote">
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
        </div> --}}

        <div class="w-100 my-md-3" id="portofolio">
            <h1 class="display-4 fw-normal my-4 text-center">Our Work</h1>
            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                @foreach ($portofolio_items as $item)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if ($loop->index == 0) active @endif rounded-0"
                            id="pills-pi{{ $item->id }}-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-pi{{ $item->id }}" type="button" role="tab"
                            aria-controls="pills-pi{{ $item->id }}"
                            aria-selected="true">{{ $item->name }}</button>
                    </li>
                @endforeach
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-0" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-0" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Contact</button>
                </li> --}}
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($portofolio_items as $item)
                    <div class="tab-pane fade @if ($loop->index == 0) show @endif active"
                        id="pills-pi{{ $item->id }}" role="tabpanel"
                        aria-labelledby="pills-home-pi{{ $item->id }}">
                        <div class="container">
                            <div class="slick-carousel" id="cp{{ $item->id }}">
                                @foreach ($item->images as $image)
                                    <div class="mx-2">
                                        <img src="{{ $image->url }}" class="img-fluid">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    ...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    ...</div> --}}
        </div>
        <div class="w-100 mt-md-3 bg-dark" id="contanct">
            <h1 class="display-4 fw-normal pt-3 my-4 text-center text-light">Contact Us</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="btn-group btn-group-lg w-100">
                            <a href="mailto:info@hslondonmarble.co.uk" class="btn btn-light rounded-0"><i
                                    class="bi bi-envelope-at"></i></a>
                            <a href="mailto:info@hslondonmarble.co.uk"
                                class="btn btn-light rounded-0">info@hslondonmarble.co.uk</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="btn-group btn-group-lg w-100">
                            <a class="btn btn-light rounded-0"><i class="bi bi-geo-alt"></i></a>
                            <a class="btn btn-light rounded-0">Unit 5e Station Rd, Slough SL3 6EG</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group btn-group-lg w-100">
                            <a href="tel:07951612480" class="btn btn-light rounded-0"><i class="bi bi-phone"></i></a>
                            <a href="tel:07951612480" class="btn btn-light rounded-0">07951612480</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group btn-group-lg w-100">
                            <a href="tel:02082260140" class="btn btn-light rounded-0"><i
                                    class="bi bi-telephone"></i></a>
                            <a href="tel:02082260140" class="btn btn-light rounded-0">02082260140</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="container m-0 mw-100 py-5 bg-dark">
        <div class="row">
            <div class="col-12 col-md">
                <img src="/images/icon.png" height="32px">
                <small class="ms-3 mb-3 text-white">HS London Marble © 2024</small>
            </div>
            {{-- <div class="col-6 col-md">
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
            </div> --}}
        </div>
    </footer>

</body>

</html>
