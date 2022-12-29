<template>
  <div class="mb-50 d-flex align-items-center pointer_hover scale_minimize_hover"
       v-on:click="openAppointmentModal(appointment.id)">
    <DateCard :date="appointment.start"/>
    <h2><i class="fa fa-arrow-alt-right px-4"></i></h2>
    <DateCard :date="appointment.end"/>
  </div>
  <b-modal :title="course.name" @ok="submit()" centered v-model="modalShow">
    <div class="d-flex align-items-center">
      <div class="course__video-icon">
        <i class="fa fa-user text-primary fa-4x mr-30"></i>
      </div>
      <div class="course__video-info">
        <h5><span>Available :</span>{{ appointment.available }} students</h5>
      </div>
    </div>
  </b-modal>
</template>

<script>
import DateCard from "../DateCard.vue";
import {mapActions, mapGetters, mapState} from "vuex";
import {useToast} from "vue-toastification";

export default {

  name: "AppointmentItem",
  components: {DateCard},
  props: ['appointment'],
  setup() {
    // Get toast interface
    const toast = useToast();
    // Make it available inside methods
    return {toast}
  },
  computed: {
    ...mapState('course', [
      'course'
    ])
  },
  data() {
    return {
      modalShow: false,
      appointment_id: null
    }
  }, methods: {
    ...mapActions('course', [
      'bookingAppointment'
    ]),
    openAppointmentModal(id) {
      this.appointment_id = id;
      this.modalShow = true;
    }, async submit() {
      let message = await this.bookingAppointment(this.appointment_id)
      useToast().success("Successfully Booking , We Will Redirect To Home After 5 Second!", {timeout: 5000})
      let self = this;
      setTimeout(function () {
        self.$router.push({name: 'home'});
      }, 5000)
    }
  }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');


.calendar {
  position: relative;
  width: 260px;
}

/*.calendar:before{*/
/*  content: '';*/
/*  position: absolute;*/
/*  width: 80px;*/
/*  height: 80px;*/
/*  box-shadow: 206px 208px #ffc300, -35px 70px #FF5733;*/
/*  border-radius: 50%;*/
/*}*/

.calendar .calendar-body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: rgb(0 0 0 / 44%);
  backdrop-filter: blur(15px);
  border-bottom: 6px solid #4285F4;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  box-shadow: 0 5px 25px rgb(1 1 1 / 15%);
}

.calendar .calendar-body .month-name {
  color: #fff;
  background: #4285F4;
  width: 100%;
  font-size: 1.6em;
  text-align: center;
  font-weight: 400;
  padding: 5px 0;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
}

.calendar .calendar-body .day-name {
  color: #fff;
  font-size: 1.2em;
  font-weight: 400;
  margin-top: 20px;
}

.calendar .calendar-body .date-number {
  color: #fff;
  font-size: 6em;
  font-weight: 600;
  line-height: 1.2em;
}

.calendar .calendar-body .year {
  color: #fff;
  font-size: 1.2em;
  font-weight: 400;
  margin-bottom: 20px;
}

</style>