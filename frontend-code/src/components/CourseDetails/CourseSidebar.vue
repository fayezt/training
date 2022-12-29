<template>
<div class="col-xxl-4 col-xl-4 col-lg-4">
   <div class="course__sidebar  p-relative">
      <div class="course__shape">
         <img class="course-dot" src="../../assets/img/course/course-dot.png" alt="">
      </div>
      <div class="course__sidebar-widget-2 white-bg mb-20">
         <div class="course__video">
            <div class="course__video-thumb w-img mb-25">
               <img src="../../assets/img/course/video/course-video.jpg" alt="">
               <div class="course__video-play"> 
                  <button v-b-modal.modal-center href="https://youtu.be/yJg-Y5byMMw" data-fancybox="" class="play-btn"> <i class="fas fa-play"></i> </button>
               </div>
            </div>
            <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
               <div class="course__video-price">
                  <h5>$ {{course.price}} </h5>
<!--                  <h5 class="old-price">$129.00</h5>-->
               </div>
               <div class="course__video-discount">
                  <span>68% OFF</span>
               </div>
            </div>
            <div class="course__video-content mb-35">
               <ul>
                  <li class="d-flex align-items-center">
                     <div class="course__video-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                           <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                           <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                        </svg>
                     </div>
                     <div class="course__video-info">
                        <h5><span>Instructor :</span> {{course.lecturers[0].name}}</h5>
                     </div>
                  </li>
<!--                  <li class="d-flex align-items-center">-->
<!--                     <div class="course__video-icon">-->
<!--                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">-->
<!--                           -->
<!--                           <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>-->
<!--                           <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>-->
<!--                        </svg>-->
<!--                     </div>-->
<!--                     <div class="course__video-info">-->
<!--                        <h5><span>Lectures :</span>14</h5>-->
<!--                     </div>-->
<!--                  </li>-->
<!--                  <li class="d-flex align-items-center">-->
<!--                     <div class="course__video-icon">-->
<!--                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">-->
<!--                           <circle class="st0" cx="8" cy="8" r="6.7"/>-->
<!--                           <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>-->
<!--                        </svg>-->
<!--                     </div>-->
<!--                     <div class="course__video-info">-->
<!--                        <h5><span>Duration :</span>6 weeks</h5>-->
<!--                     </div>-->
<!--                  </li>-->
                  <li class="d-flex align-items-center">
                     <div class="course__video-icon">
                        <svg>
                           <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                           <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                        </svg>
                     </div>
                     <div class="course__video-info">
                        <h5><span>Enrolled :</span>{{course.count_enroll}} students</h5>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="course__video-icon">
                        <svg>
                           <circle class="st0" cx="8" cy="8" r="6.7"/>
                           <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                           <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                        </svg>
                     </div>
                     <div class="course__video-info">
                        <h5><span>Language :</span>English</h5>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="course__payment mb-35">
               <h3>Payment:</h3>
               <a href="#">
                  <img src="../../assets/img/course/payment/payment-1.png" alt="">
               </a>
            </div>
<!--            <div class="course__enroll-btn">-->
<!--               <router-link to="/login" class="e-btn e-btn-7 w-100">Enroll -->
<!--                  <i class="far fa-arrow-right"></i>-->
<!--               </router-link>-->
<!--            </div>-->
         </div>
      </div>

      <!-- RelatedCourse start -->
<!--      <RelatedCourse DetailsPage="course__sidebar-widget-2 white-bg mb-20" />-->
      <!-- RelatedCourse end -->

   </div>
  <Appointments :course="course"/>
</div>

  <!-- video modal  start-->
<div>
   <div class="video-modal-wrapper">
<!--      <b-modal id="modal-center" centered>-->
<!--               <p><iframe src="https://www.youtube.com/embed/yJg-Y5byMMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>-->
<!--      </b-modal>-->
    </div>
</div>

<!-- video modal  end-->
</template>

<script>
import RelatedCourse from '../common/RelatedCourse.vue';
import Appointments from "../Courses/Appointments.vue";

export default {
   name:'courseSidebar',
   components:{
     Appointments,
      RelatedCourse,
   },
  mounted() {
     console.log(this.course);
  },
  props:{
     course:Object
  }
};
</script>

