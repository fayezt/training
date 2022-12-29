<template>
<div v-for="course in courses" :key="course.id" class="col-xxl-12">
   <div class="course__item white-bg mb-30 fix">
      <div class="row gx-0">
         <div class="col-xxl-4 col-xl-4 col-lg-4">
            <div class="course__thumb course__thumb-list w-img p-relative fix">
                <router-link :to="`/course-details/${course.id}`">
                     <img :src="course.cover" alt="">
               </router-link>
               <div class="course__tag">
                  <a href="#" :style="{'color':course.category.color}" class="">{{course.category.name}}</a>
               </div>
            </div>
         </div>
         <div class="col-xxl-8 col-xl-8 col-lg-8">
            <div class="course__right">
               <div class="course__content course__content-3">
                  <div class="course__meta d-flex align-items-center">
                     <div class="course__lesson mr-20">
                        <span><i class="far fa-users"></i>{{course.count_enroll}} Enroll</span>
                     </div>
<!--                     <div class="course__rating">-->
<!--                        <span><i class="icon_star"></i>{{course.rating}} (44)</span>-->
<!--                     </div>-->
                  </div>
                  <h3 class="course__title course__title-3">
                      <router-link :to="`/course-details/${course.id}`">{{course.name}}</router-link>
                  </h3>
                  <div class="course__summary">
                     <p v-text="course.description"></p>
                  </div>
                  <div class="course__teacher d-flex align-items-center">
                     <div class="course__teacher-thumb mr-15">
                        <img :src="course.lecturers[0].avatar" alt="">
                     </div>
                    <h6><router-link to="/instructor-details">{{course.lecturers[0].name}}</router-link></h6>
                  </div>
               </div>
               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                    <div class="course__status d-flex align-items-center">
                        <span class="">${{course.price}}</span>
<!--                        <span class="old-price">${{course.oldPrice}}</span>-->
                     </div>
<!--                 <div class="course__btn btn btn-light">-->
<!--                   <b-button v-b-toggle="'collapse-'+course.id" class="m-1">-->
<!--                     Show Appointments-->
<!--                     <i class="fa fa-arrow-down"></i>-->
<!--                   </b-button>-->
<!--                 </div>-->
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
<!--        <b-collapse :id="'collapse-'+course.id">-->
<!--          <b-card>-->
<!--            <Appointments :course="course"/>-->
<!--          </b-card>-->
<!--        </b-collapse>-->
      </div>
   </div>
  </div>

</template>

<script>
// import CourseMixin from '../../mixins/courseItemsMixin';
import Appointments from "./Appointments.vue";
export default {
   name:'ListTabItems',
  components: {Appointments},
  props:{
     courses:Object
   }
   // mixins:[CourseMixin]
};
</script>

