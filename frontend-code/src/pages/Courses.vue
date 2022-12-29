<template>
   <Header header__white="header__white" />
   <Breadcrumb title="Courses" subtitle="Courses" />
   <Courses/>
<!--   <Footer footerPadding="true"/>-->
</template>

<script>
import Header from '../components/Home/Header.vue';
import Breadcrumb from '../components/common/Breadcrumb.vue';
import Courses from '../components/Courses/CoursesArea.vue';
import Footer from '../components/Home/Footer.vue';

export default {
   name:'CoursesPage',
   components:{
      Header,
      Breadcrumb,
      Courses,
      Footer
   }
};
</script>
