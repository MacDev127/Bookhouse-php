var swiper = new Swiper(".books-slider", {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 6500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

//------------------------ Counter----------------//

let cartCount = 0;
let btn = document.querySelectorAll("button");
const addToCartBtn = document.querySelectorAll("btn-add");
// const removeBtn = document.getElementById("button-22-remove");
const cartBadge = document.getElementById("cart-count");
const box = document.getElementById("box");

for (i of btn) {
  i.addEventListener("click", (event) => {
    box.classList.add("add-box");
    cartCount++;
    setTimeout((e) => {
      cartBadge.innerHTML = cartCount;
    }, 500);
    setTimeout((e) => {
      box.classList.remove("add-box");
    }, 1000);
  });
}
