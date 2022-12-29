export default function auth({next,store}){
    let isLoggedIn=localStorage.getItem('token')
    if(!isLoggedIn){
        return next({
            name:'login'
        })
    }

    return next()
}