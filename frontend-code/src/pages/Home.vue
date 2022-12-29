 <template>
    <Header/>
<!--    <HeroSection/>-->
<!--    <CategoryArea/>-->
<!--    <BannerArea/>-->
    <Course/>
<!--    <Events/>-->
<!--    <Pricing/>-->
<!--    <Footer footerPadding="true"/>-->
 </template>

 <script>
import Header from '../components/Home/Header.vue';
import HeroSection from '../components/Home/HeroSection.vue';
import CategoryArea from '../components/Home/CategoryArea.vue';
import BannerArea from '../components/Home/BannerArea.vue';
import Course from '../components/Home/Course.vue';
import Events from '../components/Home/Events.vue';
import Pricing from '../components/Home/Pricing.vue';
import Footer from '../components/Home/Footer.vue';

 export default {
     name:'HomePage',
     components:{
         Header,
         HeroSection,
         CategoryArea,
         BannerArea,
         Course,
         Events,
         Pricing,
         Footer,
     }
 }
 </script>