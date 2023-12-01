<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soran University Admin Dashboard Panel</title>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/font-awesome.css" />

    <link rel="stylesheet" href="../css/shared.css" />
    <link rel="icon" href="../images/favicon.png" />
    <!------------------------------------------------ Iconscout CSS ------------------------------------------------>
    <link
        rel="stylesheet"
        href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
   <link rel="stylesheet" href="../css/home.css">
    <!-- Font Awesome for stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/userlist.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
/>
<style>
    /* Additional styling for stars */
    .rating {
        unicode-bidi: bidi-override;
        direction: ltr;
        text-align: center;
    }
    .rating label {
        color: #f39c12;
        font-size: 1.5rem;
        padding: 0.1em;
        display: inline-block;
    }
</style>







    <!------------------------------------------------ Iconscout CSS ------------------------------------------------>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!------------------------------------------------ CSS ------------------------------------------------>
   <style>
/* ===== Google Font Import - Poppins ===== */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

:root {
  /* ===== Colors ===== */
  --primary-color: #0e4bf1;
  --panel-color: #fff;
  --text-color: #000;
  --black-light-color: #707070;
  --border-color: #e6e5e5;
  --toggle-color: #ddd;
  --box1-color: #4da3ff;
  --box2-color: #ffe6ac;
  --box3-color: #e7d1fc;
  --title-icon-color: #fff;

  /* ====== Transition ====== */
  /*

transition: Specifies how CSS property changes are animated over time.

all: Applies the transition effect to all CSS properties of the element.

0.2s: Sets the duration of the transition to 0.2 seconds for smooth animation.

ease: Determines the timing function for the animation, creating a smooth and natural effect.

transition-delay: Adds seconds delay before the transition effect begins.
transition: property duration timing-function delay;


  */

  --tran-05: all 0.5s ease;
  --tran-03: all 0.3s ease;
  --tran-03: all 0.2s ease;
}

body {
  min-height: 100vh;
  background-color: var(--primary-color);
}


/* body.dark: Selects the <body> element with a specific class attribute.
   In this context, it targets the <body> element if and only if
   it carries the "dark" class attribute, allowing for custom
   styling of a dark-themed webpage. */

body.dark {
  --primary-color: #3a3b3c;
  --panel-color: #242526;
  --text-color: #ccc;
  --black-light-color: #ccc;
  --border-color: #4d4c4c;
  --toggle-color: #fff;
  --box1-color: #3a3b3c;
  --box2-color: #3a3b3c;
  --box3-color: #3a3b3c;
  --title-icon-color: #ccc;
}
/* === Custom Scroll Bar CSS === */
::-webkit-scrollbar {
  width: 8px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
  background: var(--primary-color);
  border-radius: 12px;
  transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
  background: #0b3cc1;
}

body.dark::-webkit-scrollbar-thumb:hover,
body.dark .activity-data::-webkit-scrollbar-thumb:hover {
  background: #3a3b3c;
}

nav {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 250px;
  padding: 10px 14px;
  background-color: var(--panel-color);
  border-right: 1px solid var(--border-color);
  transition: var(--tran-05);
}
nav.close {
  width: 73px;
}
nav .logo-name {
  display: flex;
  align-items: center;
}
nav .logo-image {
  display: flex;
  justify-content: center;
  min-width: 45px;
}

 /*
    cover - The image keeps its aspect ratio and fills the given dimension. The image will be clipped to fit
    */
nav .logo-image img {
  width: 40px;
  object-fit: cover;
  border-radius: 50%;
}


