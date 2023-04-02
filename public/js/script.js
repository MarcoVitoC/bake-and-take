$('document').ready(function() {
  $('.guest').css({
    "color": "#CB1CDA"
  })
  $('.home').css({
    "color": "#CB1CDA"
  })
  $('.guest').on('click', () => {
    $('.guest').css({
      "color": "#CB1CDA"
    })
    $('.gallery').css({
      "color": "#FFFFFF"
    })
    $('.guest-about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.gallery').on('click', () => {
    $('.guest').css({
      "color": "#FFFFFF"
    })
    $('.gallery').css({
      "color": "#CB1CDA"
    })
    $('.guest-about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.guest-about-us').on('click', () => {
    $('.guest').css({
      "color": "#FFFFFF"
    })
    $('.gallery').css({
      "color": "#FFFFFF"
    })
    $('.guest-about-us').css({
      "color": "#CB1CDA"
    })
  })

  $('.home').on('click', () => {
    $('.home').css({
      "color": "#CB1CDA"
    })
    $('.category').css({
      "color": "#FFFFFF"
    })
    $('.user-menu').css({
      "color": "#FFFFFF"
    })
    $('.user-about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.category').on('click', () => {
    $('.category').css({
      "color": "#CB1CDA"
    })
    $('.home').css({
      "color": "#FFFFFF"
    })
    $('.user-menu').css({
      "color": "#FFFFFF"
    })
    $('.user-about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.user-menu').on('click', () => {
    $('.user-menu').css({
      "color": "#CB1CDA"
    })
    $('.category').css({
      "color": "#FFFFFF"
    })
    $('.home').css({
      "color": "#FFFFFF"
    })
    $('.user-about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.user-about-us').on('click', () => {
    $('.user-about-us').css({
      "color": "#CB1CDA"
    })
    $('.category').css({
      "color": "#FFFFFF"
    })
    $('.user-menu').css({
      "color": "#FFFFFF"
    })
    $('.home').css({
      "color": "#FFFFFF"
    })
  })

  $('.dot2022').show()
  $('.cake-year2022-img').show()
  $('.cake-year2021-img').hide()
  $('.cake-year2020-img').hide()
  $('.cake-year2019-img').hide()

  $('.cake-year2022').on('click', () => {
    $('.dot2022').show()
    $('.dot2021').hide()
    $('.dot2020').hide()
    $('.dot2019').hide()
    $('.cake-year2022-img').show()
    $('.cake-year2021-img').hide()
    $('.cake-year2020-img').hide()
    $('.cake-year2019-img').hide()
  })

  $('.cake-year2021').on('click', () => {
    $('.dot2022').hide()
    $('.dot2021').show()
    $('.dot2020').hide()
    $('.dot2019').hide()
    $('.cake-year2022-img').hide()
    $('.cake-year2021-img').show()
    $('.cake-year2020-img').hide()
    $('.cake-year2019-img').hide()
  })

  $('.cake-year2020').on('click', () => {
    $('.dot2022').hide()
    $('.dot2021').hide()
    $('.dot2020').show()
    $('.dot2019').hide()
    $('.cake-year2022-img').hide()
    $('.cake-year2021-img').hide()
    $('.cake-year2020-img').show()
    $('.cake-year2019-img').hide()
  })

  $('.cake-year2019').on('click', () => {
    $('.dot2022').hide()
    $('.dot2021').hide()
    $('.dot2020').hide()
    $('.dot2019').show()
    $('.cake-year2022-img').hide()
    $('.cake-year2021-img').hide()
    $('.cake-year2020-img').hide()
    $('.cake-year2019-img').show()
  })

  $('#dismiss-btn').on('click', () => {
    $('.success-msg').hide()
    $('.error-msg').hide()
  })

  $('.user').on('click', () => {
    $('.dropdown').toggle()
    $('.user-dropdown').toggle()
  })

  $('.chocolate').css({
    "background-color": "#F364FF",
    "color": "white"
  })
  $('.cheese').css({
    "background-color": "#D9D9D9",
    "color": "black"
  })
  $('.strawberry').css({
    "background-color": "#D9D9D9",
    "color": "black"
  })
  $('#chocolate').show()
  $('#cheese').hide()
  $('#strawberry').hide()

  $('.cheese').on('click', () => {
    $('#chocolate').hide()
    $('#cheese').show()
    $('#strawberry').hide()
    $('.cheese').css({
      "background-color": "#F364FF",
      "color": "white"
    })
    $('.chocolate').css({
      "background-color": "#D9D9D9",
      "color": "black"
    })
    $('.strawberry').css({
      "background-color": "#D9D9D9",
      "color": "black"
    })
  })
  $('.strawberry').on('click', () => {
    $('#chocolate').hide()
    $('#cheese').hide()
    $('#strawberry').show()
    $('.strawberry').css({
      "background-color": "#F364FF",
      "color": "white"
    })
    $('.chocolate').css({
      "background-color": "#D9D9D9",
      "color": "black"
    })
    $('.cheese').css({
      "background-color": "#D9D9D9",
      "color": "black"
    })
  })
  $('.chocolate').on('click', () => {
    $('#chocolate').show()
    $('#cheese').hide()
    $('#strawberry').hide()
    $('.chocolate').css({
      "background-color": "#F364FF",
      "color": "white"
    })
    $('.strawberry').css({
      "background-color": "#D9D9D9",
      "color": "black"
    })
    $('.cheese').css({
      "background-color": "#D9D9D9",
      "color": "black"
    })
  })
})

const previewImage = () => {
  const cakeImg = document.querySelector('#cake_photo')
  const cakeImgPreview = document.querySelector('.cake-img-preview')

  const oFReader = new FileReader()
  oFReader.readAsDataURL(cakeImg.files[0])
  oFReader.onload = function(oFREvent) {
    cakeImgPreview.src = oFREvent.target.result
  }
}

let slideIndex = 1;
showSlides(slideIndex);

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
