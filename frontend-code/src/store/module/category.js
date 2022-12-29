import axios from '../../http'

export const state = () => ({
    categories: [],
})

export const getters = {
    categories: state => state.categories,
}

export const mutations = {
    get_categories_success(state, categories) {
        state.status = 'success'
        state.categories = categories
    },
    get_categories_failed(state) {
        state.status = 'failed'
        state.categories = []
    },
}

export const actions = {
    getCategories({ commit, state }) {
        return new Promise((resolve, reject) => {
            axios.get('api/v1/category')
                .then(resp => {
                    const categories = resp.data.data
                    commit('get_categories_success', categories)
                    resolve(resp)
                })
                .catch(err => {
                    commit('get_categories_failed')
                    reject(err)
                })
        })
    },
}

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters
}
