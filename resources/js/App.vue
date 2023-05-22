<template>
    <div id="mainWrapper">
        <TopBar/>
        <router-view />
    </div>
</template>

<script setup>
import TopBar from './components/TopBar.vue';
</script>