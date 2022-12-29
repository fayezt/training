export default function guest({next}){
    let isLoggedIn=localStorage.getItem('token')
    if(isLoggedIn){
        return next({
            name: 'home'
        })
    }

    return next();
}