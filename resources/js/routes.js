import NotFound from './components/NotFound';
import Welcome from './components/Welcome';
import OurServices from './components/OurServices';
import AboutUs from './components/AboutUs';
import ContactUs from './components/ContactUs';
import Login from './components/Login';



export default [
    { path: '/', name: 'Welcome', component: Welcome },
    { path: '/our-services', name: 'OurServices', component: OurServices },
    { path: '/about-us', name: 'AboutUs', component: AboutUs },
    { path: '/contact-us', name: 'ContactUs', component: ContactUs },
    { path: '/login', name: 'StaffLogin', component: Login },
    {path: '*', name: 'NotFound', component: NotFound},
]
