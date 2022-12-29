<template>
   <div class="row">
      <div class="col-xxl-12">
         <div class="course__slider swiper-container pb-60">

         <swiper
            ref="mySwiper"
            class="pb-50"
            :space-between="25"
            :slides-per-view="2"
            :modules="modules"
            :pagination="{clickable: true}"
            :loop="true"
            :breakpoints="breakpoints"
          >
         <swiper-slide v-for="course in courses.slice(0,4)" :key="course.id">
           <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
             <div class="course__thumb w-img p-relative fix">
               <router-link :to="`/course-details/${course.id}`">
                 <img :src="course.cover" alt="Image">
               </router-link>
               <div class="course__tag">
                 <a href="#" :style="{'color':course.category.color}" class="">{{course.category.name}}</a>
               </div>
             </div>
             <div class="course__content">
               <div class="course__meta d-flex align-items-center justify-content-between">
                 <div class="course__lesson">
                   <!--                     <span><i class="far fa-book-alt"></i>{{course.lesson}} Lesson</span>-->
                 </div>
                 <div class="course__rating">
                   <!--                     <span><i class="fas fa-star"></i>{{course.rating}} (37)</span>-->
                 </div>
               </div>
               <h3 class="course__title">
                 <router-link :to="`/course-details/${course.id}`">{{course.name}}</router-link>
               </h3>
               <div v-for="lecturer in course.lecturers" class="course__teacher d-flex align-items-center">
                 <div class="course__teacher-thumb mr-15">
                   <img :src="lecturer.avatar" alt="">
                 </div>
                 <h6><router-link to="/instructor-details">{{lecturer.name}}</router-link></h6>
               </div>
             </div>
             <div class="course__more d-flex justify-content-between align-items-center">
               <div class="course__status d-flex align-items-center">
                 <span :class="course.color">${{course.price}}</span>
                 <!--                  <span class="old-price">${{course.oldPrice}}</span>-->
               </div>
               <div class="course__btn">
                 <router-link :to="`/course-details/${course.id}`" class="link-btn">
                   Know Details
                   <i class="far fa-arrow-right"></i>
                   <i class="far fa-arrow-right"></i>
                 </router-link>
               </div>
             </div>
           </div>
            </swiper-slide>
          </swiper>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </div>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Pagination } from "swiper";
import CoursesMixin from '../../mixins/courseItemsMixin';

export default {
   name:'SliderCourses',
   // mixins:[CoursesMixin],
    components: {
      Swiper,
      SwiperSlide,
   },
  props:{
    courses:Array,
  },
   data () {
      return {
          // breakpoints
         breakpoints: {
            550: { slidesPerView: 1,},
            768: { slidesPerView: 2,},
            992: { slidesPerView: 2,},
         },
      }
   },
   setup() {
    return {
      modules: [Pagination],
    };
  },
};
</script>
