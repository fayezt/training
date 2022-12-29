<template>
  <Header headerShadow="header__area header__padding header__padding-2 header__shadow " />
   <section class="page__title-area pt-120 pb-90">
   <div class="page__title-shape">
      <img class="page-title-shape-5 d-none d-sm-block" src="../assets/img/page-title/page-title-shape-1.png" alt="">
      <img class="page-title-shape-6" src="../assets/img/page-title/page-title-shape-6.png" alt="">
      <img class="page-title-shape-7" src="../assets/img/page-title/page-title-shape-4.png" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 col-xl-8 col-lg-8">
            <div class="course__wrapper">
               <div class="page__title-content mb-25">
                  <div class="page__title-breadcrumb">                            
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                              <router-link to="/">Home</router-link>
                           </li>
                           <li class="breadcrumb-item">
                             <router-link to="/courses">Courses</router-link>
                           </li>
                           <li class="breadcrumb-item active" aria-current="page">{{course.name}}</li>
                        </ol>
                        </nav>
                  </div>
                  <span class="page__title-pre">{{course.category.name}}</span>
                  <h5 class="page__title-3">{{course.name}}</h5>
               </div>
               <div class="course__meta-2 d-sm-flex mb-30">
                  <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                     <div class="course__teacher-thumb-3 mr-15">
                        <img :src="course.lecturers[0].avatar" alt="">
                     </div>
                     <div class="course__teacher-info-3">
                        <h5>Teacher</h5>
                        <p><a href="#">{{course.lecturers[0].name}}</a></p>
                     </div>
                  </div>
                  <div class="course__update mr-80 mb-30">
                     <h5>Create At:</h5>
                     <p>{{course.created_at}}</p>
                  </div>
                  <div class="course__rating-2 mb-30">
                     <h5>Review:</h5>
                     <div class="course__rating-inner d-flex align-items-center">
                        <ul>
                           <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                           <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                           <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                           <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                           <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                        </ul>
                        <p>4.5</p>
                     </div>
                  </div>
               </div>
               <div class="course__img w-img mb-30">
                  <img :src="course.cover" alt="">
               </div>
               <div class="course__tab-2 mb-45">
                  <ul class="nav nav-tabs" id="courseTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span>Discription</span> </button>
                     </li>
<!--                     <li class="nav-item" role="presentation">-->
<!--                        <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span>Curriculum</span> </button>-->
<!--                     </li>-->
<!--                     <li class="nav-item" role="presentation">-->
<!--                        <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span>Reviews</span> </button>-->
<!--                     </li>-->
<!--                     <li class="nav-item" role="presentation">-->
<!--                        <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Members</span> </button>-->
<!--                     </li>-->
                     </ul>
               </div>
               <div class="course__tab-content mb-95">
                  <div class="tab-content" id="courseTabContent">
                     <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="course__description">
                           <h3>Course Overview</h3>
                           <p v-text="course.description"></p>

<!--                           <div class="course__tag-2 mb-35 mt-35">-->
<!--                              <i class="fal fa-tag"></i>-->
<!--                              <a href="#">Big data,</a>-->
<!--                              <a href="#">Data analysis,</a>-->
<!--                              <a href="#">Data modeling</a>-->
<!--                           </div>-->
<!--                           <div class="course__description-list mb-45">-->
<!--                              <h4>What is the Target Audience?</h4>-->
<!--                              <ul>-->
<!--                                 <li> <i class="icon_check"></i> Business's managers, leaders</li>-->
<!--                                 <li> <i class="icon_check"></i> Downloadable lectures, code and design assets for all projects</li>-->
<!--                                 <li> <i class="icon_check"></i> Anyone who is finding a chance to get the promotion</li>-->
<!--                              </ul>-->
<!--                           </div>-->
                           <div class="course__instructor mb-45">
                              <h3>Other Instructors</h3>
                              <div class="course__instructor-wrapper d-md-flex align-items-center">
                                 <div v-for="lecturer in course.lecturers" class="course__instructor-item d-flex align-items-center mr-70">
                                    <div class="course__instructor-thumb mr-20">
                                       <img :src="lecturer.avatar" alt="">
                                    </div>
                                    <div class="course__instructor-content">
                                       <h3 v-text="lecturer.name"></h3>
                                       <p v-text="lecturer.specialization"></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- CurriculumTab start -->
                     <CurriculumTab/>
                     <!-- CurriculumTab end -->

                     <!-- CurriculumTab start -->
                     <ReviewTab/>
                     <!-- CurriculumTab end -->

                     <!-- CurriculumTab start -->
                     <MemberTab/>
                     <!-- CurriculumTab end -->
                   
<!--                     <div class="course__share">-->
<!--                        <h3>Share :</h3>-->
<!--                        <ul>-->
<!--                           <li>-->
<!--                              <a href="#" class="fb" ><i class="fab fa-facebook-f"></i>-->
<!--                           </a></li>-->
<!--                           <li>-->
<!--                              <a href="#" class="tw" ><i class="fab fa-twitter"></i>-->
<!--                           </a></li>-->
<!--                           <li>-->
<!--                              <a href="#" class="pin" ><i class="fab fa-pinterest-p"></i>-->
<!--                           </a></li>-->
<!--                        </ul>-->
<!--                     </div>-->
                  </div>
               </div>
               <div class="course__related">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Related <span class="yellow-bg yellow-bg-big">Course<img src="../assets/img/shape/yellow-bg.png" alt=""></span></h2>
                           <p>You don't have to struggle alone, you've got our assistance and help.</p>
                        </div>
                     </div>
                  </div>
                  <!-- slider courses start-->
                  <SliderCourses :courses="related"/>
                  <!-- slider courses end-->
               </div>
            </div>
         </div>

       <!-- course side bar start -->
       <CourseSidebar :course="course"/>
       <!-- course side bar end -->

      </div>
   </div>
</section>

<!-- Footer -->
<!--<Footer footerPadding="true"/>-->

</template>

<script>
import Header from '../components/Home/Header.vue';
import Footer from '../components/Home/Footer.vue';
import CourseItemMixin from '../mixins/courseItemsMixin';
import SliderCourses from '../components/CourseDetails/SliderCourses.vue';
import CourseSidebar from '../components/CourseDetails/CourseSidebar.vue';
import CurriculumTab from '../components/CourseDetails/CurriculumTab.vue';
import ReviewTab from '../components/CourseDetails/ReviewTab.vue';
import MemberTab from '../components/CourseDetails/MemberTab.vue';
import {mapActions} from "vuex";

export default {
  name: "CourseDetailsPage",
  components:{
		  Header,
      SliderCourses,
      CourseSidebar,
      CurriculumTab,
      ReviewTab,
      MemberTab,
      Footer
	},
    mixins: [CourseItemMixin],
    data() {
        return {
            id: this.$route.params.id,
            course: {},
            related:[],

        }
    },
    methods: {
    ...mapActions('course',[
       'getCourseById',
      'getRelatedCourse'
    ]),

        // getCourse(courseId) {
        //     this.course = this.courseItems.find(item => item.id == courseId);
        // }
    },
    async created() {
      this.course = await this.getCourseById(this.id);
      this.related = await this.getRelatedCourse(this.id);
    }
};
</script>
