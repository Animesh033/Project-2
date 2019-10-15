<template>
  <md-card>
    <!-- <md-card-actions>
      <div class="md-subhead">
        <span>3D Coverflow Effect</span>
        <span>（</span>
        <span>3D滚动切换</span>
        <span>）</span>
      </div>
      <md-button class="md-icon-button"
                 target="_blank"
                 href="https://github.com/surmon-china/vue-awesome-swiper/blob/master/examples/24-effect-coverflow.vue">
        <md-icon>code</md-icon>
      </md-button>
    </md-card-actions> -->
    <md-card-media class="swiper-inner">
      <!-- swiper -->
      <swiper :options="swiperOption">
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/1)"></div></swiper-slide>
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/2)"></div></swiper-slide>
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/3)"></div></swiper-slide>
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/4)"></div></swiper-slide>
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/5)"></div></swiper-slide>
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/6)"></div></swiper-slide>
        <swiper-slide><div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/7)"></div></swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
      </swiper>
    </md-card-media>
  </md-card>
</template>

<script>
  export default {
    data() {
      return {
        swiperOption: {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
          },
          pagination: {
            el: '.swiper-pagination'
          }
        }
      }
    }
  }
</script>

<style scoped>
  .swiper-inner {
    width: 100%;
    height: 400px;
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 300px;
    height: 300px;
  }
</style>