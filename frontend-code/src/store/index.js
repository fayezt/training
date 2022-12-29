// import Vue from 'vue'
import Vuex from 'vuex'

// Vue.use(Vuex)

export const state = () => ({

})

export const getters = {

}
import auth from './auth'
import category from './module/category'
import course from './module/course'
// import course from './auth'


export const createStore = () => {
  return new Vuex.Store({
    state,
    getters,
    mutations: {},
    actions: {},
    modules: {
      auth,
      category,
      course
    },
  })
}

const store = createStore()
export default store
