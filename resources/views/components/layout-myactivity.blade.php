
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/shared.css" />
        <link rel="icon" href="images/favicon.png" />
        <!------------------------------------------------ Iconscout CSS ------------------------------------------------>
        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
        />
       <link rel="stylesheet" href="css/home.css">
        <title>Soran LMS</title>
    </head>
    <body id="home">
        <!---------------------------- Navigation ---------------------------->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="images/soranbanner.png" alt="" width="50bit" />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/#home"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#activity">activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#discover">Discover</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/myactivity">My Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/feedback">FeedBack</a>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i
                                    class="fab fa-facebook-f fa-stack-1x text-white"
                                ></i>
                            </a>
                        </span>
                    </span>
                    <span class="nav-item">
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i
                                    class="fab fa-twitter fa-stack-1x text-white"
                                ></i>
                            </a>
                        </span>
                    </span>
                </div>
            </div>
        </nav>

        <!---------------------------- Header ---------------------------->
        <!-- vh-100 wata barzyakay 100% heighte brasaraka dabet -->
        <header class="header py-7 vh-100">



                <div class="row">
                    <div class="col-12">
                        <!-- Image Slider -->
                        <div
                            id="slider"
                            class="carousel slide"
                            data-bs-ride="carousel"
                        >
                            <div class="carousel-indicators">
                                <button
                                    class="active"
                                    type="button"
                                    data-bs-slide-to="0"
                                    data-bs-target="#slider"
                                    aria-current="true"
                                    aria-label="Slide 1"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-slide-to="1"
                                    data-bs-target="#slider"
                                    aria-label="Slide 2"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-slide-to="2"
                                    data-bs-target="#slider"
                                    aria-label="Slide 3"
                                ></button>
                            </div>
                            <div class="carousel-inner rounded-5">
                                <div class="carousel-item active">
                                    <img
                                        src="images/header-slide-1.jpg"
                                        alt=""
                                        class="d-block w-100 rounded-5"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="images/header-slide-2.jpg"
                                        alt=""
                                        class="d-block w-100 rounded-5"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="images/header-slide-3.jpg"
                                        alt=""
                                        class="d-block w-100 rounded-5"
                                    />
                                </div>
                            </div>
                            <!-- Buttons -->
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-slide="prev"
                                data-bs-target="#slider"
                            >
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-slide="next"
                                data-bs-target="#slider"
                            >
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!---------------------------- Register ---------------------------

        <section class="register bg-primary py-6 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Unlock Your Potential with Engaging Content</h2>
                        <p>
                            Our wide range of training and seminar videos are
                            designed to empower you with valuable knowledge and
                            skills.
                        </p>

                       list-unstyled: bullet point nahele lagall default padding browser
                      vstack gap-3: bo dawa daman nawa space drust be lanewan li kan
                        <ul class="list-unstyled vstack gap-3">
                            <li>
                                <i class="fas fa-square"></i>
                                <strong>Gain Expertise:</strong> Our videos
                                provide in-depth insights and practical tips to
                                enhance your expertise in various domains.
                            </li>
                            <li>
                                <i class="fas fa-square"></i>
                                <strong>Stay Updated:</strong> Stay up-to-date
                                with the latest industry trends and advancements
                                through our informative and up-to-date videos.
                            </li>
                            <li>
                                <i class="fas fa-square"></i>
                                <strong>Expand Your Network:</strong> Connect
                                with like-minded individuals and industry
                                experts, fostering new connections and
                                opportunities.
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 p-4">
                        <form>
                            <div class="my-4">
                                <input
                                    type="text"
                                    class="form-control form-control-lg rounded-0 border-0"
                                    placeholder="Enter name"
                                />
                            </div>
                            <div class="my-4">
                                <input
                                    type="email"
                                    class="form-control form-control-lg rounded-0 border-0"
                                    placeholder="Enter email"
                                />
                            </div>
                            <div class="my-4">
                                <input
                                    type="text"
                                    class="form-control form-control-lg rounded-0 border-0"
                                    placeholder="Enter phone number"
                                />
                            </div>
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    value=""
                                />
                                <label for="terms" class="form-check-label">
                                    I agree to the terms and conditions
                                </label>
                            </div>

                             d-grid: lera bo awaya block button drust bkain wata 12 colome dager bkat yan tawawe widthaka
                            <div class="d-grid mt-4">
                                <button class="btn btn-outline-dark">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    -->

        {{ $slot }}
    <!---------------------------- Footer ---------------------------->
    <footer class="footer mt-4 text-bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Lorem Ipsum</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Eos possimus aliquid omnis commodi.
                        Dignissimos, quam obcaecati? Fugit non ex
                        repellendus?
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#discover">Discover</a></li>
                        <li><a href="#summary">Summary</a></li>
                        <li><a href="#takeaways">Takeaways</a></li>
                        <li><a href="#subscribe">Subscribe</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect</h5>
                    <div class="d-flex gap-3">
                        <a href="#"
                            ><i class="fab fa-facebook fa-3x text-white"></i
                        ></a>
                        <a href="#"
                            ><i class="fab fa-twitter fa-3x text-white"></i
                        ></a>
                        <a href="#"
                            ><i class="fab fa-linkedin fa-3x text-white"></i
                        ></a>
                        <a href="#"
                            ><i
                                class="fab fa-instagram fa-3x text-white"
                            ></i
                        ></a>
                        <a href="#"
                            ><i class="fab fa-youtube fa-3x text-white"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!---------------------------- back to top button ---------------------------->

    <div class="back-to-top">
        <a href="#">
          <i class="fal fa-chevron-double-up"></i>
        </a>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
