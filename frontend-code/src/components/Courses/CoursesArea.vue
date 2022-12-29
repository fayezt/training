<template>
<section class="course__area pt-120 pb-120">

   <div class="container">
     <div class="course__tab-inner grey-bg-2 mb-50">
       <div class="header__search d-flex justify-content-around">
         <form action="#">
           <input type="text" placeholder="Search..." />
           <button type="submit"><i class="fa fa-search"></i></button>
         </form>
         <Datepicker  :format="format" v-model="start" :enable-time-picker="false"/>
         <Datepicker  :format="format" v-model="end" :enable-time-picker="false"/>
         <h3 @click="search()" class="btn btn-primary">Search</h3>
       </div>
     </div>

      <div class="course__tab-inner grey-bg-2 mb-50">
         <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
               <div class="course__tab-wrapper d-flex align-items-center">
                  <div class="course__tab-btn">
                     <ul class="nav nav-tabs" id="courseTab" role="tablist">

                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                           <svg class="grid" viewBox="0 0 24 24">
                              <rect x="3" y="3" class="st0" width="7" height="7"/>
                              <rect x="14" y="3" class="st0" width="7" height="7"/>
                              <rect x="14" y="14" class="st0" width="7" height="7"/>
                              <rect x="3" y="14" class="st0" width="7" height="7"/>
                              </svg>
                           </button>
                        </li>

                        <li class="nav-item" role="presentation">
                           <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                           <svg class="list" viewBox="0 0 512 512">
                              <g id="Layer_2_1_">
                                 <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                                 <circle class="st0" cx="64" cy="100" r="31"/>
                                 <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                                 <circle class="st0" cx="64" cy="256" r="31"/>
                                 <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                                 <circle class="st0" cx="64" cy="412" r="31"/>
                              </g>
                              </svg>
                           </button>
                        </li>

                     </ul>
                  </div>
                  <div class="course__view">
                     <h4>Showing 1 - {{paginator.items_per_page}} of {{paginator.total}}</h4>
                  </div>
               </div>
            </div>
<!--            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">-->
<!--               <div class="course__sort d-flex justify-content-sm-end">-->
<!--                  <div class="course__sort-inner">-->
<!--                     <select>-->
<!--                        <option>Default</option>-->
<!--                        <option>Option 1</option>-->
<!--                        <option>Option 2</option>-->
<!--                        <option>Option 3</option>-->
<!--                        <option>Option 4</option>-->
<!--                        <option>Option 5</option>-->
<!--                        <option>Option 6</option>-->
<!--                     </select>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
         </div>
      </div>
      <div class="row">
         <div class="col-xxl-12">
            <div class="course__tab-conent">
               <div class="tab-content" id="courseTabContent">
                  <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                     <div class="row">
                        <!-- GridTabItems  -->
                        <GridTabItems :courses="courses"/>
                        <!-- GridTabItems  -->
                     </div>
                  </div>

                  <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                     <div class="row">
                        <!-- GridTabItems  -->
                        <ListTabItems :courses="courses"/>
                        <!-- GridTabItems  -->
                     </div>
                  </div>
                  </div>
            </div>
         </div>
      </div>

      <!-- pagination start -->
      <Pagination :paginator="paginator"/>
      <!-- pagination end -->

   </div>
</section>
</template>

<script>
import GridTabItems from './GridTabItems.vue';
import ListTabItems from './ListTabItems.vue';
import Pagination from '../common/Pagination.vue';
import {mapActions, mapGetters} from 'vuex'
import '@vuepic/vue-datepicker/dist/main.css'
import Datepicker from '@vuepic/vue-datepicker';
import { ref } from 'vue';
import moment from "moment";

export default {
  setup() {
    const date = ref(new Date());
    // In case of a range picker, you'll receive [Date, Date]
    const format = (date) => {
      const day = date.getDate();
      const month = date.getMonth() + 1;
      const year = date.getFullYear();

      return `${year}-${month}-${day}`;
    }

    return {
      date,
      format,
    }
  },
  data() {
    return {
     paginator:Object,
     currentPage:this.$route.query.page??1,
      start: null,
      end: null,

    }
  },
  computed:{
    ...mapGetters('course',[
        'courses'
    ]),
  },
  methods:{
    ...mapActions('course',[
        'getCourses'
    ]),
    async search() {
      let start = moment(this.start).format('YYYY-MM-DD')
      let end = moment(this.end).format('YYYY-MM-DD')
      let paginator=await this.getCourses({start,end,page:this.currentPage})
      this.paginator=this.extract_paginator_data(paginator);

    },
    extract_paginator_data(response){
      return (({total,next,previous,current_page,number_pages,items_per_page}) => ({total,next,previous,current_page,number_pages,items_per_page}))(response.data.data)
    }
  },
  async created() {
    const response=await this.getCourses({page:this.currentPage})
    this.paginator = this.extract_paginator_data(response);
  },
  name:'CoursesArea',
   components:{
      Pagination,
      GridTabItems,
      ListTabItems,
     Datepicker
   }
};
</script>

