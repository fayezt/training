<template>
<header>
   <div id="header-sticky" :class="`${isSticky ? 'header__area header__transparent header__padding-2 sticky' : `${headerShadow ? headerShadow : 'header__area header__transparent header__padding-2'}`}`">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
               <div class="header__left d-flex">
                  <div class="logo">
                     <router-link to="/">
                        <img src="../../assets/img/logo/logo.png" alt="logo">
                     </router-link>
                  </div>
                  <div class="header__category d-none d-lg-block">
                     <nav>
                        <ul>
                          <li><router-link to="/courses">Course</router-link></li>
<!--                           <li>-->
<!--                              <router-link to="/courses" class="cat-menu d-flex align-items-center">-->
<!--                                 <div class="cat-dot-icon d-inline-block">-->
<!--                                    <svg viewBox="0 0 276.2 276.2">-->
<!--                                       <g>-->
<!--                                          <g>-->
<!--                                             <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>-->
<!--                                             <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>-->
<!--                                             <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>-->
<!--                                             <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>-->
<!--                                             <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>-->
<!--                                             <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>-->
<!--                                             <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>-->
<!--                                             <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>-->
<!--                                             <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>-->
<!--                                          </g>-->
<!--                                       </g>-->
<!--                                    </svg>-->
<!--                                 </div>-->
<!--                                 <span>Category</span>-->
<!--                              </router-link>-->
<!--                              <ul class="cat-submenu">-->
<!--                                 <li><router-link to="/course-details">English Learning</router-link></li>-->
<!--                                 <li><router-link to="/course-details">Web Development</router-link></li>-->
<!--                                 <li><router-link to="/course-details">Logo Design</router-link></li>-->
<!--                                 <li><router-link to="/course-details">Motion Graphics</router-link></li>-->
<!--                                 <li><router-link to="/course-details">Video Edition</router-link></li>-->
<!--                              </ul>-->
<!--                           </li>-->
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
               <div class="header__right d-flex justify-content-end align-items-center">
                  <div class="main-menu main-menu-2">
                     <nav id="mobile-menu" class="d-none d-xl-block">
                        <ul>
<!--                           <li class="has-dropdown">-->
<!--                              <router-link to="/">Home</router-link>-->
<!--                              <ul class="submenu">-->
<!--                                 <li>-->
<!--                                    <router-link to="/home">Home Style 1</router-link>-->
<!--                                 </li>-->
<!--                                 <li>-->
<!--                                    <router-link to="/home-two">Home Style 2</router-link>-->
<!--                                 </li>-->
<!--                                 <li>-->
<!--                                    <router-link to="/home-three">Home Style 3</router-link>-->
<!--                                 </li>-->
<!--                              </ul>-->
<!--                           </li>-->
<!--                           <li class="has-dropdown">-->
<!--                            <router-link to="/courses">Courses</router-link>-->
<!--                              <ul class="submenu">-->
<!--                                 <li>-->
<!--                                    <router-link to="/courses">Courses</router-link>-->
<!--                                 </li>-->
<!--                                 <li>-->
<!--                                    <router-link to="/courses-list">Course List</router-link>-->
<!--                                 </li>-->
<!--                                 <li>-->
<!--                                    <router-link to="/courses-sidebar">Course sidebar-->
<!--                                    </router-link>-->
<!--                                 </li>-->
<!--                                 <li>-->
<!--                                    <router-link to="/course-details">Course Details-->
<!--                                    </router-link>-->
<!--                                 </li>-->
<!--                              </ul>-->
<!--                           </li>-->
<!--                           <li class="has-dropdown">-->
<!--                            <router-link to="/blog">Blog</router-link>-->
<!--                              <ul class="submenu">-->
<!--                                 <li><router-link to="/blog">Blog</router-link></li>-->
<!--                                 <li><router-link to="/blog-details">Blog Details</router-link></li>-->
<!--                              </ul>-->
<!--                           </li>-->
<!--                           <li class="has-dropdown">-->
<!--                             <router-link to="/courses">Pages</router-link>-->
<!--                              <ul class="submenu">-->
<!--                                 <li><router-link to="/about">About</router-link></li>-->
<!--                                 <li><router-link to="/instructor">Instructor</router-link></li>-->
<!--                                 <li>-->
<!--                                 <router-link to="/instructor-details">-->
<!--                                 Instructor Details</router-link>-->
<!--                                 </li>-->
<!--                                 <li><router-link to="/event-details">Event Details</router-link></li>-->
<!--                                 <li><router-link to="/cart">My Cart</router-link></li>-->
<!--                                 <li><router-link to="/checkout">Checkout</router-link></li>-->
<!--                                 <li><router-link to="/login">Sign In</router-link></li>-->
<!--                                 <li><router-link to="/register">Sign Up</router-link></li>-->
<!--                                 <li><router-link to="/errorPage">Error</router-link></li>-->
<!--                              </ul>-->
<!--                           </li>-->
                           <li><router-link to="/contact">Contact</router-link></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                     <router-link to="/register" class="e-btn">Sign up</router-link>
                  </div>
                  <div class="sidebar__menu d-xl-none">
                     <div @click="handleSidebar" class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>

