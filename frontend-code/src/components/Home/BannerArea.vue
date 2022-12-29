<template>
  <section class="banner__area pb-110">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div
            class="banner__item p-relative mb-40"
            :style="{background:'url(../src/assets/img/banner/banner-bg-1.jpg)',backgroundRepeat:'no-repeat',backgroundSize:'cover'}"
          >
            <div class="banner__content">
              <span>Free</span>
              <h3 class="banner__title">
                <router-link to="/course-details"
                  >Germany Foundation <br />
                  Document</router-link>
              </h3>
              <router-link to="/courses" class="e-btn e-btn-2">View Courses</router-link>
            </div>
            <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
              <img src="../../assets/img/banner/banner-img-1.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div
            class="banner__item p-relative mb-40"
            :style="{background:'url(../src/assets/img/banner/banner-bg-2.jpg)',backgroundRepeat:'no-repeat',backgroundSize:'cover'}"
          >
            <div class="banner__content">
              <span class="orange">new</span>
              <h3 class="banner__title">
                <router-link to="/course-details">Online Courses <br />From Eduka University </router-link>
              </h3>
              <router-link to="/courses" class="e-btn e-btn-2">Find Out More</router-link>
            </div>
            <div
              class="
                banner__thumb banner__thumb-2
                d-none d-sm-block d-md-none d-lg-block
              "
            >
              <img src="../../assets/img/banner/banner-img-2.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "BannerArea",
};
</script>
