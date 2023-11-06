// am functiona bo awa drust dakain agar user scroole krd range nav bgore u u la top bmenetawa

function userScroll() {
  // lera classaka wardagren u daixaina naw varible
  const navbar = document.querySelector('.navbar');

  // lera alen agar evente scroll run bwa wata scroll kra awa funcktinaman bo bka
  window.addEventListener('scroll', () => {
      // agar scrool krdanaka zyatr bw la 50px
    if (window.scrollY > 50) {
      navbar.classList.add('bg-dark');
    } else {
      navbar.classList.remove('bg-dark');
    }
  });
}

document.addEventListener('DOMContentLoaded', userScroll);