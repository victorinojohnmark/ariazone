<template>
    <div id="topBarWrapper" class="bg-cyan-950 min-w-full">
        <div class="border-b border-gray-700">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div id="needHelp" class="p-2">
                        <p class="text-white text-sm">Need Help? 001 123 456 789</p>
                    </div>
                    <div id="mainMenu" class="py-2 hidden md:flex">
                        <ul class="inline-flex text-white text-sm leading-3 text-right">
                            <li class="px-4 border-r border-gray-500 hover:text-yellow-400"><a href="#">Home</a></li>
                            <li class="px-4 border-r border-gray-500 hover:text-yellow-400"><a href="#">Account</a></li>
                            <li class="px-4 border-r border-gray-500 hover:text-yellow-400"><a href="#">Profile</a></li>
                            <li class="pl-4 border-gray-500 hover:text-yellow-400"><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-b border-gray-200">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div id="brand" class="inline-flex py-2 items-center gap-x-2">
                        <a href="#">
                            <img class="w-48" src="/img/logo1.png" alt="Ariazone Logo">
                        </a>
                        <Bars3Icon class="w-6 h-6 text-white hover:text-yellow-400 cursor-pointer" @click="emit('toggleSidebBarMenu')"/>
                    </div>
                    <div id="rightMenu" class="flex p-2 ">
                        <div class="inline-flex gap-x-4">
                            <a href="#" class="text-sm text-white hover:text-yellow-400 inline-flex gap-x-1 items-center">
                                <UserPlusIcon class="w-6 h-6 hidden md:flex" />
                                Register
                            </a>

                            <a href="#" class="text-sm text-white hover:text-yellow-400 inline-flex gap-x-1 items-center">
                                <ArrowLeftOnRectangleIcon class="w-6 h-6 hidden md:flex" />
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Bars3Icon, UserPlusIcon, ArrowLeftOnRectangleIcon} from '@heroicons/vue/24/outline'

const emit = defineEmits(['toggleSidebBarMenu'])
</script>