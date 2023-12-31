<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Feedback Form</title>


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







  <!-- Font Awesome for stars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    /* Additional styling for stars */
    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
      text-align: center;
    }
    .rating input {
      display: none;
    }
    .rating label {
      cursor: pointer;
      color: #ddd;
      font-size: 2rem;
      padding: 0.1em;
      display: inline-block;
    }
    .rating label:hover,
    .rating label:hover ~ label,
    .rating input:checked ~ label {
      color: #f39c12;
    }

    .form-control:focus{
        border-color: rgb(0, 123, 255);
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 225, 0.25);
    }
  </style>
</head>
<body>
 <!---------------------------- Navigation ---------------------------->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
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





<div class="container mt-7 mb-5">
    @auth


  <h2 class="mb-4">User Feedback Form</h2>
  <h6 class="mb-4">{{Auth::user()->name}} What do you think about Soran Universty Acctivity</h6>
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
  <form method="GET" action="/UserFeedback/{{ Auth::user()->id }}">
    @csrf

    <div class="form-group">
        <label for="rating" class="mt-3">Rating:</label>
        <div class="rating">
            <input type="radio" id="star5" name="rating" value="5"><label for="star5"><i class="fas fa-star"></i></label>
            <input type="radio" id="star4" name="rating" value="4"><label for="star4"><i class="fas fa-star"></i></label>
            <input type="radio" id="star3" name="rating" value="3"><label for="star3"><i class="fas fa-star"></i></label>
            <input type="radio" id="star2" name="rating" value="2"><label for="star2"><i class="fas fa-star"></i></label>
            <input type="radio" id="star1" name="rating" value="1"><label for="star1"><i class="fas fa-star"></i></label>
        </div>
    </div>
    <div class="form-group">
        <label for="comments">Feedback:</label>
        <textarea name="comments" class="form-control" id="comments" rows="5" placeholder="Enter your feedback" required></textarea>
    </div>
    <button type="submit" class="btn btn-info text-dark mt-4 fs-6 fw-bold">Submit Feedback</button>
</form>

</div>




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
        @else
        <h2 align="center" class="mb-4">
            <b>first you must <a href="/register">sign up</a> or <a href="/login">Login</a></b> To feed Back
        </h2>

        @endauth
    </div>
</footer>



<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>
