import { createWebHistory,createRouter } from "vue-router";
import Home from '../pages/Home.vue';
// import HomeTwo from '../pages/HomeTwo.vue';
// import HomeThree from '../pages/HomeThree.vue';
import Courses from '../pages/Courses.vue';
// import CoursesList from '../pages/CoursesList.vue';
// import CourseSidebar from '../pages/CourseSidebar.vue';
import CourseDetails from '../pages/CourseDetails.vue';
// import Blog from '../pages/Blog.vue';
// import BlogDetails from '../pages/BlogDetails.vue';
// import About from '../pages/About.vue';
// import Instructor from '../pages/Instructor.vue';
// import InstructorDetails from '../pages/InstructorDetails.vue';
// import Booking from '../pages/Booking.vue';
// import EventDetails from '../pages/EventDetails.vue';
// import Cart from '../pages/Cart.vue';
// import Checkout from '../pages/Checkout.vue';
import SignIn from '../pages/SignIn.vue';
import SignUp from '../pages/SignUp.vue';
// import ErrorPage from '../pages/ErrorPage.vue';
import Contact from '../pages/Contact.vue';
import CourseDetailsPage from '../pages/DynamicCourseDetails.vue';
// import DynamicBlogDetails from '../pages/DynamicBlogDetails.vue';
import middlewarePipeline from "../middleware/middleware-pipeline";
import guest from "../middleware/guest";

const router = createRouter({
  history: createWebHistory(),
  routes:[
    {
      path:'/',
      component:Home,
    },
    // {
    //   path:'/home',
    //   component:Home,
    //   name:'home'
    // },
    // {
    //   path:'/home-two',
    //   component:HomeTwo,
    // },
    // {
    //   path:'/home-three',
    //   component:HomeThree,
    // },
    {
      path:'/courses',
      component:Courses,
    },
    // {
    //   path:'/courses-list',
    //   component:CoursesList,
    // },
    // {
    //   path:'/courses-sidebar',
    //   component:CourseSidebar,
    // },
    {
      path:'/course-details',
      component:CourseDetails,
    },
    // {
    //   path:'/blog',
    //   component:Blog,
    // },
    // {
    //   path:'/blog-details',
    //   component:BlogDetails,
    // },
    // {
    //   path:'/about',
    //   component:About,
    // },
    // {
    //   path:'/instructor',
    //   component:Instructor,
    // },
    // {
    //   path:'/instructor-details',
    //   component:InstructorDetails,
    // },
    // {
    //   path:'/event-details',
    //   component:EventDetails,
    // },
    // {
    //   path:'/cart',
    //   component:Cart,
    // },
    // {
    //   path:'/checkout',
    //   component:Checkout,
    // },
    {
      path:'/login',
      component:SignIn,
      name:'login',
      meta:{
        middleware: [
           guest
        ]
      }
    },
    {
      path:'/register',
      component:SignUp,
    },
    // {
    //   path:'/errorPage',
    //   component:ErrorPage,
    // },
    {
      path:'/contact',
      component:Contact,
    },
    {
      path:'/course-details/:id',
      component:CourseDetailsPage,
    },
    // {
    //   path:'/booking/:id',
    //   component:Booking,
    //   name:'booking'
    // },
    // {
    //   path:'/blog-details/:id',
    //   component:DynamicBlogDetails,
    // },
  ]
})

router.beforeEach((to, from, next) => {

  /** Navigate to next if middleware is not applied */
  if (!to.meta.middleware) {
    return next()
  }

  const middleware = to.meta.middleware;
  const context = {
    to,
    from,
    next,
    //   store  | You can also pass store as an argument
  }

  return middleware[0]({
    ...context,
    next:middlewarePipeline(context, middleware,1)
  })
})

export default router