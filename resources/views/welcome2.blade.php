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
                    <button class="nav-link active rounded-0 text-capitalize" id="v-pills-tam-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-tam" type="button" role="tab" aria-controls="v-pills-tam"
                        aria-selected="true">toughened antique mirror</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-pc-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-pc" type="button" role="tab" aria-controls="v-pills-pc"
                        aria-selected="false">plain colour</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-dp-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-dp" type="button" role="tab" aria-controls="v-pills-dp"
                        aria-selected="false">design printed</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-sc-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-sc" type="button" role="tab" aria-controls="v-pills-sc"
                        aria-selected="true">sparkling colour</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-lb-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-lb" type="button" role="tab" aria-controls="v-pills-lb"
                        aria-selected="false">led backlit</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-bm-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-bm" type="button" role="tab" aria-controls="v-pills-bm"
                        aria-selected="false">bathroom mirror</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-fwm-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-fwm" type="button" role="tab" aria-controls="v-pills-fwm"
                        aria-selected="true">Future wall mirrors</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-gb-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-gb" type="button" role="tab" aria-controls="v-pills-gb"
                        aria-selected="false">glass balustrade</button>
                    <button class="nav-link rounded-0 text-capitalize" id="v-pills-w-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-w" type="button" role="tab" aria-controls="v-pills-w"
                        aria-selected="false">worktops</button>
                    {{-- <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
                </div>
                <div class="tab-content col-md-8 col-12" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-tam" role="tabpanel"
                        aria-labelledby="v-pills-tam-tab">
                        <p class="pe-3">
                            At <b>HS London Marble</b>, we offer toughened antique mirrors that
                            combine elegance with durability. Our toughening process enhances the strength of the
                            mirror,
                            making it resistant to scratches and breakage. These mirrors feature a distressed vintage
                            finish
                            that adds character and charm to any space. Whether you're looking to add a touch of
                            sophistication to your home or office, our toughened antique mirrors are the perfect choice.
                            Transform your space with the timeless beauty of our antique mirrors from <b>HS Marble
                                London</b>.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-pc" role="tabpanel" aria-labelledby="v-pills-pc-tab">
                        <p class="pe-3">We
                            offer a stunning range of plain color glass at <b>HS London Marble</b>, that adds a touch of
                            elegance
                            and sophistication to any space. Our high-quality plain color glass is perfect for creating
                            a
                            sleek and modern look in your home or office. Whether you're looking to incorporate a subtle
                            pop
                            of color or create a seamless and sophisticated backdrop, our plain color glass is the
                            perfect
                            choice. With our expertise and dedication to quality, you can trust <b>HS London Marble</b>
                            to
                            provide
                            you with the perfect solution for your glass needs.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-dp" role="tabpanel" aria-labelledby="v-pills-dp-tab">
                        <p class="pe-3">
                            At <b>HS London Marble</b>, we offer a wide range of design printed glass options to enhance
                            the
                            aesthetic appeal of your space. Our design printed glass is a versatile and stylish choice
                            for adding a unique touch to your interiors. Whether you're looking to create a bold
                            statement or simply add a subtle element of design, our design printed glass can be
                            customized to suit your specific preferences. With high-quality materials and expert
                            craftsmanship, our design printed glass will bring new life to any room in your home or
                            office. Contact us today to explore the endless design possibilities with our design printed
                            glass products.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-sc" role="tabpanel" aria-labelledby="v-pills-sc-tab">
                        <p class="pe-3">
                            Add a touch of elegance and glamour to your space with our stunning selection of sparkling
                            color
                            glass. At <b>HS London Marble</b>, we offer a range of vibrant and shimmering glass options
                            that will
                            instantly elevate the aesthetic of any room. Whether you want to create a bold statement
                            piece
                            with a splash of color or add a subtle hint of sparkle to your design, our sparkling color
                            glass
                            is the perfect choice. With our expertise and high-quality products, you can transform your
                            space into a stylish and sophisticated oasis. Browse our collection today and discover the
                            beauty and versatility of sparkling color glass.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-lb" role="tabpanel" aria-labelledby="v-pills-lb-tab">
                        <p class="pe-3">
                            Introducing our exquisite LED backlit mirrors, the perfect fusion of functionality and
                            sophistication. Elevate your space with these modern and stylish mirrors that not only
                            provide practical illumination but also add a touch of elegance to any room. Our LED backlit
                            mirrors are crafted with precision and attention to detail, ensuring a high-quality and
                            durable product that will enhance the ambiance of your space. Whether it's for a residential
                            or commercial setting, our LED backlit mirrors are sure to impress with their sleek design
                            and stunning visual impact. Experience luxury and style with <b>HS London Marble</b>'s LED
                            backlit
                            mirrors.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-bm" role="tabpanel" aria-labelledby="v-pills-bm-tab">
                        <p class="pe-3">
                            <b>HS London Marble</b> offers a stunning collection of bathroom mirrors that combine
                            functionality
                            with style. Our range includes a variety of designs, shapes, and sizes to suit every taste
                            and bathroom decor. Whether you are looking for a sleek and modern mirror or a classic and
                            elegant design, we have the perfect mirror to enhance your bathroom space. Our high-quality
                            mirrors are made using premium materials and craftsmanship to ensure durability and
                            longevity. Transform your bathroom into a luxurious retreat with a beautiful mirror from
                            <b>HS
                                London Marble</b>.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-fwm" role="tabpanel" aria-labelledby="v-pills-fwm-tab">
                        <p class="pe-3">
                            Our collection of future wall mirrors at <b>HS London Marble</b> glass company brings a
                            touch of
                            contemporary elegance to any bathroom space. Crafted from high-quality glass and featuring
                            innovative LED backlighting technology, these mirrors not only enhance the aesthetic appeal
                            of the room but also provide functional and practical lighting for your daily grooming
                            routine. The sleek and modern design of our future wall mirrors adds a sophisticated touch
                            to any bathroom setting, making them a must-have accessory for those looking to elevate
                            their space with style and functionality.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-gb" role="tabpanel" aria-labelledby="v-pills-gb-tab">
                        <p class="pe-3">
                            Glass balustrades are a sophisticated and modern addition to any staircase or balcony,
                            offering both style and safety. At <b>HS London Marble</b>, we offer a wide range of glass
                            balustrade options to suit your design preferences and architectural requirements. Our
                            expert team can customize the balustrades to fit your space perfectly, creating a sleek and
                            seamless look. With high-quality materials and precise craftsmanship, our glass balustrades
                            are not only functional but also add a touch of elegance to any interior or exterior space.
                            Trust <b>HS London Marble</b> to deliver stunning glass balustrade solutions that enhance
                            the
                            beauty and functionality of your home or commercial property.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-w" role="tabpanel" aria-labelledby="v-pills-w-tab">
                        <p class="pe-3">
                            For high-quality worktops that combine functionality with elegance, look no further than
                            <b>HS
                                London Marble</b>. Our range of worktops are expertly crafted from premium materials,
                            ensuring
                            durability and a stylish finish that will elevate any kitchen or bathroom design. Whether
                            you prefer the timeless sophistication of marble, the sleek modern look of quartz, or the
                            natural beauty of granite, we have the perfect worktop solution to suit your personal style
                            and taste. Trust <b>HS London Marble</b> for stunning worktops that will enhance the
                            aesthetic
                            appeal and functionality of your space.
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12 col-md-4">
                    <div class="bg-dark px-2 px-md-4 text-center overflow-hidden">
                        <div class="my-2 py-2">
                            <a class="text-capitalize btn text-white">toughened antique mirror</a>
                        </div>
                    </div>
                    <div class="bg-light px-2 px-md-4 text-center overflow-hidden">
                        <div class="my-2 p-2">
                            <a class="text-capitalize btn">plain colour</a>
                        </div>
                    </div>
                    <div class="bg-dark px-2 px-md-4 text-center overflow-hidden">
                        <div class="my-2 py-2">
                            <a class="text-capitalize btn text-white">design printed</a>
                        </div>
                    </div>
                    <div class="bg-light px-2 px-md-4 text-center overflow-hidden">
                        <div class="my-2 p-2">
                            <a class="text-capitalize btn btn-sm">sparkling colour</a>
                        </div>
                    </div>
                    <div class="bg-dark px-2 px-md-4 text-center overflow-hidden">
                        <div class="my-2 py-2">
                            <a class="text-capitalize btn btn-sm text-white">led backlit</a>
                        </div>
                    </div>
                    <div class="bg-light px-2 px-md-4 text-center overflow-hidden">
                        <div class="my-2 p-2">
                            <a class="text-capitalize btn btn-sm">bathroom mirror</a>
                        </div>
                    </div>
                    <div class="bg-dark px-2 px-md-3 text-center overflow-hidden">
                        <div class="my-2 py-2">
                            <a class="text-capitalize btn text-white">Future wall mirrors</a>
                        </div>
                    </div>
                    <div class="bg-light px-2 px-md-3 text-center overflow-hidden">
                        <div class="my-2 p-2">
                            <a class="text-capitalize btn">glass bulastrade</a>
                        </div>
                    </div>
                    <div class="bg-dark px-2 px-md-3 text-center overflow-hidden">
                        <div class="my-2 py-2">
                            <a class="text-capitalize btn text-white">worktops</a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-4">
                </div>
            </div> --}}
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
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-0" id="pills-mirrors-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-mirrors" type="button" role="tab" aria-controls="pills-mirrors"
                        aria-selected="true">Mirrors</button>
                </li>
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
                <div class="tab-pane fade show active" id="pills-mirrors" role="tabpanel"
                    aria-labelledby="pills-home-mirrors">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/1.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/2.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/3.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/4.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/5.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/6.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/7.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/8.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/9.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 mx-2">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="/images/mirrors/10.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-dark w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-dark w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    ...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    ...</div> --}}
            </div>
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
