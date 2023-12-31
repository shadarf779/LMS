
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <title>Course Details | LMS</title>

        <meta
            name="keywords"
            content="
"
        />
        <meta
            name="description"
            content="
"
        />

        <link
            rel="shortcut icon"
            type="image/png"
            href="/assets/img/1632723997.png"
        />

        <link rel="stylesheet" href="/assets/css/animate.min.css" />

        <link rel="stylesheet" href="/assets/css/all.min.css" />

        <link rel="stylesheet" href="/assets/css/flaticon.css" />

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="/assets/css/magnific-popup.css" />

        <link rel="stylesheet" href="/assets/css/owl-carousel.min.css" />

        <link rel="stylesheet" href="/assets/css/nice-select.css" />

        <link rel="stylesheet" href="/assets/css/slick.css" />

        <link rel="stylesheet" href="/assets/css/toastr.min.css" />

        <link rel="stylesheet" href="/assets/css/datatables-1.10.23.min.css" />

        <link
            rel="stylesheet"
            href="/assets/css/datatables.bootstrap4.min.css"
        />

        <link rel="stylesheet" href="/assets/css/monokai-sublime.css" />

        <link rel="stylesheet" href="/assets/css/jquery-ui.min.css" />

        <link rel="stylesheet" href="/assets/css/default.min.css" />

        <link rel="stylesheet" href="/assets/css/main.css" />

        <link rel="stylesheet" href="/assets/css/responsive.css" />

        <link rel="stylesheet" href="/assets/css/mega-menu.css" />

        <link
            rel="stylesheet"
            href="/assets/css/website-color.css?primary_color=0066FF&amp;secondary_color=F16001&amp;footer_background_color=001B61&amp;copyright_background_color=003A91&amp;breadcrumb_overlay_color=001B61&amp;breadcrumb_overlay_opacity=0.50"
        />

        <link rel="stylesheet" href="/assets/css/summernote-content.css" />
        <link rel="stylesheet" href="/css/shared.css" />
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/coursedetail.css" />
    </head>

    <body>
        <!---------------------------- Navigation ---------------------------->
        <nav
            class="navbar navbar-expand-lg fixed-top"
            style="background-color: rgb(28, 28, 28)"
        >
            <div class="container">
                <a href="index.html" class="navbar-brand">
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
                            <a
                                class="nav-link text-white"
                                aria-current="page"
                                href="#home"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#discover"
                                >Discover</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#summary"
                                >Summary</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#takeaways"
                                >Takeaways</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#subscribe"
                                >Subscribe</a
                            >
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

        <!--====== COURSE DETAILS PART START ======-->
        <section class="course-details-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="course-details-items white-bg">
                            <div class="course-thumb">
                                <div class="tab-btns">
                                    <ul
                                        class="nav nav-pills d-flex justify-content-between"
                                        id="pills-tab"
                                        role="tablist"
                                    >
                                        <li class="nav-item">
                                            <a
                                                class="nav-link active"
                                                id="pills-1-tab"
                                                data-toggle="pill"
                                                href="#pills-1"
                                                role="tab"
                                                aria-controls="pills-1"
                                                aria-selected="true"
                                                ><i class="fal fa-list"></i>
                                                {{$activites->name}}</a
                                            >
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="pills-2-tab"
                                                data-toggle="pill"
                                                href="#pills-2"
                                                role="tab"
                                                aria-controls="pills-2"
                                                aria-selected="false"
                                                ><i class="fal fa-book"></i>
                                                </a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="pills-3-tab"
                                                data-toggle="pill"
                                                href="#pills-3"
                                                role="tab"
                                                aria-controls="pills-3"
                                                aria-selected="false"
                                                ><i class="fal fa-user"></i>
                                                Instructor</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="pills-4-tab"
                                                data-toggle="pill"
                                                href="#pills-4"
                                                role="tab"
                                                aria-controls="pills-4"
                                                aria-selected="false"
                                                ><i class="fal fa-stars"></i>
                                                Reviews</a
                                            >
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="pills-1"
                                    role="tabpanel"
                                    aria-labelledby="pills-1-tab"
                                >
                                    <div class="course-details-item pt-4">
                                        <div class="summernote-content">
                                            <p style="line-height: 1.6">
                                                <span
                                                    style="
                                                        font-family: 'Open Sans',
                                                            Arial, sans-serif;
                                                        text-align: justify;
                                                        font-size: 18px;
                                                    "
                                                    >{{$activites->descrition}}</span>
                                            </p>

                                            <p style="line-height: 1.6">
                                                <span
                                                    style="
                                                        font-family: 'Open Sans',
                                                            Arial, sans-serif;
                                                        text-align: justify;
                                                        font-size: 18px;
                                                    "
                                                    ><span
                                                        style="font-weight: 600"
                                                        >start Date :</span
                                                    >{{$activites->date}}</span
                                                >
                                            </p>
                                            <p style="line-height: 1.6">
                                                <span
                                                    style="
                                                        font-family: 'Open Sans',
                                                            Arial, sans-serif;
                                                        text-align: justify;
                                                        font-size: 18px;
                                                    "
                                                    ><span
                                                        style="font-weight: 600"
                                                        >Location: </span
                                                    >:{{$activites->location}}</span
                                                >
                                            </p>
                                            <p style="line-height: 1.6">
                                                <span
                                                    style="
                                                        font-family: 'Open Sans',
                                                            Arial, sans-serif;
                                                        text-align: justify;
                                                        font-size: 18px;
                                                    "
                                                    ><span
                                                        style="font-weight: 600"
                                                        >Max Partcipants:</span
                                                    >{{$activites->MaxPartcipants}}</span
                                                >
                                            </p>
                                            <p style="line-height: 1.6">
                                                <span
                                                    style="
                                                        font-family: 'Open Sans',
                                                            Arial, sans-serif;
                                                        text-align: justify;
                                                        font-size: 18px;
                                                    "
                                                    ><span
                                                        style="font-weight: 600"
                                                        >Dead Line of submition :</span
                                                    >{{$activites->deadline}}</span
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="pills-2"
                                    role="tabpanel"
                                    aria-labelledby="pills-2-tab"
                                >
                                    <div class="curriculum-accordion">
                                        <div
                                            class="accordion"
                                            id="curriculumAccordion"
                                        >
                                            <div class="card">
                                                <div class="card-header">
                                                    <a
                                                        class="title"
                                                        data-toggle="collapse"
                                                        data-target="#collapse-1"
                                                        aria-expanded="true"
                                                    >
                                                        The first steps
                                                        <span
                                                            class="badge badge-warning"
                                                            >01m</span
                                                        >
                                                    </a>
                                                </div>
                                                <div
                                                    id="collapse-1"
                                                    class="collapse show"
                                                    aria-labelledby="heading-1"
                                                    data-parent="#curriculumAccordion"
                                                >
                                                    <div class="card-body">
                                                        <ul class="play-list">
                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >ntroduction
                                                                    to laravel
                                                                    and MVC<span
                                                                        class="time"
                                                                        >01:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Reference
                                                                    files<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <a
                                                        class="collapsed title"
                                                        data-toggle="collapse"
                                                        data-target="#collapse-3"
                                                        aria-expanded="false"
                                                    >
                                                        Local Environment Setup
                                                        <span
                                                            class="badge badge-warning"
                                                            >00m</span
                                                        >
                                                    </a>
                                                </div>
                                                <div
                                                    id="collapse-3"
                                                    class="collapse"
                                                    aria-labelledby="heading-3"
                                                    data-parent="#curriculumAccordion"
                                                >
                                                    <div class="card-body">
                                                        <ul class="play-list">
                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >New -
                                                                    Tools<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >New - Using
                                                                    MySQL<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >New-
                                                                    Installing
                                                                    Node.js<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >New -
                                                                    Installing
                                                                    Laravel<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <a
                                                        class="collapsed title"
                                                        data-toggle="collapse"
                                                        data-target="#collapse-4"
                                                        aria-expanded="false"
                                                    >
                                                        Laravel Fundamentals -
                                                        Routes
                                                        <span
                                                            class="badge badge-warning"
                                                            >00m</span
                                                        >
                                                    </a>
                                                </div>
                                                <div
                                                    id="collapse-4"
                                                    class="collapse"
                                                    aria-labelledby="heading-4"
                                                    data-parent="#curriculumAccordion"
                                                >
                                                    <div class="card-body">
                                                        <ul class="play-list">
                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Route
                                                                    Introduction<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Routes<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Naming
                                                                    Routes<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <a
                                                        class="collapsed title"
                                                        data-toggle="collapse"
                                                        data-target="#collapse-5"
                                                        aria-expanded="false"
                                                    >
                                                        Laravel Fundamentals -
                                                        Controllers
                                                        <span
                                                            class="badge badge-warning"
                                                            >00m</span
                                                        >
                                                    </a>
                                                </div>
                                                <div
                                                    id="collapse-5"
                                                    class="collapse"
                                                    aria-labelledby="heading-5"
                                                    data-parent="#curriculumAccordion"
                                                >
                                                    <div class="card-body">
                                                        <ul class="play-list">
                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Creating
                                                                    Controllers<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Passing
                                                                    data<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Resources
                                                                    and
                                                                    Controllers<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <a
                                                        class="collapsed title"
                                                        data-toggle="collapse"
                                                        data-target="#collapse-6"
                                                        aria-expanded="false"
                                                    >
                                                        Laravel Fundamentals -
                                                        Views
                                                        <span
                                                            class="badge badge-warning"
                                                            >00m</span
                                                        >
                                                    </a>
                                                </div>
                                                <div
                                                    id="collapse-6"
                                                    class="collapse"
                                                    aria-labelledby="heading-6"
                                                    data-parent="#curriculumAccordion"
                                                >
                                                    <div class="card-body">
                                                        <ul class="play-list">
                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Creating
                                                                    views and
                                                                    custom
                                                                    method<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>

                                                            <li>
                                                                <a
                                                                    ><i
                                                                        class="fas fa-play"
                                                                    ></i
                                                                    >Passing
                                                                    data to
                                                                    views<span
                                                                        class="time"
                                                                        >00:00</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="pills-3"
                                    role="tabpanel"
                                    aria-labelledby="pills-3-tab"
                                >
                                    <div class="instructor-box">
                                        <div class="thumb">
                                            <img
                                                data-src="/assets/img/instructors/627f9a5c31ed3.jpg"
                                                class="lazy"
                                                alt="Instructor"
                                            />
                                        </div>
                                        <div class="info">
                                            <h5>Jack Oram</h5>
                                            <span class="position d-block"
                                                >UI/UX Designer, Profilex</span
                                            >
                                            <div class="summernote-content">
                                                <p>
                                                    <span
                                                        style="
                                                            font-family: 'Open Sans',
                                                                Arial,
                                                                sans-serif;
                                                            text-align: justify;
                                                            font-size: 18px;
                                                        "
                                                        >At vero eos et
                                                        accusamus et iusto odio
                                                        dignissimos ducimus qui
                                                        blanditiis praesentium
                                                        voluptatum deleniti
                                                        atque corrupti quos
                                                        dolores et quas
                                                        molestias excepturi sint
                                                        occaecati cupiditate non
                                                        provident, similique
                                                        sunt in culpa qui
                                                        officia deserunt
                                                        mollitia animi, id est
                                                        laborum et dolorum fuga.
                                                        Et harum quidem rerum
                                                        facilis est et expedita
                                                        distinctio. Nam libero
                                                        tempore, cum soluta
                                                        nobis est eligendi optio
                                                        cumque nihil impedit quo
                                                        minus id quod maxime
                                                        placeat facere possimus,
                                                        omnis voluptas assumenda
                                                        est</span
                                                    >
                                                </p>
                                                <p>
                                                    <span
                                                        style="
                                                            font-family: 'Open Sans',
                                                                Arial,
                                                                sans-serif;
                                                            text-align: justify;
                                                            font-size: 18px;
                                                        "
                                                        ><br
                                                    /></span>
                                                </p>
                                                <p>
                                                    <span
                                                        style="
                                                            font-family: 'Open Sans',
                                                                Arial,
                                                                sans-serif;
                                                            text-align: justify;
                                                            font-size: 18px;
                                                        "
                                                        ><b
                                                            >Specialities:</b
                                                        ></span
                                                    >
                                                </p>
                                                <ul>
                                                    <li
                                                        style="
                                                            font-style: inherit;
                                                            font-weight: inherit;
                                                            font-size: 18px;
                                                            line-height: 28px;
                                                        "
                                                    >
                                                        Lorem ipsum dolor sit
                                                        amet,
                                                    </li>
                                                    <li
                                                        style="
                                                            font-style: inherit;
                                                            font-weight: inherit;
                                                            font-size: 18px;
                                                            line-height: 28px;
                                                        "
                                                    >
                                                        consectetuer adipiscing
                                                        elit.
                                                    </li>
                                                    <li
                                                        style="
                                                            font-style: inherit;
                                                            font-weight: inherit;
                                                            font-size: 18px;
                                                            line-height: 28px;
                                                        "
                                                    >
                                                        Aliquam tincidunt mauris
                                                        eu risus.
                                                    </li>
                                                    <li
                                                        style="
                                                            font-style: inherit;
                                                            font-weight: inherit;
                                                            font-size: 18px;
                                                            line-height: 28px;
                                                        "
                                                    >
                                                        Vestibulum auctor
                                                        dapibus neque.
                                                    </li>
                                                </ul>
                                                <p><br /></p>
                                            </div>

                                            <ul class="social-link">
                                                <li>
                                                    <a
                                                        href="http://example.com/"
                                                        target="_blank"
                                                        ><i
                                                            class="fab fa-linkedin-in"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="http://example.com/"
                                                        target="_blank"
                                                        ><i
                                                            class="fab fa-instagram"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="http://example.com/"
                                                        target="_blank"
                                                        ><i
                                                            class="fab fa-facebook-f"
                                                        ></i
                                                    ></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="pills-4"
                                    role="tabpanel"
                                    aria-labelledby="pills-4-tab"
                                >
                                    <div class="reviews-area">
                                        <a
                                            href="user/login?redirectPath=course_details"
                                            class="main-btn"
                                            >Login</a
                                        >

                                        <div class="reviews-list">
                                            <div class="reviews-item">
                                                <div class="thumb">
                                                    <img
                                                        data-src="/assets/img/users/1636607574.png"
                                                        class="lazy"
                                                        alt="User"
                                                    />
                                                </div>
                                                <div class="content">
                                                    <div class="title-review">
                                                        <div class="title">
                                                            <h5>
                                                                Saeed Mahmud
                                                            </h5>
                                                            <span class="date"
                                                                >May 16,
                                                                2022</span
                                                            >
                                                        </div>
                                                        <ul
                                                            class="rating user-rating"
                                                        >
                                                            <li>
                                                                <i
                                                                    class="fas fa-star"
                                                                ></i>
                                                            </li>
                                                            <li>
                                                                <i
                                                                    class="fas fa-star"
                                                                ></i>
                                                            </li>
                                                            <li>
                                                                <i
                                                                    class="fas fa-star"
                                                                ></i>
                                                            </li>
                                                            <li>
                                                                <i
                                                                    class="fas fa-star"
                                                                ></i>
                                                            </li>
                                                            <li>
                                                                <i
                                                                    class="fas fa-star"
                                                                ></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>
                                                        There are many
                                                        variations of passages
                                                        of Lorem Ipsum
                                                        available, but the
                                                        majority have suffered
                                                        alteration in some form,
                                                        by injected humour, or
                                                        randomised words which
                                                        don&#039;t look even
                                                        slightly believable
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               @auth
                               <a
                               href="/Enrol/{{ $activites->id }}"
                               class="btn btn-primary btn"
                           >
                               Enroll NOW
                           </a>
                           @else
                           <p >
                            <b>first you must <a href="/register">sign up</a> or <a href="/login">Login</a></b>
                           </p>
                               @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== COURSE DETAILS PART END ======-->

        <div class="back-to-top">
            <a href="#">
                <i class="fal fa-chevron-double-up"></i>
            </a>
        </div>

        <div class="js-cookie-consent cookie-consent">
            <div class="container">
                <div class="cookie-container">
                    <span class="cookie-consent__message">
                        <p>
                            We use cookies to give you the best online
                            experience.<br />By continuing to browse the site
                            you are agreeing to our use of cookies.
                        </p>
                    </span>

                    <button
                        class="js-cookie-consent-agree cookie-consent__agree"
                    >
                        I Agree
                    </button>
                </div>
            </div>
        </div>

        <script>
            "use strict";
            window.laravelCookieConsent = (function () {
                const COOKIE_VALUE = 1;
                const COOKIE_DOMAIN = "course.ourprojects.link";

                function consentWithCookies() {
                    setCookie("laravel_cookie_consent", COOKIE_VALUE, 7300);
                    hideCookieDialog();
                }

                function cookieExists(name) {
                    return (
                        document.cookie
                            .split("; ")
                            .indexOf(name + "=" + COOKIE_VALUE) !== -1
                    );
                }

                function hideCookieDialog() {
                    const dialogs =
                        document.getElementsByClassName("js-cookie-consent");

                    for (let i = 0; i < dialogs.length; ++i) {
                        dialogs[i].style.display = "none";
                    }
                }

                function setCookie(name, value, expirationInDays) {
                    const date = new Date();
                    date.setTime(
                        date.getTime() + expirationInDays * 24 * 60 * 60 * 1000
                    );
                    document.cookie =
                        name +
                        "=" +
                        value +
                        ";expires=" +
                        date.toUTCString() +
                        ";domain=" +
                        COOKIE_DOMAIN +
                        ";path=/" +
                        "";
                }

                if (cookieExists("laravel_cookie_consent")) {
                    hideCookieDialog();
                }

                const buttons = document.getElementsByClassName(
                    "js-cookie-consent-agree"
                );

                for (let i = 0; i < buttons.length; ++i) {
                    buttons[i].addEventListener("click", consentWithCookies);
                }

                return {
                    consentWithCookies: consentWithCookies,
                    hideCookieDialog: hideCookieDialog,
                };
            })();
        </script>

        <footer class="footer-area">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-lg-4 col-md-5">
                        <div class="footer-item about-footer-item mt-30">
                            <div class="footer-title">
                                <img
                                    data-src="/assets/img/628368f29da9e.png"
                                    class="lazy"
                                    alt="website logo"
                                />
                            </div>

                            <div class="about-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Possimus dignissimos
                                    quibusdam quia sit delectus. Cupiditate
                                    corporis, delectus quo ullam repudiandae
                                    illum culpa, magni modi, asperiores quis non
                                    magnam fugit vitae!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-7">
                        <div class="footer-item mt-30">
                            <div class="footer-title item-2">
                                <i class="fal fa-link"></i>
                                <h4 class="title">Useful Links</h4>
                            </div>

                            <div class="footer-list-area">
                                <div class="footer-list d-block d-sm-flex">
                                    <ul>
                                        <li>
                                            <a
                                                href="codecanyon.kreativdev.com/coursela/terms-&amp;-conditions"
                                                ><i
                                                    class="fal fa-angle-right"
                                                ></i>
                                                Terms &amp; Conditions</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="codecanyon.kreativdev.com/coursela/contact"
                                                ><i
                                                    class="fal fa-angle-right"
                                                ></i>
                                                Contact Us</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://codecanyon.kreativdev.com/coursela/about"
                                                ><i
                                                    class="fal fa-angle-right"
                                                ></i>
                                                About Us</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer-item mt-30">
                            <div class="footer-title item-3">
                                <i class="fal fa-blog"></i>
                                <h4 class="title">Latest Blog</h4>
                            </div>

                            <div class="footer-instagram">
                                <div class="instagram-item">
                                    <div
                                        class="item mt-20 d-flex align-items-center"
                                    >
                                        <div class="blog-img mr-4">
                                            <img
                                                data-src="/assets/img/blogs/6280d0469ef47.jpg"
                                                class="lazy"
                                                alt="image"
                                            />
                                        </div>

                                        <div class="blog-info">
                                            <h6 class="blog-title">
                                                <a
                                                    href="blog/vestibulum-commodo-felis-quis-tortor."
                                                    >Vestibulum commodo felis
                                                    quis ...</a
                                                >
                                            </h6>
                                            <span class="mt-1"
                                                >May 15, 2022</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="item mt-20 d-flex align-items-center"
                                    >
                                        <div class="blog-img mr-4">
                                            <img
                                                data-src="/assets/img/blogs/6280d0d0a5182.jpg"
                                                class="lazy"
                                                alt="image"
                                            />
                                        </div>

                                        <div class="blog-info">
                                            <h6 class="blog-title">
                                                <a
                                                    href="blog/vivamus-vestibulum-ntulla-nec-ante."
                                                    >Vivamus vestibulum ntulla
                                                    nec ...</a
                                                >
                                            </h6>
                                            <span class="mt-1"
                                                >May 15, 2022</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="item mt-20 d-flex align-items-center"
                                    >
                                        <div class="blog-img mr-4">
                                            <img
                                                data-src="/assets/img/blogs/6280c8d9b530c.jpg"
                                                class="lazy"
                                                alt="image"
                                            />
                                        </div>

                                        <div class="blog-info">
                                            <h6 class="blog-title">
                                                <a
                                                    href="blog/morbi-in-sem-quis-dui-placerat-ornare.-pellentesque-odio-nisi"
                                                    >Morbi in sem quis dui
                                                    placerat...</a
                                                >
                                            </h6>
                                            <span class="mt-1"
                                                >May 15, 2022</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row border-top text-center pt-5">
                    <div class="col">
                        <p class="text-light">
                            Copyright ©2022. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            "use strict";
            const baseURL = "/";
            const vapid_public_key = "";
            const langDir = 0;
        </script>

        <script
            type="text/javascript"
            src="/assets/js/jquery-1.12.4.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/modernizr-3.6.0.min.js"
        ></script>

        <script type="text/javascript" src="/assets/js/popper.min.js"></script>

        <script
            type="text/javascript"
            src="/assets/js/bootstrap.min.js"
        ></script>

        <script type="text/javascript" src="/assets/js/slick.min.js"></script>

        <script
            type="text/javascript"
            src="/assets/js/isotope-pkgd-3.0.6.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/imagesloaded.pkgd.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/jquery.magnific-popup.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/owl-carousel.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/jquery.nice-select.min.js"
        ></script>

        <script type="text/javascript" src="/assets/js/wow.min.js"></script>

        <script
            type="text/javascript"
            src="/assets/js/jquery.counterup.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/waypoints.min.js"
        ></script>

        <script type="text/javascript" src="/assets/js/toastr.min.js"></script>

        <script
            type="text/javascript"
            src="/assets/js/datatables-1.10.23.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/datatables.bootstrap4.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/highlight.pack.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/jquery-ui.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/jquery-syotimer.min.js"
        ></script>

        <script
            type="text/javascript"
            src="/assets/js/vanilla-lazyload.min.js"
        ></script>

        <script type="text/javascript" src="/assets/js/main.js"></script>

        <script
            type="text/javascript"
            src="/assets/js/push-notification.js"
        ></script>

        <script>
            "use strict";
            let courseId = 12;
        </script>

        <script src="/assets/js/stripe.js"></script>
        <script
            type="text/javascript"
            src="/assets/js/course-details.js"
        ></script>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
