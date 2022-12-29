<template>
  <div class="row">
    <div class="col-xxl-12">
        <div class="basic-pagination mt-30">
        <ul class="d-flex align-items-center"> 
            <li class="prev" v-if="paginator.previous">
                <router-link :to="{ path: '/courses', query: { page: parseInt(currentPage)-1 } }" class="link-btn link-prev">
                    Prev
                    <i class="arrow_left"></i>
                    <i class="arrow_left"></i>
                </router-link>
            </li>
            <li :class="{'active': parseInt(currentPage)===index}" v-for="index in paginator.number_pages" :key="index">
                <router-link :to="{ path: '/courses', query: { page:index } }">
                    <span>{{index}}</span>
                </router-link>
            </li>
            <li class="next" v-if="paginator.next">
                <router-link :to="{ path: '/courses', query: { page: parseInt(currentPage)+1 } }" class="link-btn">
                    Next
                    <i class="arrow_right"></i>
                    <i class="arrow_right"></i>
                </router-link>
            </li>
        </ul>
        </div>
    </div>
</div>
</template>

<script>
import {mapActions} from "vuex";

export default {
    name:'PaginationArea',
  props:{
    paginator:Object
  },
  methods:{
    ...mapActions('course',[
        'setPage'
    ]),
  },
data() {
  return {
    currentPage:this.$route.query.page??1
  }
},
  created() {
    this.$watch(
        () => this.$route.params,
        () => {
          this.currentPage=this.$route.query.page??1;
          this.setPage(this.currentPage)
        }
    );
  },
}
</script>

