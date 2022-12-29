<template>
   <div v-for="course in courses" :key="course.id"
   class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
      <div class="course__item white-bg mb-30 fix">
         <div class="course__thumb w-img p-relative fix">
             <router-link :to="`/course-details/${course.id}`">
               <img :src="course.cover" alt="">
            </router-link>
            <div class="course__tag">
               <a href="#" :style="{'color':course.category.color}">{{course.category.name}}</a>
            </div>
         </div>
         <div class="course__content">
            <div class="course__meta d-flex align-items-center justify-content-between">
               <div class="course__lesson">
                  <span><i class="far fa-users-alt"></i>{{course.count_enroll}} Enroll</span>
               </div>
<!--               <div class="course__rating">-->
<!--                  <span><i class="icon_star"></i>{{course.rating}} (44)</span>-->
<!--               </div>-->
            </div>
            <h3 class="course__title">
               <router-link :to="`/course-details/${course.id}`">
               {{course.name}}</router-link>
            </h3>
            <div class="course__teacher d-flex align-items-center">
               <div class="course__teacher-thumb mr-15">
                  <img :src="course.lecturers[0].avatar" alt="">
               </div>
               <h6>
                  <router-link to="/instructor-details">
                  {{course.lecturers[0].name}}</router-link>
               </h6>
            </div>
         </div>
         <div class="course__more d-flex justify-content-between align-items-center">
            <div class="course__status d-flex align-items-center">
               <span class="">${{course.price}}</span>
<!--               <span class="old-price">${{course.oldPrice}}</span>-->
            </div>
            <div class="course__btn">
                <router-link to="/course-details" class="link-btn">
                  Know Details
                  <i class="far fa-arrow-right"></i>
                  <i class="far fa-arrow-right"></i>
               </router-link>
            </div>
         </div>
      </div>
   </div>
</template>

<script>

export default {
   name:'GridTab',
    props:{
     courses:Object
    },
   // mixins:[CourseMixin]
};
</script>
