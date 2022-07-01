<template>
    <v-app>
        <Navbar />
        <!-- <transition mode="out-in" enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut"> -->
            <router-view></router-view>
        <!-- </transition> -->
    </v-app>
</template>

<script>
import Navbar from './includes/Navbar';
export default {
    components: {
        Navbar
    },
}
</script>
