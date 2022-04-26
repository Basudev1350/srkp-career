import userDashboard from './components/user/userDashboard'

export default{   
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [ 

                    {
                        path: '/user-dashboard',
                        component: userDashboard,
                        name: 'user-dashboard'
                    },
    ]
}