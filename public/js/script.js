$('document').ready(function() {
  $('.home').css({
    "color": "#CB1CDA"
  })
  $('.home').on('click', () => {
    $('.home').css({
      "color": "#CB1CDA"
    })
    $('.gallery').css({
      "color": "#FFFFFF"
    })
    $('.about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.gallery').on('click', () => {
    $('.home').css({
      "color": "#FFFFFF"
    })
    $('.gallery').css({
      "color": "#CB1CDA"
    })
    $('.about-us').css({
      "color": "#FFFFFF"
    })
  })
  $('.about-us').on('click', () => {
    $('.home').css({
      "color": "#FFFFFF"
    })
    $('.gallery').css({
      "color": "#FFFFFF"
    })
    $('.about-us').css({
      "color": "#CB1CDA"
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
})