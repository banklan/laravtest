<template>
    <nav>
        <v-app-bar flat dark class="primary white--text">
            <span class="hidden-md-and-up">
                <v-app-bar-nav-icon class="white--text hidden-md-and-up" @click="navDrawer = true"></v-app-bar-nav-icon>
            </span>
            <v-toolbar-title class="ml-5 my-2 primary--text hidden-sm-and-down">
                <router-link to="/" style="cursor:pointer" exact>
                    <span>
                        LaravTest
                    </span>
                </router-link>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down align-center">
                <v-btn class="white--text" text v-for="menu in menus" :key="menu.title">
                    <router-link class="white--text" :to="menu.path">{{ menu.title }}</router-link>
                </v-btn>
            </v-toolbar-items>
        </v-app-bar>
        <v-navigation-drawer v-model="navDrawer" absolute hide-overlay color="primary white--text" class="" disable-resize-watcher>
            <v-toolbar-title class="primary--text ml-4 mt-3 pb-4">
                <router-link to="/" style="cursor: pointer" exact>
                    <span>Laravtest</span>
                </router-link>
            </v-toolbar-title>
            <v-divider></v-divider>
            <v-list class="mt-7">
                <v-list-item dark class="primary--text" v-for="item in menus" :key="item.title" link :to="item.path" exact>
                    <v-list-item-content class="pl-5">
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
    </nav>
</template>

<script>
export default {
    data(){
        return{
            menus: [
                {title: 'Home', path: '/'},
                {title: 'Our Service', path: '/our-services'},
                {title: "About Us", path: "/about-us"},
                {title: "Contact Us", path: "/contact-us"},
                {title: "Login", path: "/login"},
            ],
            navDrawer: false,
            bg: ''
        }
    },
    computed: {

    },
    methods: {

    },
    mounted() {

        console.log('loaded nabvar')
    },
}
</script>