<!-- sidebar area start -->
  <div :class="`${showSidebar ? 'sidebar__area sidebar-opened' : 'sidebar__area'}`">
      <div class="sidebar__wrapper">
        <div @click="handleSidebarClose" class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
            <span><i class="fal fa-times"></i></span>
            <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
              <router-link to="/">
              <img src="../../assets/img/logo/logo.png" alt="logo">
              </router-link>
            </div>

             <div class="side-info-content sidebar-menu mm-menu">

                <ul>
                  <li class="menu-item-has-children has-droupdown"
                  v-bind:class="[menuOption.homeDropdown === true ? 'active' : '']">
                      <a @click="menuOption.homeDropdown = !menuOption.homeDropdown">Home</a >
                      <ul class="sub-menu" :class="[menuOption.homeDropdown === true ? 'active' : '',]">
                        <li>
                            <router-link to="/home">Home Style 1</router-link>
                        </li>
                        <li>
                            <router-link to="/home-two">Home Style 2</router-link>
                        </li>
                        <li>
                            <router-link to="/home-three">Home Style 3</router-link>
                        </li>
                      </ul>
                  </li>


                    <li class="menu-item-has-children has-droupdown"
                      :class="[menuOption.coursesDropdown === true ? 'active' : '',]">
                        <a @click="menuOption.coursesDropdown = !menuOption.coursesDropdown">Courses</a>
                        <ul class="sub-menu" :class="[menuOption.coursesDropdown === true ? 'active' : '',]">
                              <li>
                                <router-link to="/courses">Courses</router-link>
                              </li>
                              <li>
                                <router-link to="/courses-list">Course List</router-link>
                              </li>
                              <li>
                                <router-link to="/courses-sidebar">Course sidebar
                                </router-link>
                              </li>
                              <li>
                                <router-link to="/course-details">Course Details
                                </router-link>
                              </li>
                        </ul>
                      </li>

                  <li class="menu-item-has-children has-droupdown"
                    :class="[menuOption.blogDropdown === true ? 'active' : '']">

                    <a v-on:click="menuOption.blogDropdown = !menuOption.blogDropdown">Blog</a>
                    <ul class="sub-menu"
                      :class="[menuOption.blogDropdown === true ? 'active' : '',]">
                      <li>
                          <router-link to="/blog">Blog</router-link>
                      </li>
                      <li>
                          <router-link to="/blog-details">Blog Details</router-link>
                      </li>
                    </ul>
                  </li>


                  <li class="menu-item-has-children has-droupdown"
                  :class="[menuOption.pagesDropDown === true ? 'active' : '',]">
                      <a @click="menuOption.pagesDropDown = !menuOption.pagesDropDown">Pages</a>
                      <ul class="sub-menu"
                      :class="[menuOption.pagesDropDown === true ? 'active' : '',]">
                            <li><router-link to="/about">About</router-link></li>
                            <li><router-link to="/instructor">Instructor</router-link></li>
                            <li>
                            <router-link to="/instructor-details">
                            Instructor Details</router-link>
                            </li>
                            <li><router-link to="/event-details">Event Details</router-link></li>
                            <li><router-link to="/cart">My Cart</router-link></li>
                            <li><router-link to="/checkout">Checkout</router-link></li>
                            <li><router-link to="/login">Sign In</router-link></li>
                            <li><router-link to="/register">Sign Up</router-link></li>
                            <li><router-link to="/errorPage">Error</router-link></li>
                      </ul>
                  </li>

                  <li>
                      <router-link to="/contact" class="border-0">Contact</router-link>
                  </li>

              </ul>
            </div>

            <div class="sidebar__search p-relative mt-40 ">
              <form action="#">
                  <input type="text" placeholder="Search...">
                  <button type="submit"><i class="fad fa-search"></i></button>
              </form>
            </div>
            <div class="sidebar__cart mt-30">
              <a href="#">
                  <div class="header__cart-icon">
                    <svg viewBox="0 0 24 24">
                        <circle class="st0" cx="9" cy="21" r="1"/>
                        <circle class="st0" cx="20" cy="21" r="1"/>
                        <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                    </svg>
                  </div>
                  <span class="cart-item">2</span>
              </a>
            </div>
        </div>
      </div>
  </div>
  <div @click="handleSidebarClose" :class="[showSidebar ? 'body-overlay opened' : 'body-overlay']"></div>
  <!-- sidebar area end -->
</template>

<script>
export default {
   name:'HomeTwoHeader',
   data () {
    return {
      isSticky:false,
      showSidebar:false,
      menuOption: {
      menuShow: false,
      menuSearch: false,
      homeDropdown: false,
      coursesDropdown: false,
      pagesDropDown: false,
      blogDropdown: false,
      aboutDropdown: false,
   },
    }
  },
  props:{
    headerShadow:String,
  },
  methods:{
      handleSticky () {
          if(window.scrollY > 80){
             this.isSticky = true;
          }
          else{
             this.isSticky = false;
          }
       },

       handleSidebar () {
         this.showSidebar = true;
       },
       handleSidebarClose () {
         this.showSidebar = false;
       },
  },
  mounted() {
      window.addEventListener('scroll',this.handleSticky)
   },
};
</script>
