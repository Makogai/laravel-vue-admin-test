<template>
    <div class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
        <div>
            <nav-bar v-if="id"></nav-bar>
            <!-- <nav-bar v-if="this.$route.name !== 'welcome'"></nav-bar> -->
        </div>
        <div class="flex flex-col md:flex-row">
            <side-nav v-if="id"></side-nav>
                <router-view class="" v-slot="{ Component }">
                    <transition name="fade" mode="out-in">
                        <component :is="Component" />
                    </transition>
                </router-view>
        </div>
    </div>
</template>

<script>
import NavBar from "./NavbarV2.vue";
import SideNav from "./SideNav.vue";
import VerifyNotice from "./VerifyNotice.vue";
export default {
    computed: {
        id() {
            return this.$store.getters.id;
        },
        verified() {
            return this.$store.getters.verified;
        },
    },
    components: {
        NavBar,
        SideNav,
        VerifyNotice,
    },
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
