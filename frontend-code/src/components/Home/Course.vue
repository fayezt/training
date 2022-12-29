<template>
    <section class="course__area pt-115 pb-120 grey-bg">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xxl-5 col-xl-6 col-lg-6">
                     <div class="section__title-wrapper mb-60">
                        <h2 class="section__title">Find the Right<br>Online <span class="yellow-bg yellow-bg-big">Course<img src="../../assets/img/shape/yellow-bg.png" alt=""></span> for you</h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                     </div>
                  </div>
                  <div class="col-xxl-7 col-xl-6 col-lg-6">
                     <div class="course__menu d-flex justify-content-lg-end mb-60">
                        <div class="masonary-menu filter-button-group">
                           <nav>
                           <div className="nav nav-tabs justify-content-center" id="portfolio-tab" role="tablist" >
                             <button className="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">All</button>

                             <button v-for="category in categories" :key="category.id" className="nav-link" :id="'nav-'+category.name+'-tab-'" data-bs-toggle="tab" :data-bs-target="'#nav-'+category.name" type="button" role="tab" aria-controls="nav-all" aria-selected="true">{{category.name}}</button>

                           </div>
                        </nav>

                       </div>
                     </div>
                  </div>
               </div>
               <div class="row grid tab-content">

                  <div className="tab-pane fade show active" id="nav-all" role="tabpanel"    aria-labelledby="nav-all-tab">
                     <CourseItems item-number-start="1" item-number-end="5" :courses="courses" />
                  </div>

                   <div v-for="category in categories" :key="category.id" className="tab-pane fade" :id="'nav-'+category.name" role="tabpanel" :aria-labelledby="'nav-'+category.name">
                      <CourseItems item-number-start="1" item-number-end="3" :courses="category.courses" />
                   </div>

               </div>
            </div>
         </section>
</template>

<script>
import CourseItems from '../courseItems/CoursesItems.vue';
import {mapActions, mapGetters} from "vuex";

export default {
  data() {
    return {
      currentPage:1
    }
  },
  computed:{
    ...mapGetters('category',[
      'categories'
    ]),
    ...mapGetters('course',[
      'courses'
    ]),
  },
  methods:{
    ...mapActions('category',[
        'getCategories'
    ]),
    ...mapActions('course',[
      'getCourses',
    ])
},
  async mounted() {
    await this.getCategories();
    await this.getCourses();
  },
   name:'homeCourse',
   components:{CourseItems}
};
</script>
