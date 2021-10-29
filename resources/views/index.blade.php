<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Delta New Vision</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
        crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;600&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>
<div class="scroll-Top"><i class="fas fa-arrow-up"></i></div>
<header>
    <img class="bg-brand-image" src="images/bg-brand-name.svg" alt=""/>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('homePage')}}">
                <h1>Delta New <span>Vision</span></h1></a
            >
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homePage')}}"
                        >Home</a
                        >
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#advantages">Advantages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactUs">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-section-intro">
                        <h2><span>Delta New</span><br/>Vision</h2>
                        <p>
                            Delta New Vision Company is a leading company in the field of
                            supply, medical equipment, hospitals, laboratories and all
                            medical supplies .that has years of experience this field ,
                            which we have the quality and depth of knowledge that make us
                            the best contractor in this field .
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="hero-section-image">
                        <img src="images/doctors-hero-section.svg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img class="flower-header-image" src="images/flower-header.svg" alt=""/>
    <img
        class="flower-header-right-bottom-image"
        src="images/flower-header-right-bottom.svg"
        alt=""
    />
    <img class="bg-header-bottom" src="images/bg-header-bottom.svg" alt=""/>
</header>

<section class="abstract-out-vision">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="abstract-out-vision-image">
                    <img src="images/abstract-out-vision1.svg" alt=""/>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="abstract-out-vision-data">
                    <h2>
                        Our vision is to <br/>
                        achieve leadership
                    </h2>
                    <p>
                        To be a largest domestic and Gulf service Company with high
                        technology, comprehensive quality and highly skilled technical
                        expertise. Its products are characterized by diversity and
                        multiple alternatives at competitive prices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="abstract-out-mission">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="abstract-out-mission-data">
                    <h2>Our mission is the satisfaction of our customers</h2>
                    <p>
                        To be a distinctive model in the quality and diversity of its
                        products, to maintain the leadership and originality and precede
                        the aspirations of its customers in the level of products.
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="abstract-out-mission-image">
                    <img src="images/abstract-out-mission.svg" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products" id="products">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Our Products</h2>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-1.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="images/products/product-2.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-2.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-4.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-5.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-6.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-7.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-8.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-9.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-10.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-11.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-12.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-13.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-14.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-15.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 d-lg-none">
                <img src="images/products/product-16.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-17.svg" alt=""/>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <img src="images/products/product-18.svg" alt=""/>
            </div>
        </div>
    </div>
</section>

<section class="advantages" id="advantages">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Our Advantages</h2>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="advantages-item text-center">
                    <i class="fas fa-cog"></i>
                    <h3>Integrated company</h3>
                    <p>
                        Providing the best of supply, medical equipment, hospitals,
                        laboratories and all medical supplies.
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="advantages-item text-center">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>Best price</h3>
                    <p>
                        Our company attracts customers who are looking for very high
                        quality as well as very competitive and well thought out prices.
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="advantages-item text-center">
                    <i class="fas fa-comment-dollar"></i>
                    <h3>Speed and accuracy</h3>
                    <p>
                        Supply the required accuracy and efficiency in a timely manner.
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="advantages-item text-center">
                    <i class="fas fa-briefcase"></i>
                    <h3>Distinguished staff</h3>
                    <p>
                        we have best stuff who able to choise the best medical supplies
                        and equipments by best prices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contactUs">
    <div class="container">
        @if(Session::get('message-sent'))
            <div class="alert alert-success alert-dismissible fade shows" role="alert">
                {{Session::get('message-sent')}}
            </div>
        @endif

            <div class="alert alert-danger" role="alert" id="error">

            </div>
            <div class="row">
            <form method="post" id="form" action="{{route('contact-send')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="firstName">
                        <div class="col">
                            <label for="firstName" class="form-label"
                            ><i class="fas fa-male"></i> First Name</label
                            >
                            <input
                                id="firstName"
                                type="text"
                                class="form-control"
                                placeholder="First name"
                                aria-label="First name"
                                name="firstName"
                            />
                        </div>
                    </div>
                    <div class="seconedName">
                        <div class="col">
                            <label for="seconedName" class="form-label">
                                <i class="fas fa-male"></i> Last Name</label
                            >
                            <input
                                id="secondName"
                                type="text"
                                class="form-control"
                                placeholder="Last name"
                                aria-label="Last name"
                                name="lastName"
                            />
                        </div>
                    </div>
                </div>

                <div class="row label-email">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                        ><i class="fas fa-envelope-open"></i> Email address</label
                        >
                        <input
                            Name="email"
                            type="text"
                            class="form-control"
                            id="email"
                            aria-describedby="emailHelp"
                            placeholder="Email"
                            name="email"
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"
                        ><i class="far fa-comments"></i> Message</label
                        >
                        <textarea

                            class="form-control"
                            id="message"
                            rows="5"
                            name="message"
                        ></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="far fa-paper-plane"></i> Submit
                </button>
            </form>
        </div>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path
        fill="#cae5f0"
        fill-opacity="1"
        d="M0,320L34.3,282.7C68.6,245,137,171,206,128C274.3,85,343,75,411,101.3C480,128,549,192,617,181.3C685.7,171,754,85,823,74.7C891.4,64,960,128,1029,128C1097.1,128,1166,64,1234,42.7C1302.9,21,1371,43,1406,53.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
    ></path>
</svg>
<footer>All CopyRights Saved &copy; <span>Delta New Vision</span></footer>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"
></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
