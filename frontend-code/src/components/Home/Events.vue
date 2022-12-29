<template>
<section class="events__area pt-115 pb-120 p-relative">
   <div class="events__shape">
      <img class="events-1-shape" src="../../assets/img/events/events-shape.png" alt="">
    </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-4 offset-xxl-4">
               <div class="section__title-wrapper mb-60 text-center">
                  <h2 class="section__title">Current <span class="yellow-bg yellow-bg-big">Events<img src="../../assets/img/shape/yellow-bg.png" alt=""></span></h2>
                  <p>We found 13 events available for you.</p>
               </div>
            </div>
         </div>
         <div class="row">

            <div v-for="event in EventData" :key="event.id" class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
               <div class="events__item mb-10 hover__active">
                  <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                     <div class="events__content">
                        <div class="events__meta">
                           <span>{{event.date}}</span>
                           <span>{{event.time}}</span>
                           <span>{{event.city}}</span>
                        </div>
                        <h3 class="events__title">
                           <router-link to="/event-details">{{event.title}}</router-link>
                        </h3>
                     </div>
                     <div class="events__more">
                        <router-link to="/event-details" class="link-btn">
                           View More
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </router-link>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
</template>

<script>
export default {
   name:'EventArea',
   data () {
      return {
         EventData:[
            {
               id:1,
               title:'Digital transformation conference',
               date:'Jun 14, 2022',
               time:'12:00 am - 2:30 pm',
               city:'New York'
            },
            {
               id:2,
               title:'World education day conference',
               date:'April 10, 2022',
               time:'9:00 am - 5:00 pm',
               city:'Mindahan'
            },
            {
               id:3,
               title:'Foundations of global health',
               date:'July 16, 2022',
               time:'10:30 am - 1:30 pm',
               city:'Weedpatch'
            },
            {
               id:4,
               title:'Business creativity workshops',
               date:'March 24, 2022',
               time:'10:30 am - 12:00 pm',
               city:'Lnland'
            },
         ]
      }
   }
};
</script>
