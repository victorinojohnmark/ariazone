<template>
    <div id="mainWrapper">
        <TopBar/>
        <router-view />
        <Footer/>
    </div>
</template>

<script setup>
import TopBar from './components/TopBar.vue';
import Footer from './components/Footer.vue';
</script>