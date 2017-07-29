
require('./bootstrap');

/* Common */
const Page = Vue.component('page', require('./components/common/Page.vue'));
const ThemeHeader = Vue.component('themeHeader', require('./components/common/Header.vue'));
const ThemeFooter = Vue.component('themeFooter', require('./components/common/Footer.vue'));
const ThemeSidebar = Vue.component('themeSidebar', require('./components/common/Sidebar.vue'));
const Breadcrumbs = Vue.component('breadcrumbs', require('./components/common/Breadcrumbs.vue'));
const Notification = Vue.component('notification', require('./components/common/Notification.vue'));
const Announcement = Vue.component('announcement', require('./components/common/Announcement.vue'));

const Dashboard = Vue.component('dashboard', require('./components/dashboard/Dashboard.vue'));
const UserProfile = Vue.component('userprofile', require('./components/member/UserProfile.vue'));

/**
 * Govhack
 */
const Introduction = Vue.component('introduction', require('./components/govhack/Introduction.vue'));
const Population = Vue.component('population', require('./components/govhack/Population.vue'));
const AddressToLatLng = Vue.component('addresstolatlng', require('./components/govhack/AddressToLatLng.vue'));

export const Routes = [
    {
        path: '/',
        components: { default: Page, header: ThemeHeader, sidebar: ThemeSidebar, footer: ThemeFooter },
        children: [
            { path: '/', component: Introduction },
            { path: '/notifications', component: Notification },
            { path: '/dashboard', component: Dashboard },
            { path: '/myaccount/userprofile', component: UserProfile },
            /* Govhack */
            { path: '/govhack/population', component: Population },
            { path: '/govhack/address-to-latlng', component: AddressToLatLng },
        ]
    }
]
