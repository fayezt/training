<template>
  <header>
    <div id="header-sticky"
      :class="`${isSticky ? 'header__area header__transparent header__padding sticky'
      :'header__area header__transparent header__padding'} ${header__white && header__white}`"
    >
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
            <div class="header__left d-flex">
              <div class="logo align-items-center d-flex">
                <router-link to="/">
                  <img v-if="header__white && !isSticky" 
                  src="../../assets/img/logo/logo-2.png" alt="logo" />
                  
                  <img v-else src="../../assets/img/logo/logo.png"  alt="logo" />
                </router-link>
              </div>
              <div class="header__category d-none d-lg-block">
                <nav class="main-menu ">
                  <ul>
                    <li><router-link to="/courses">Course</router-link></li>
<!--                    <li>-->
<!--                      <router-link-->
<!--                        to="/courses"-->
<!--                        class="cat-menu d-flex align-items-center"-->
<!--                      >-->
<!--                        <div class="cat-dot-icon d-inline-block">-->
<!--                          <svg viewBox="0 0 276.2 276.2">-->
<!--                            <g>-->
<!--                              <g>-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"-->
<!--                                />-->
<!--                                <path-->
<!--                                  class="cat-dot"-->
<!--                                  d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"-->
<!--                                />-->
<!--                              </g>-->
<!--                            </g>-->
<!--                          </svg>-->
<!--                        </div>-->
<!--                        <span>Category</span>-->
<!--                      </router-link>-->
<!--                      <ul class="cat-submenu">-->
<!--                        <li>-->
<!--                          <router-link to="/course-details">English Learning</router-link>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <router-link to="/course-details">Web Development</router-link>-->
<!--                        </li>-->
<!--                        <li><router-link to="/course-details">Logo Design</router-link></li>-->
<!--                        <li>-->
<!--                          <router-link to="/course-details">Motion Graphics</router-link>-->
<!--                        </li>-->
<!--                        <li><router-link to="/course-details">Video Edition</router-link></li>-->
<!--                      </ul>-->
<!--                    </li>-->
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
            <div
              class="
                header__right
                d-flex
                justify-content-between
                align-items-center
              "
            >
              <div :class="`main-menu ${header__white && 'main-menu-3'}`">
                <nav id="mobile-menu" class="d-none d-xl-block">
                  <ul>

<!--                    <li class="has-dropdown">-->
<!--                      <router-link to="/">Home</router-link>-->
<!--                      <ul class="submenu">-->
<!--                        <li><router-link to="/home">Home Style 1</router-link></li>-->
<!--                        <li><router-link to="/home-two">Home Style 2</router-link></li>-->
<!--                        <li><router-link to="/home-three">Home Style 3</router-link></li>-->
<!--                      </ul>-->
<!--                    </li>-->
<!--                    <li class="has-dropdown">-->
<!--                      <router-link to="/courses">Courses</router-link>-->
<!--                      <ul class="submenu">-->
<!--                        <li><router-link to="/courses">Courses</router-link></li>-->
<!--                        <li><router-link to="/courses-list">Course List</router-link></li>-->
<!--                        <li>-->
<!--                          <router-link to="/courses-sidebar">Course sidebar</router-link>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <router-link to="/course-details">Course Details</router-link>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                    </li>-->
<!--                    <li class="has-dropdown">-->
<!--                      <router-link to="/blog">Blog</router-link>-->
<!--                      <ul class="submenu">-->
<!--                        <li><router-link to="/blog">Blog</router-link></li>-->
<!--                        <li><router-link to="/blog-details">Blog Details</router-link></li>-->
<!--                      </ul>-->
<!--                    </li>-->
<!--                    <li class="has-dropdown">-->
<!--                      <router-link to="/courses">Pages</router-link>-->
<!--                      <ul class="submenu">-->
<!--                        <li><router-link to="/about">About</router-link></li>-->
<!--                        <li><router-link to="/instructor">Instructor</router-link></li>-->
<!--                        <li>-->
<!--                          <router-link to="/instructor-details">-->
<!--                          Instructor Details</router-link>-->
<!--                        </li>-->
<!--                        <li><router-link to="/event-details">Event Details</router-link></li>-->
<!--                        <li><router-link to="/cart">My Cart</router-link></li>-->
<!--                        <li><router-link to="/checkout">Checkout</router-link></li>-->
<!--                        <li><router-link to="/login">Sign In</router-link></li>-->
<!--                        <li><router-link to="/register">Sign Up</router-link></li>-->
<!--                        <li><router-link to="/errorPage">Error</router-link></li>-->
<!--                      </ul>-->
<!--                    </li>-->
<!--                    <li><router-link to="/contact">Contact</router-link></li>-->
                  </ul>
                </nav>
              </div>
              <div class="header__search p-relative ml-50 d-none d-md-block">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button type="submit"><i class="fad fa-search"></i></button>
                </form>
<!--                <div class="header__cart">-->
<!--                  <a @click="handleMiniCart" href="javascript:void(0);" class="cart-toggle-btn">-->
<!--                    <div class="header__cart-icon">-->
<!--                      <svg viewBox="0 0 24 24">-->
<!--                        <circle class="st0" cx="9" cy="21" r="1" />-->
<!--                        <circle class="st0" cx="20" cy="21" r="1" />-->
<!--                        <path-->
<!--                          class="st0"-->
<!--                          d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"-->
<!--                        />-->
<!--                      </svg>-->
<!--                    </div>-->
<!--                    <span class="cart-item">2</span>-->
<!--                  </a>-->
<!--                </div>-->
              </div>
              <h5 v-if="user">{{user.name}}</h5>
              <div v-if="user" class="header__btn ml-20 d-none d-sm-block">
                <button class="e-btn" v-on:click="logout()">Sign out</button>
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


  
<!-- cart mini area start -->
<div class="cartmini__area">
    <div :class="`${showMiniCart ? 'cartmini__wrapper opened' : 'cartmini__wrapper'}`">
      <div class="cartmini__title">
          <h4>Shopping cart</h4>
      </div>
      <div @click="handleCartClose" class="cartmini__close">
          <button type="button" class="cartmini__close-btn">
            <i class="fal fa-times"></i>
          </button>
      </div>
      <div class="cartmini__widget">
          <div class="cartmini__inner">
            <ul>
                <li>
                  <div class="cartmini__thumb">
                      <a href="#">
                        <img src="../../assets/img/course/sm/cart-1.jpg" alt="">
                      </a>
                  </div>
                  <div class="cartmini__content">
                      <h5><a href="#">Strategy law and organization Foundation </a></h5>
                      <div class="product-quantity mt-10 mb-10">
                        <span @click="handleDecreaseValue('valueOne')" class="cart-minus">-</span>
                        <input class="cart-input" type="text" v-model="value"/>
                        <span @click="handleIncreaseValue('valueOne')" 
                        class="cart-plus">+</span>
                      </div>
                      <div class="product__sm-price-wrapper">
                        <span class="product__sm-price">$46.00</span>
                      </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                </li>
                <li>
                  <div class="cartmini__thumb">
                      <a href="#">
                        <img src="../../assets/img/course/sm/cart-2.jpg" alt="">
                      </a>
                  </div>
                  <div class="cartmini__content">
                      <h5><a href="#">Fundamentals of music theory Learn new</a></h5>
                      <div class="product-quantity mt-10 mb-10">
                        <span @click="handleDecreaseValue('valueTwo')" class="cart-minus">-</span>
                        <input class="cart-input" type="text" v-model="valueTwo"/>
                        <span @click="handleIncreaseValue('valueTwo')" 
                        class="cart-plus">+</span>
                      </div>
                      <div class="product__sm-price-wrapper">
                        <span class="product__sm-price">$32.00</span>
                      </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                </li>
                <li>
                  <div class="cartmini__thumb">
                      <a href="#">
                        <img src="../../assets/img/course/sm/cart-3.jpg" alt="">
                      </a>
                  </div>
                  <div class="cartmini__content">
                      <h5><a href="#">Strategy law and organization Foundation </a></h5>
                      <div class="product-quantity mt-10 mb-10">
                        <span @click="handleDecreaseValue('valueThree')" class="cart-minus">-</span>
                        <input class="cart-input" type="text" v-model="valueThree"/>
                        <span @click="handleIncreaseValue('valueThree')" 
                        class="cart-plus">+</span>
                      </div>
                      <div class="product__sm-price-wrapper">
                        <span class="product__sm-price">$62.00</span>
                      </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                </li>
            </ul>
          </div>
          <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-30">
                <h4>Subtotal:</h4>
                <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
                <router-link to="/cart" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</router-link>
                <router-link to="/checkout" class="e-btn w-100"> <span></span> checkout</router-link>
            </div>
          </div>
      </div>
    </div>
</div>

<div @click="handleCartClose" :class="[showMiniCart ? 'body-overlay opened' : 'body-overlay']"></div>
<!-- cart mini area end -->

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
import {mapActions, mapState} from "vuex";

export default {
  computed:{
    ...mapState('auth',[
      'user'
    ])
  },
  name: "HomeHeader",
  props:{
    header__white:String,
  },
  data () {
    return {
      isSticky:false,
      showMiniCart:false,
      showSidebar:false,
      value:1,
      valueTwo:1,
      valueThree:1,
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
  methods:{
      ...mapActions('auth',['logout']),
      handleSticky () {
          if(window.scrollY > 80){
             this.isSticky = true;
          }
          else{
             this.isSticky = false;
          }
       },
       handleMiniCart () {
         this.showMiniCart = true;
       },
       handleCartClose () {
         this.showMiniCart = false;
       },
       handleSidebar () {
         this.showSidebar = true;
       },
       handleSidebarClose () {
         this.showSidebar = false;
       },
       handleIncreaseValue (value) {
         if(value === 'valueOne'){
           this.value++
         }
         if(value === 'valueTwo'){
           this.valueTwo++
         }
         if(value === 'valueThree'){
           this.valueThree++
         }
         
       },
       handleDecreaseValue (value) {
         if(value === 'valueOne' && this.value > 0){
           this.value--
         }
         if(value === 'valueTwo' && this.valueTwo > 0){
           this.valueTwo--
         }
         if(value === 'valueThree' && this.valueThree > 0){
           this.valueThree--
         }
       }
  },
  mounted() {
      window.addEventListener('scroll',this.handleSticky)
   },
};
</script>