/* bo awaya kaaa navaka close bu nusenakan logo basharetawa */
nav .logo-name .logo_name {
  font-size: 22px;
  font-weight: 600;
  color: var(--text-color);
  margin-left: 14px;
  transition: var(--tran-05);
}
nav.close .logo_name {
  opacity: 0;
  pointer-events: none;
}
nav .menu-items {
  margin-top: 40px;
  height: calc(100% - 90px);


  /* ama bo awaya itemakan (ul) barena zher yak u spaece lanewanyan habe */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.menu-items li {
  list-style: none;
}
.menu-items li a {
  display: flex;
  align-items: center;
  /* ama duryan daxatawa */
  height: 50px;
  text-decoration: none;
  /* position: relative; la darkawtne bazna shenaka yaramteman dada bo away baznaka lasare darkawe chunka position baznaka absluta */
  position: relative;
}


/* The ::before selector inserts something before the content of each selected element(s). */
/* a:hover:before  bo awaya katek hovert lasar tage a krd awa la lay chape tage a ba -7px baznake shen dabne  */

.nav-links li a:hover:before {
  content: "";
  position: absolute;
  left: -7px;
  height: 5px;
  width: 5px;
  border-radius: 50%;
  background-color: var(--primary-color);
}
body.dark li a:hover:before {
  background-color: var(--text-color);
}
.menu-items li a i {
  font-size: 24px;
  min-width: 45px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--black-light-color);
}

