<template>
<section class="testimonial__area testimonial__overlay pt-175 pb-170" 
:style="{background:'url('+ require('../../assets/img/testimonial/testimonial-bg.jpg')+')'}">
   <div class="container">
   <div class="col-xxl-12">
   <div class="testimonial__slider swiper-container">
       <swiper
        ref="mySwiper"
        :modules="modules"
        :loop="true"
        :navigation="{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'}"
      >
        <swiper-slide v-for="testimonial in testimonialData" :key="testimonial.id">
          <div class="testimonial__slider-inner swiper-wrapper">
               <div class="testimonial__item text-center swiper-slide">
                  <div class="testimonial__thumb">
                     <img src="../../assets/img/testimonial/testi-1.jpg" alt="">
                  </div>
                  <div class="testimonial__content">
                     <p>“ Barmy loo sloshed porkiesdo with me down the pub say bubble and squeak. ”</p>

                     <div class="testimonial__info">
                        <h4>Jason Response</h4>
                        <span>UX Designer</span>
                     </div>
                  </div>
               </div>
               <div class="testimonial__item text-center swiper-slide">
                  <div class="testimonial__thumb">
                     <img src="../../assets/img/testimonial/testi-1.jpg" alt="">
                  </div>
                  <div class="testimonial__content">
                     <p>“ Barmy loo sloshed porkiesdo with me down the pub say bubble and squeak. ”</p>

                     <div class="testimonial__info">
                        <h4>Jason Response</h4>
                        <span>UX Designer</span>
                     </div>
                  </div>
               </div>
               <div class="testimonial__item text-center swiper-slide">
                  <div class="testimonial__thumb">
                     <img src="../../assets/img/testimonial/testi-1.jpg" alt="">
                  </div>
                  <div class="testimonial__content">
                     <p>“ Barmy loo sloshed porkiesdo with me down the pub say bubble and squeak. ”
                     </p>

                     <div class="testimonial__info">
                        <h4>Jason Response</h4>
                        <span>UX Designer</span>
                     </div>
                  </div>
               </div>
            </div>
        </swiper-slide>

         <div class="swiper-button-next swiper-nav">
         <i class="far fa-arrow-right"></i>
      </div>
      <div class="swiper-button-prev swiper-nav">
         <i class="far fa-arrow-left"></i>
      </div>
      </swiper>

     

         </div>
      </div>
   </div>
</section>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Navigation, EffectFade } from "swiper";

export default {
   name:'TestimonialArea',
   data () {
      return {
         testimonialData:[
            {
               id:1,
            },
            {
               id:2,
            }
         ]
      }
   },
   components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Navigation, EffectFade ],
    };
  },
};
</script>
