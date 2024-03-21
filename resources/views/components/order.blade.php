<div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <x-order-header/>

            <main class="mt-6">
                <div class="">
                    <div class="bg-gray-100 rounded-lg shadow">
                        <div class="mx-auto max-w-2xl pt-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                            <div class="space-y-2 px-4 sm:flex sm:items-baseline sm:justify-between sm:space-y-0 sm:px-0">
                                <div class="flex sm:items-baseline sm:space-x-4">
                                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Order #11743</h1>
                                    <a href="#" class="hidden text-sm font-medium text-blue-600 hover:text-blue-500 sm:block">
                                        View invoice
                                        <span aria-hidden="true"> &rarr;</span>
                                    </a>
                                </div>
                                <p class="text-base text-gray-600">Order placed <time datetime="2024-03-07" class="font-medium text-gray-900">March 21, 2021</time></p>
                                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500 sm:hidden">
                                    View invoice
                                    <span aria-hidden="true"> &rarr;</span>
                                </a>
                            </div>

                            <!-- Products -->
                            <x-order-product :order="$order"/>
                        </div>
                    </div>


                </div>
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v11 (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</div>

