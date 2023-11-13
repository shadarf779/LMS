// am functiona bo awa drust dakain agar user scroole krd range nav bgore u u la top bmenetawa

function userScroll() {
    const navbar = document.querySelector(".navbar");
  
    // ama bo awaya pageaka bchetawa sarawa
    const toTopBtn = document.querySelector(".back-to-top");
  
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("navbar-sticky");
        navbar.classList.add('bg-dark');
  
        // ama bo darkawtne button scrolla la regay zyadkrnde classe show
        toTopBtn.classList.add("d-block");
      } else {
        navbar.classList.remove("navbar-sticky");
        navbar.classList.remove('bg-dark');
  
        // ama bo hide krdne button scrolla la regay srenaway classe show
        toTopBtn.classList.remove("d-block");
      }
    });
  }
  
  // am functiona bo awaya pageaka bbatawa sarata kate clickt la buttonaka krd bang dakretawa
  function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  
  // Event Listeners
  document.addEventListener("DOMContentLoaded", userScroll);
  // am Event Listenera bo brdnasaraway pagakaya katek clickt la buttonaka krd bange functione scrollToTop dakat awesh scroolaka dabata sarawa 
  document.querySelector("#to-top").addEventListener("click", scrollToTop);
  