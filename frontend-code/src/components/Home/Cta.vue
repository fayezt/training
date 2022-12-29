<template>
  <section class="cta__area mb--120">
      <div class="container">
         <div class="cta__inner blue-bg fix">
            <div class="cta__shape">
               <img src="../../assets/img/cta/cta-shape.png" alt="">
            </div>
            <div class="row align-items-center">
               <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                  <div class="cta__content">
                     <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                  </div>
               </div>
               <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                  <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                     <router-link to="/contact" class="e-btn e-btn-white">Get Started</router-link>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</template>

<script>
export default {
   name:'CtaArea'
};
</script>

