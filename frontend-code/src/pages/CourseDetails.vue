<template>
  <Header headerShadow="header__area header__padding header__padding-2 header__shadow " />
  <CourseDetailsArea/>
  <Footer footerPadding="true"/>
</template>

<script>
import Header from '../components/HomeTwo/Header.vue';
import CourseDetailsArea from '../components/CourseDetails/CourseDetailsArea.vue';
import Footer from '../components/Home/Footer.vue';

export default {
	name:'CourseDetails',
	components:{
		Header,
		CourseDetailsArea,
        Footer
	}
};
</script>

