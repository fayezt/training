<template>

  <div class="course__sidebar  p-relative">
    <div class="course__shape">
      <img class="course-dot" src="../../assets/img/course/course-dot.png" alt="">
    </div>
    <div class="course__sidebar-widget-2 white-bg mb-20">
      <div class="course__video">
        <div class="course__title text-center">
          <h4>Appointments</h4>
        </div>
        <template v-if="!user">
          <div class="text-center">
           <router-link class="btn btn-primary btn-lg" to="/login">Sign In To Booking</router-link>
          </div>
        </template>
        <template v-else>
            <h4 class="text-danger text-center" v-if="course.is_booking">
             Sorry You Have Already Booking
            </h4>
            <AppointmentItem v-else-if="appointments.length!==0 "  v-for="appointment in appointments" :appointment="appointment" />
            <h4 class="text-danger text-center" v-else>
              Sorry No Available Booking
            </h4>
        </template>
      </div>
    </div>
  </div>
 </template>

<script>
import AppointmentItem from "./AppointmentItem.vue";
import {mapGetters, mapState} from "vuex";
export default {
name: "Appointments",
  components: {AppointmentItem},
  props:['course'],
  computed:{
    ...mapState('auth',[
      'user'
    ])
  },
  data() {
    return {
      appointments:this.course.appointments??[],
    }
  }
}
</script>

<style scoped>

</style>