const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});

//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});

$(document).ready(() => {
  $('#hamburger-menu').click(() => {
      $('#hamburger-menu').toggleClass('active')
      $('#nav-menu').toggleClass('active')
  })

  // setting owl carousel

  let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

  $('#hero-carousel').owlCarousel({
      items: 1,
      dots: false,
      loop: true,
      nav:true,
      navText: navText,
      autoplay: true,
      autoplayHoverPause: true
  })

  $('#top-movies-slide').owlCarousel({
      items: 2,
      dots: false,
      loop: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
          500: {
              items: 3
          },
          1280: {
              items: 4
          },
          1600: {
              items: 6
          }
      }
  })

  $('.movies-slide').owlCarousel({
      items: 2,
      dots: false,
      nav:true,
      navText: navText,
      margin: 15,
      responsive: {
          500: {
              items: 2
          },
          1280: {
              items: 4
          },
          1600: {
              items: 6
          }
      }
  })
})