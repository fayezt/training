import axios from '../../http'
import co from "bootstrap-vue-3";

export const state = () => ({
    courses: [],
    page:1,
    course:{},
})

export const getters = {
    courses: state => state.courses,
    page: state => state.page,
    course: state => state.course,
}

export const mutations = {
    get_courses_success(state, courses) {
        state.status = 'success'
        state.courses = courses
    },
    get_course_success(state, course) {
        state.status = 'success'
        state.course = course
    },
    get_courses_failed(state) {
        state.status = 'failed'
        state.courses = []
    },
    get_course_failed(state) {
        state.status = 'failed'
        state.course = {}
    },
}

export const actions = {
    getCourses({ commit, state },payload) {
        let page=payload.page??1;
        return new Promise((resolve, reject) => {
            let url=`api/v1/course?page=${page}`;
            if(payload.start && payload.end)
                url=`api/v1/course?page=${page}&start=${payload.start}&end=${payload.end}`;
            axios.get(url)
                .then(resp => {
                    const courses = resp.data.data.items
                    commit('get_courses_success', courses)
                    resolve(resp)
                })
                .catch(err => {
                    commit('get_courses_failed')
                    reject(err)
                })
        })
    },
    setPage({ commit, dispatch },page) {
        dispatch('getCourses',page);
        return page;
    },
    getCourseById({ commit, state,rootState },id) {
        let token=rootState.auth.token
        let config = token?{
            headers: {
                Authorization: `Bearer ${token}`
            }
        }:{}
        return new Promise((resolve, reject) => {
            axios.get(`api/v1/course/${id}`,config)
                .then(resp => {
                    const course = resp.data.data
                    commit('get_course_success', course)
                    resolve(course)
                })
                .catch(err => {
                    commit('get_course_failed')
                    reject(err)
                })
        })
    },
    bookingAppointment({ commit, state,rootState },id) {

        return new Promise((resolve, reject) => {
            let token=rootState.auth.token
            let config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            }
            console.log(config);
            axios.post(`customer/api/v1/course/appointment/${id}`,{},config)
                .then(resp => {
                    const message = resp.data.message
                    resolve(message)
                })
                .catch(err => {
                    console.log(err.response.status);
                    if(err.response.status===401)
                        commit('auth/auth_error', null, { root: true })

                    reject(err)
                })
        })
    },
    getRelatedCourse({ commit, state },id) {
        return new Promise((resolve, reject) => {
            axios.get(`api/v1/course/${id}/related`)
                .then(resp => {
                    const related = resp.data.data
                    resolve(related)
                })
                .catch(err => {
                    reject(err)
                })
        })
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters
}
