<template>
    <div id="sideBarWrapper" class="relative z-50" :class="{ 'hidden': !toggleSideBar }">
        <div id="sideBarBackdrop" class="fixed inset-0 bg-gray-950 opacity-80"></div>
        <div class="flex fixed inset-0" @click="emit('closeSideBar')">
            <div class="relative mr-8 flex w-100 max-w-xs flex-1 translate-x-0" >
                <div class="flex flex-1 overflow-y-auto bg-white">
                    <ul class="w-full text-sm uppercase text-gray-700" @click.stop>
                        <li>
                            <a href="#" @click="emit('closeSideBar')">
                                <div class="flex flex-row w-full bg-yellow-500 gap-x-2 items-center justify-center py-4">
                                    <span>Close</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" @click="emit('closeSideBar')">
                                <div class="w-full p-4 border-b">
                                    Home
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" @click="emit('closeSideBar')">
                                <div class="w-full p-4 border-b">
                                    Account
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown" @click="toggleProfileDropdown = !toggleProfileDropdown">
                                <div class="flex justify-between items-center w-full p-4 border-b">
                                    Profile 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="{ 'rotate-180': toggleProfileDropdown }">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <ul id="profileSubMenu" v-if="toggleProfileDropdown">
                                    <li>
                                        <a href="#" @click="emit('closeSideBar')">
                                            <div class="w-full p-4 border-b normal-case">As a Buyer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="emit('closeSideBar')">
                                            <div class="w-full p-4 border-b normal-case">As a Seller</div>
                                        </a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <li>
                            <a href="#" @click="emit('closeSideBar')">
                                <div class="w-full p-4 border-b">
                                    Shop
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const toggleProfileDropdown = ref(false)

const props = defineProps({
    toggleSideBar: false
})

const emit = defineEmits(['closeSideBar'])


</script>