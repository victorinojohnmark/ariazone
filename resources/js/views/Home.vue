<template>
    <main class="px-4">
        <section id="bannerWrapper">
            <div id="banner" class="container flex p-4 my-4 mb-10 mx-auto bg-searchBar bg-cover bg-no-repeat bg-center rounded-lg min-h-300">
                <div class="flex flex-col justify-center items-center flex-wrap px-8 md:px-0 my-0 mx-auto text-center">
                    <h1 class="my-4 text-white text-3xl text-shadow shadow-gray-600">Every kind of thing, for every kind of person</h1>
                    <div id="searchBar" class="flex flex-col md:inline-flex md:flex-row my-4 w-full rounded-md overflow-hidden">
                        <select name="categories" class="bg-white appearance-none focus:ring-0 ring-transparent p-4">
                            <option value="#">All Categories</option>
                            <option value="#">Properties</option>
                            <option value="#">Autos</option>
                            <option value="#">Gadgets</option>
                            <option value="#">Women's Fashion</option>
                            <option value="#">Men's Fashion</option>
                        </select>

                        <input type="text" name="search" class="flex-1 p-4 bg-white border-0" placeholder="Find anything ...">
                        <button type="submit" class="p-4 bg-yellow-400 text-white">Search</button>
                    </div>
                    <div id="trendingSearch">
                        <ul class="text-white text-center p-0 text-shadow-sm shadow-gray-600">
                            <li class="inline-flex">Trending Searches: </li>
                            <li class="inline-flex"><a href="#" class="hover:text-yellow-400 px-px">Laptop, </a></li>
                            <li class="inline-flex"><a href="#" class="hover:text-yellow-400 px-px">Dress, </a></li>
                            <li class="inline-flex"><a href="#" class="hover:text-yellow-400 px-px">iPad, </a></li>
                            <li class="inline-flex"><a href="#" class="hover:text-yellow-400 px-px">Apple Watch, </a></li>
                            <li class="inline-flex"><a href="#" class="hover:text-yellow-400 px-px">Sofa, </a></li>
                            <li class="inline-flex"><a href="#" class="hover:text-yellow-400 px-px">Adidas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="featuredCategoriesWrapper">
            <div id="featuredCategories" class="sm:container sm:mx-auto mb-10 overflow-x-auto">
                <h3 class="text-2xl mb-2">Feature Categories</h3>
                <div class="flex flex-row gap-x-4">
                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_property.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute bottom-0 z-10 px-6 py-4 ">
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Properties</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_car.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Autos</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_phone.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Gadgets</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_fashion_women.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Women's Fashion</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_fashion_men.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Men's Fashion</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="recommendedItemsWrapper">
            <div id="recommendedItems"  class="container mb-10 mx-auto">
                <div class="flex flex-col md:flex-row gap-x-4">
                    <div id="itemForYou" class="relative w-full rounded-md mb-4 overflow-hidden">
                        <a href="#">
                            <img src="/img/bestselling-product-bg.png" class="w-full" alt="">
                            <div class="absolute top-0 w-full h-full p-6">
                                <h5 class="font-semibold text-yellow-400 mb-4">Recommended Items For You</h5>
                                <p class="text-lg leading-8 text-white">Bang & Olufsen Play</p>
                                <p class="text-sm leading-8 text-white">Top Quality Products</p>
                            </div>
                        </a>
                    </div>

                    <div id="itemForYou" class="relative w-full rounded-md mb-4 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured-product-bg.png" class="w-full" alt="">
                            <div class="absolute top-0 w-full h-full p-6">
                                <h5 class="font-semibold text-yellow-400 mb-4">Newly Listed Items</h5>
                                <p class="text-lg leading-8 text-white">iPhone Accessories</p>
                                <p class="text-sm leading-8 text-white">Free Ship All Order Over $99</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="trendingItemsWrapper">
            <div id="trendingItems" class="sm:container sm:mx-auto mb-8 overflow-x-auto">
                <h3 class="text-2xl mb-2">Trending Items</h3>
                <div class="flex flex-row gap-x-4 overflow-x-auto">
                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_property.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute bottom-0 z-10 px-6 py-4 ">
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Properties</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_car.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Autos</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_phone.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Gadgets</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_fashion_women.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Women's Fashion</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>

                    <div class="relative w-1/5 rounded-lg min-w-192 mb-3 overflow-hidden">
                        <a href="#">
                            <img src="/img/featured_category_fashion_men.jpg" alt="" class="w-full">
                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-gray-950 to-transparent"></div>
                            <div class="absolute flex flex-col bottom-0 z-10 px-6 py-4 ">
                                <div class=" float-left w-px h-0 -ml-px" style="padding-top: 100%;"></div>
                                <span id="categoryTitle" class=" text-xl text-white font-medium">Men's Fashion</span>
                                <p class="text-white">100,000+ listings</p>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>
    </main>
</template>