<template>
    <div class="w-full bg-gray-800 mt-auto">
        <div class="container flex flex-col sm:flex-row gap-x-4 pt-8 px-4 md:px-0 mx-auto">
            <div class="w-full mb-4">
                <h5 class="uppercase text-lg font-medium text-white mb-4">Useful Links</h5>
                <ul class="mb-4 text-sm text-white">
                    <li class="mb-2"><a href="#" class="hover:text-yellow-400">About Us</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-yellow-400">Frequently Asked Questions</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-yellow-400">Terms of Use</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-yellow-400">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="w-full mb-4 text-white">
                <h5 class="uppercase text-lg font-medium mb-4">Contact Us</h5>
                <ul class="mb-4 text-sm">
                    <li class="mb-2 flex flex-row gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Warsaw, 00-967, Poland
                        <i class="fa fas-user"></i>
                    </li>
                    <li class="mb-2 flex flex-row gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        contact@example.com
                    </li>

                    <li class="mb-2 flex flex-row gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        + 48 234 567 88
                    </li>
                </ul>
            </div>

            <div class="w-full mb-4 text-white">
                <h5 class="uppercase text-lg font-medium mb-4">Follow Us</h5>
                <ul class="mb-4 text-sm inline-flex gap-x-2">
                    <button class="flex items-center justify-center bg-blue-400 h-8 w-8 rounded"><i class="fa-brands fa-facebook-f"></i></button>
                    <button class="flex items-center justify-center bg-blue-300 h-8 w-8 rounded"><i class="fa-brands fa-twitter"></i></button>
                    <button class="flex items-center justify-center bg-red-500 h-8 w-8 rounded"><i class="fa-brands fa-google"></i></button>
                    <button class="flex items-center justify-center bg-purple-600 h-8 w-8 rounded"><i class="fa-brands fa-instagram"></i></button>
                </ul>
            </div>
        </div>
        <div class="w-full bg-gray-900">
            <div class="container text-gray-600 text-center py-2">
                <small class=" text-xs">© 2021 Copyright:</small>
            </div>
        </div>
    </div>
</template>