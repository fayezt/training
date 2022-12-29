<template>
  <div class="calendar">
    <div class="calendar-body">
      <span class="month-name" v-text="month"></span>
      <span class="day-name" v-text="day"></span>
      <span class="date-number" v-text="day_month"></span>
      <span class="year" v-text="year"></span>
    </div>
  </div>
</template>

<script>
export default {
  // 'Tue Dec 27 2022'
  name: "DateCard",
  props:['date'],
  created() {
    // console.log(this.date);
    this.formatData=(new Date(this.date).toDateString()).split(' ')
  },
  data() {
    return {
      formatData:null,
    }
  },computed:{
    day(){return this.formatData[0]},
    month(){return this.formatData[1]},
    day_month(){return this.formatData[2]},
    year(){return this.formatData[3]},
  }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

.calendar{
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

.calendar .calendar-body{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: rgb(0 0 0 / 44%);  backdrop-filter: blur(15px);
  border-bottom: 6px solid #4285F4;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  box-shadow: 0 5px 25px rgb(1 1 1 / 15%);
}

.calendar .calendar-body .month-name{
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

.calendar .calendar-body .day-name{
  color: #fff;
  font-size: 1.2em;
  font-weight: 400;
  /*margin-top: 20px;*/
}

.calendar .calendar-body .date-number{
  color: #fff;
  font-size: 2em;
  font-weight: 600;
  line-height: 1.2em;
}

.calendar .calendar-body .year{
  color: #fff;
  font-size: 1.2em;
  font-weight: 400;
  /*margin-bottom: 20px;*/
}

</style>