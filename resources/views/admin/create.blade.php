<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

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
      href="assets/img/1632723997.png"
    />

    <link rel="icon" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/coursedetail.css">
    <link rel="stylesheet" href="css/shared.css" />
    <link rel="stylesheet" href="css/signup.css" />


  </head>

  <body>

   <!---------------------------- Navigation ---------------------------->
   <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
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
                    <a class="nav-link" aria-current="page" href="#home"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#discover">Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#summary">Summary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#takeaways">Takeaways</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#subscribe">Subscribe</a>
                </li>
            </ul>
            <div class="nav-icons">
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
    </div>
</nav>


    <!-------------------------------------------------------- Main -------------------------------------------------------->

    <main style="margin-top: 8rem;">
      <section class="regester-part">
        <h1>add new Activity</h1>
        <aside class="form-1">
          <form action="#" class="form">
            <div class="input-box">
              <label>:ناوی تەواو</label>
              <input type="text" placeholder=":ناوی تەوات بنوسە" required />
            </div>

            <div class="input-box">
              <label>:ئیمەیڵ</label>
              <input type="email" placeholder=":ئیمەیڵت بنوسە" required />
            </div>

            <div class="input-box">
              <label>:ژمارە مۆبایل</label>
              <input
                type="number"
                placeholder=":ژمارە مۆبایلت بنوسە"
                required
              />
            </div>

            <div class="input-box">
              <label for="">:پاسوۆرد</label>
              <input type="text" placeholder=":پاسوۆرد بنوسە" required />
            </div>

            <div class="signup-btns">
              <button id="nextButton1" type="button" onclick="nextPart(1)">
                دواتر
              </button>
            </div>

        </aside>

        <aside class="form-2">

            <div class="form">
              <div class="input-box">
                <label>:بەرواری لەدایکبوون</label>
                <input
                  type="date"
                  placeholder=":بەرواری لەدایکبوونت بنوسە"
                  required
                />
              </div>
              <!--

                Dont touch that:

                <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address" required />
                <input
                  type="text"
                  placeholder="Enter street address line 2"
                  required
                />
                <div class="column">
                  <div class="select-box">
                    <select>
                      <option hidden>Country</option>
                      <option>Kurdistan</option>
                      <option>USA</option>
                      <option>Canada</option>
                      <option>UK</option>
                    </select>
                  </div>
                  <input type="text" placeholder="Enter your city" required />
                </div>
                <div class="column">
                  <input type="text" placeholder="Enter your region" required />
                  <input type="number" placeholder="Enter postal code" required />
                </div>
              </div>




               -->

               <div class="input-box">
                <label>:فاکەڵتی</label>
                <input type="text" placeholder=":لە کام فاکەڵتیت" required />
              </div>

              <div class="input-box">
                <label>:بەش</label>
                <input type="text" placeholder=":لە کام بەشیت" required />
              </div>

              <div class="input-box">
                <label>:قۆناخ</label>
                <input type="text" placeholder=":لە کام قۆناخی" required />
              </div>



              <div class="radio_btn_selected">
                <h3>:cdc ئایا پێشتر کاری خۆبەخشیت کردووە بۆ</h3>
                <div class="radio_btn_option">

                  <div class="values">
                    <input type="radio" id="Notvolunteered" name="isvolunteered" />
                    <label for="Notvolunteered">نەخێر</label>
                  </div><div class="values">
                    <input type="radio" id="volunteered" name="isvolunteered" />
                    <label for="volunteered">بەڵێ</label>
                  </div>
                </div>
              </div>

              <div class="radio_btn_selected">
                <h3>:ڕەگەز</h3>
                <div class="radio_btn_option">
                  <div class="values">
                    <input type="radio" id="check-male" name="gender" />
                    <label for="check-male">نێر</label>
                  </div>
                  <div class="values">
                    <input type="radio" id="check-female" name="gender" />
                    <label for="check-female">مێ</label>
                  </div>
                </div>
              </div>





              <div class="signup-btns">
                <button id="submitButton" type="submit">
                  ناردن
                </button>
                <button id="prevButton2" type="button" onclick="prevPart(2)">
                  گەڕانەوە
                </button>

              </div>
            </div>



          </form>
        </aside>
      </section>
    </main>

    <!-------------------------------------------------------- Footer -------------------------------------------------------->

     <!---------------------------- Footer ---------------------------->
     <footer class="footer mt-4 text-bg-dark py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h5 style="color: white;">Lorem Ipsum</h5>
                  <p style="color: white;">
                      Lorem ipsum dolor sit amet consectetur, adipisicing
                      elit. Eos possimus aliquid omnis commodi.
                      Dignissimos, quam obcaecati? Fugit non ex
                      repellendus?
                  </p>
              </div>
              <div class="col-md-4">
                  <h3 style="color: white;">Quick Links</h3>
                  <ul class="list-unstyled">
                      <li><a href="#home">Home</a></li>
                      <li><a href="#discover">Discover</a></li>
                      <li><a href="#summary">Summary</a></li>
                      <li><a href="#takeaways">Takeaways</a></li>
                      <li><a href="#subscribe">Subscribe</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h5 style="color: white;">Connect</h5>
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
        <!---------------------------- javascript ---------------------------->


    <script>
      function nextPart(currentPart) {
        if (currentPart === 1) {
          document.querySelector(".form-1").style.display = "none";
          document.querySelector(".form-2").style.display = "block";
        }
      }

      function prevPart(currentPart) {
        if (currentPart === 2) {
          document.querySelector(".form-1").style.display = "block";
          document.querySelector(".form-2").style.display = "none";
        }
      }
    </script>







<script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

    <script src="js/shared.js"></script>


  </body>
</html>