/* bo awaya kaaa navaka close bu nusenakan tage a basharetawa u makuse ka dabaya sare mouseaka nabeta dast */
.menu-items li a .link-name {
  font-size: 18px;
  font-weight: 400;
  color: var(--black-light-color);
  transition: var(--tran-05);
}
nav.close li a .link-name {
  opacity: 0;
  pointer-events: none;
}
.nav-links li a:hover i,
.nav-links li a:hover .link-name {
  color: var(--primary-color);
}
body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name {
  color: var(--text-color);
}
.menu-items .logout-mode {
  padding-top: 10px;
  border-top: 1px solid var(--border-color);
}
.menu-items .mode {
  display: flex;
  align-items: center;
  white-space: nowrap;
}
.menu-items .mode-toggle {
  position: absolute;
  right: 14px;
  height: 50px;
  min-width: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.mode-toggle .switch {
  position: relative;
  display: inline-block;
  height: 22px;
  width: 40px;
  border-radius: 25px;
  background-color: var(--toggle-color);
}
.switch:before {
  content: "";
  position: absolute;
  left: 5px;
  top: 50%;
  transform: translateY(-50%);
  height: 15px;
  width: 15px;
  background-color: var(--panel-color);
  border-radius: 50%;
  transition: var(--tran-03);
}
body.dark .switch:before {
  left: 20px;
}

.dashboard {
  position: relative;
  left: 250px;
  background-color: var(--panel-color);
  min-height: 100vh;
  width: calc(100% - 250px);
  padding: 10px 14px;
  transition: var(--tran-05);
}
nav.close ~ .dashboard {
  left: 73px;
  width: calc(100% - 73px);
}
.dashboard .top {
  position: fixed;
  top: 0;
  left: 250px;
  display: flex;
  width: calc(100% - 250px);
  justify-content: space-between;
  align-items: center;
  padding: 10px 14px;
  background-color: var(--panel-color);
  transition: var(--tran-05);
  z-index: 10;
}
nav.close ~ .dashboard .top {
  left: 73px;
  width: calc(100% - 73px);
}
.dashboard .top .sidebar-toggle {
  font-size: 26px;
  color: var(--text-color);
  cursor: pointer;
}
.dashboard .top .search-box {
  position: relative;
  height: 45px;
  max-width: 600px;
  width: 100%;
  margin: 0 30px;
}
.top .search-box input {
  position: absolute;
  border: 1px solid var(--border-color);
  background-color: var(--panel-color);
  padding: 0 25px 0 50px;
  border-radius: 5px;
  height: 100%;
  width: 100%;
  color: var(--text-color);
  font-size: 15px;
  font-weight: 400;
  outline: none;
}
.top .search-box i {
  position: absolute;
  left: 15px;
  font-size: 22px;
  z-index: 10;
  top: 50%;
  transform: translateY(-50%);
  color: var(--black-light-color);
}
.top img {
  width: 40px;
  border-radius: 50%;
}
.dashboard .dash-content {
  padding-top: 50px;
}
.dash-content .title {
  display: flex;
  align-items: center;
  margin: 60px 0 30px 0;
}
.dash-content .title i {
  position: relative;
  height: 35px;
  width: 35px;
  background-color: var(--primary-color);
  border-radius: 6px;
  color: var(--title-icon-color);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}
.dash-content .title .text {
  font-size: 24px;
  font-weight: 500;
  color: var(--text-color);
  margin-left: 10px;
}
.dash-content .boxes {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}
.dash-content .boxes .box {
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 12px;
  width: calc(100% / 3 - 15px);
  padding: 15px 20px;
  background-color: var(--box1-color);
  transition: var(--tran-05);
}
.boxes .box i {
  font-size: 35px;
  color: var(--text-color);
}
.boxes .box .text {
  white-space: nowrap;
  font-size: 18px;
  font-weight: 500;
  color: var(--text-color);
}
.boxes .box .number {
  font-size: 40px;
  font-weight: 500;
  color: var(--text-color);
}
.boxes .box.box2 {
  background-color: var(--box2-color);
}
.boxes .box.box3 {
  background-color: var(--box3-color);
}
.dash-content .activity .activity-data {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}
.activity .activity-data {
  display: flex;
}
.activity-data .data {
  display: flex;
  flex-direction: column;
  margin: 0 15px;
}
.activity-data .data-title {
  font-size: 20px;
  font-weight: 500;
  color: var(--text-color);
}
.activity-data .data .data-list {
  font-size: 18px;
  font-weight: 400;
  margin-top: 20px;
  white-space: nowrap;
  color: var(--text-color);
}

@media (max-width: 1000px) {
  nav {
    width: 73px;
  }
  nav.close {
    width: 250px;
  }
  nav .logo_name {
    opacity: 0;
    pointer-events: none;
  }
  nav.close .logo_name {
    opacity: 1;
    pointer-events: auto;
  }
  nav li a .link-name {
    opacity: 0;
    pointer-events: none;
  }
  nav.close li a .link-name {
    opacity: 1;
    pointer-events: auto;
  }
  nav ~ .dashboard {
    left: 73px;
    width: calc(100% - 73px);
  }
  nav.close ~ .dashboard {
    left: 250px;
    width: calc(100% - 250px);
  }
  nav ~ .dashboard .top {
    left: 73px;
    width: calc(100% - 73px);
  }
  nav.close ~ .dashboard .top {
    left: 250px;
    width: calc(100% - 250px);
  }
  .activity .activity-data {
    overflow-x: scroll;
  }
}

@media (max-width: 780px) {
  .dash-content .boxes .box {
    width: calc(100% / 2 - 15px);
    margin-top: 15px;
  }
}
@media (max-width: 560px) {
  .dash-content .boxes .box {
    width: 100%;
  }
}
@media (max-width: 400px) {
  nav {
    width: 0px;
  }
  nav.close {
    width: 73px;
  }
  nav .logo_name {
    opacity: 0;
    pointer-events: none;
  }
  nav.close .logo_name {
    opacity: 0;
    pointer-events: none;
  }
  nav li a .link-name {
    opacity: 0;
    pointer-events: none;
  }
  nav.close li a .link-name {
    opacity: 0;
    pointer-events: none;
  }
  nav ~ .dashboard {
    left: 0;
    width: 100%;
  }
  nav.close ~ .dashboard {
    left: 73px;
    width: calc(100% - 73px);
  }
  nav ~ .dashboard .top {
    left: 0;
    width: 100%;
  }
  nav.close ~ .dashboard .top {
    left: 0;
    width: 100%;
  }
}


.mynav{
    padding-left: 0;
}
</style>
  </head>
  <body>
    <!------------------------------------------------ Navigation ------------------------------------------------>
    <nav>
        <div class="logo-name">
          <div class="logo-image">
            <img src="img/logo.png" alt="" />
          </div>
          <span class="logo_name">Soran Uni</span>
        </div>
        <div class="menu-items">
          <ul class="nav-links">
            <li>
              <a href="/dashboard">
                <i class="uil uil-estate"></i>
                <span class="link-name">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="/User">
                <i class="uil uil-files-landscapes"></i>
                <span class="link-name">User</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="uil uil-chart"></i>
                <span class="link-name">Activity</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="uil uil-thumbs-up"></i>
                <span class="link-name">Like</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="uil uil-comments"></i>
                <span class="link-name">Comment</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="uil uil-share"></i>
                <span class="link-name">Share</span>
              </a>
            </li>
          </ul>
          <ul class="logout-mode">
            <li>
              <a href="#">
                <i class="uil uil-signout"></i>
                <span class="link-name">Logout</span>
              </a>
            </li>

            <li class="mode">
              <a href="#">
                <i class="uil uil-moon"></i>
                <span class="link-name">Dark Mode</span>
              </a>

              <div class="mode-toggle">
                <span class="switch"> </span>
              </div>
            </li>
          </ul>
        </div>
      </nav>
       <!------------------------------------------------ Navigation ------------------------------------------------>
<nav>

    <div class="logo-name">
      <div class="logo-image">
        <img src="img/logo.png" alt="" />
      </div>
      <span class="logo_name">Soran Uni</span>
    </div>
    <div class="menu-items">
      <ul class="nav-links">
        <li>
          <a href="/dashboard">
            <i class="uil uil-estate"></i>
            <span class="link-name">Dashboard</span>
          </a>
        </li>
        <li>
            <a href="/Pending">
              <i class="uil uil-chart"></i>
              <span class="link-name">Pending User</span>
            </a>
          </li>
        <li>
          <a href="/Rejected">
            <i class="uil uil-files-landscapes"></i>
            <span class="link-name">Rejected User</span>
          </a>
        </li>
        <li>
            <a href="/Aproved">
              <i class="uil uil-chart"></i>
              <span class="link-name">Aproved User</span>
            </a>
          </li>
          <li>
            <a href="/Activities">
              <i class="uil uil-chart"></i>
              <span class="link-name">Activities</span>
            </a>
          </li>
          <li>
            <a href="/Create">
              <i class="uil uil-thumbs-up"></i>
              <span class="link-name">Add Activity</span>
            </a>
          </li>
        <li>
          <a href="/users">
            <i class="uil uil-thumbs-up"></i>
            <span class="link-name">Users</span>
          </a>
        </li>
        <li>
          <a href="/showfeedback">
            <i class="uil uil-comments"></i>
            <span class="link-name">FeedBack</span>
          </a>
        </li>

      </ul>
      <ul class="logout-mode">
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </button>
            </form>


        </li>

        <li class="mode">
          <a href="#">
            <i class="uil uil-moon"></i>
            <span class="link-name">Dark Mode</span>
          </a>

          <div class="mode-toggle">
            <span class="switch"> </span>
          </div>
        </li>
      </ul>
    </div>
  </nav>
    <!------------------------------------------------ Dashboard ------------------------------------------------>
<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <img src="img/profile.jpg" alt="">
    </div>
    <header class="mb-5 mt-6">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-4">
              <input
                type="text"
                class="form-control form-control-lg"
                placeholder="Feedback Search"
              />
            </div>

            <div
              class="col-md-8 user-menu d-flex justify-content-end align-items-center"
            >
              <ul class="nav">
                <li class="nav-item">
                  <a href="#active-user" class="nav-link">Neutral Feedback</a>
                </li>
                <li class="nav-item">
                  <a
                    href="#pending-user"
                    class="nav-link"
                    >Positive Feedback</a
                  >
                </li>
                <li class="nav-item">
                  <a href="#banned-user" class="nav-link">Negative Feedback</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </header>

      <!-- Positive Feedback -->
      <!-- resources/views/admin/feedback/show.blade.php -->





      <div class="container" id="pending-user">
        <h1 class="my-4">Positive Feedback</h1>
        @foreach($feedbacks as $feedback)

        <div class="row user-info">

          <div class="col-md-4 mb-4">
              <div class="card border-info border-3 p-2">
                  <div class="card-body">
                      <h5 class="card-subtitle mb-2 text-muted">
                          Name: <span> {{ $feedback->User()->name }}</span>
                      </h5>
                      <div class="rating">

                                @foreach($feedbacks as $feedback)
                          <label><i class="fas fa-star"></i></label>

                                @endforeach

                      </div>
                      <p class="card-text">


                        {{ $feedback->comments }}

                      </p>
                  </div>
              </div>
          </div>
          @endforeach

        </div>
      </div>

      <!-------------------------------------------- Neutral Feedback -------------------------------------------->
      <div class="container" id="active-user">
        <h1 class="my-4">Neutral Feedback</h1>
        <div class="row user-info">


          <div class="col-md-4 mb-4">
              <div class="card border-info border-3 p-2">
                  <div class="card-body">
                      <h5 class="card-subtitle mb-2 text-muted">
                          Name: <span>Shad Arf</span>
                      </h5>
                      <div class="rating">
                          <label><i class="fas fa-star"></i></label>
                          <label><i class="fas fa-star"></i></label>
                          <label><i class="fas fa-star"></i></label>
                          <label><i class="fas fa-star"></i></label>
                          <label><i class="far fa-star"></i></label>
                      </div>
                      <p class="card-text">
                          The website is okay, but there are some areas
                          that can be improved.
                      </p>
                  </div>
              </div>
          </div>

        </div>
      </div>

      <!-------------------------------------------- Negative Feedback -------------------------------------------->

        <div class="container" id="banned-user">
          <h1 class="my-4">Negative Feedback</h1>
          <div class="row user-info">
              <div class="col-md-4 mb-4">
                  <div class="card border-info border-3 p-2">
                      <div class="card-body">
                          <h5 class="card-subtitle mb-2 text-muted">
                              Name: <span>Muzafar Arez</span>
                          </h5>
                          <div class="rating">
                              <label><i class="fas fa-star"></i></label>
                              <label><i class="far fa-star"></i></label>
                              <label><i class="far fa-star"></i></label>
                              <label><i class="far fa-star"></i></label>
                              <label><i class="far fa-star"></i></label>
                          </div>
                          <p class="card-text">
                              The website is confusing and difficult to
                              navigate.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
        </div>

      </div>
</section>







    <script >const body = document.querySelector("body"),
        modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");

  let getMode = localStorage.getItem("mode");
  if(getMode && getMode ==="dark"){
      body.classList.toggle("dark");
  }

  let getStatus = localStorage.getItem("status");
  if(getStatus && getStatus ==="close"){
      sidebar.classList.toggle("close");
  }

  modeToggle.addEventListener("click", () =>{
      body.classList.toggle("dark");
      if(body.classList.contains("dark")){
          localStorage.setItem("mode", "dark");
      }else{
          localStorage.setItem("mode", "light");
      }
  });

  sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
      if(sidebar.classList.contains("close")){
          localStorage.setItem("status", "close");
      }else{
          localStorage.setItem("status", "open");
      }
  })</script>

















