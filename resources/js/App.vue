<template>
    <div id="mainWrapper" class="flex-grow">
        <TopBar @toggleSidebBarMenu="toggleSideBar = true"/>
        <SideBar :toggleSideBar="toggleSideBar" @closeSideBar="toggleSideBar = false"/>
        <router-view />
    </div>
    <Footer/>
</template>

<script setup>
import { ref } from 'vue'
import TopBar from './components/TopBar.vue';
import SideBar from './components/SideBar.vue';
import Footer from './components/Footer.vue';

const toggleSideBar = ref(false)

</script>