let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// For Gambar Category

$('.button-chocolate').show()
$('.button-cheese').show()
$('.button-strawberry').show()

$('.button-chocolate').on('click', () => {
  $('.chocolate-img').show()
  $('.cheese-img').hide()
  $('.strawberry-img').hide()
})

$('.button-cheese').on('click', () => {
  $('.chocolate-img').hide()
  $('.cheese-img').show()
  $('.strawberry-img').hide()
})

$('.button-strawberry').on('click', () => {
  $('.chocolate-img').hide()
  $('.cheese-img').hide()
  $('.strawberry-img').show()
})

// tentang-toko
let indextoko = 1;
slideshow(indextoko);
// Next/previous controls
function push(n) {
  slideshow(indextoko += n);
}
function slideshow(n) {
  let i;
  let slides = document.getElementsByClassName("baker");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {indextoko = 1}
  if (n < 1) {indextoko = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[indextoko-1].style.display = "block";
  dots[indextoko-1].className += " active";
}