<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/darkmodetoggle.js"></script>
<script>
  const popoverTriggerList = document.querySelectorAll(
    '[data-bs-toggle="popover"]'
  );

  const popoverList = [...popoverTriggerList].map(
    (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
  );
</script>

<script>
  // Function to toggle the visibility and active state of the user sections
  function toggleUserSections(sectionId) {
    const sections = ["pending-user", "active-user", "banned-user"]; // Include "banned-user"

    // Hide all sections
    sections.forEach((section) => {
      const sectionElement = document.getElementById(section);
      sectionElement.style.display =
        section === sectionId ? "block" : "none";
    });

    // Toggle the "text-bg-primary rounded-3" class on the links
    const navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach((link) => {
      link.classList.remove("text-bg-info", "rounded-3");
    });
    document
      .querySelector(`a[href="#${sectionId}"]`)
      .classList.add("text-bg-info", "rounded-3");
  }

  // Add event listeners to the navigation links
  const navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const sectionId = link.getAttribute("href").substring(1);
      toggleUserSections(sectionId);
    });
  });

  // Initially, show the pending user section and set the class
  toggleUserSections("pending-user");

  // Add an event listener for the "Banned User" link
  const bannedUserLink = document.querySelector('a[href="#banned-user"]');
  bannedUserLink.addEventListener("click", function (event) {
    event.preventDefault();
    toggleUserSections("banned-user");
  });
</script>

  </body>
</html>
