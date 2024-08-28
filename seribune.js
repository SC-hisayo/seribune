new Vue({
    el: '#carousel3d',
    data: {
      slides: 7
    },
    components: {
      'carousel-3d': window['carousel-3d'].Carousel3d,
      'slide': window['carousel-3d'].Slide
    }
  })