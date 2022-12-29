<template>
<section class="signup__area po-rel-z1 pt-100 pb-145">
   <div class="sign__shape">
      <img class="man-1" src="../../assets/img/icon/sign/man-1.png" alt="">
      <img class="man-2" src="../../assets/img/icon/sign/man-2.png" alt="">
      <img class="circle" src="../../assets/img/icon/sign/circle.png" alt="">
      <img class="zigzag" src="../../assets/img/icon/sign/zigzag.png" alt="">
      <img class="dot" src="../../assets/img/icon/sign/dot.png" alt="">
      <img class="bg" src="../../assets/img/icon/sign/sign-up.png" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
            <div class="section__title-wrapper text-center mb-55">

               <h2 class="section__title">Sign in to <br>  recharge direct.</h2>
               <p>it you don't have an account you can <a href="#">Register here!</a></p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <div class="sign__wrapper white-bg">

               <div class="sign__header mb-35">

                  <div class="sign__in text-center">
<!--                     <a href="#" class="sign__social text-start mb-15">-->
<!--                        <i class="fab fa-facebook-f"></i>Sign in with Facebook</a>-->
                     <p> <span>........</span>

                     <router-link to="/login">sign in</router-link> 
                     with your email<span> ........</span> </p>
                  </div>
               </div>
               <div class="sign__form">
                     <div class="sign__input-wrapper mb-25">
                        <h5>Work email</h5>
                        <div class="sign__input">
                           <input v-model="email" type="text" placeholder="e-mail address">
                           <i class="fal fa-envelope"></i>
                        </div>
                     </div>
                     <div class="sign__input-wrapper mb-10">
                        <h5>Password</h5>
                        <div class="sign__input">
                           <input v-model="password" type="text" placeholder="Password">
                           <i class="fal fa-lock"></i>
                        </div>
                     </div>
                 <div class="col-md-12">
                   <div class="col-md-12" v-if="failed">
                     <div class="alert alert-danger">
                       <strong v-text="message"></strong>
                       <br>
                       <ul>
                         <li v-for="(errors_data,key) in errors">
                           {{key}}:
                           <ol>
                             <li v-for="error in errors_data">{{error}}</li>
                           </ol>
                         </li>
                       </ul>
                     </div>
                   </div>
                 </div>
                     <div class="sign__action d-sm-flex justify-content-between mb-30">
                        <div class="sign__agree d-flex align-items-center">
                           <input class="m-check-input" type="checkbox" id="m-agree">
                           <label class="m-check-label" for="m-agree">Keep me signed in
                              </label>
                        </div>
<!--                        <div class="sign__forgot">-->
<!--                           <a href="#">Forgot your password?</a>-->
<!--                        </div>-->
                     </div>
                     <button v-on:click="onSubmitHandler" class="e-btn  w-100"> <span></span> Sign In</button>
                     <div class="sign__new text-center mt-20">
                        <p>New to Educal? <router-link to="/register">Sign Up</router-link></p>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  computed:{
    ...mapGetters('auth',[
        'authStatus','isLoggedIn'
    ])
  },
   name:'LoginArea',
    data() {
      return {
        email:'',
        password:'',
        errors: [],
        message: null,
        failed:false
      }
    },
  methods:{
    onSubmitHandler(form) {
      this.errors = []
      this.message = null
      this.failed = false
      form={email:this.email,password:this.password}
      this.$store.dispatch('auth/login',form).then(res=>{
        this.$router.push({name:'home'});
      })
          .catch(error => {
            let { response } = error
            let { data } = response
            let { errors, message } = data
            this.errors = errors??[]
            this.failed=true
            this.message = message
          })
    }
  },
  created() {
    this.$store.dispatch('auth/getUser').catch(() => {})
  }
};
</script>

