<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Header Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
            <div>
                <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2">
                    Cars
                </span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Explore Latest Cars</h2>
            </div>
            <a href="/cars"
               class="inline-flex items-center gap-2 border border-gray-300 hover:border-blue-500 hover:text-blue-600 hover:bg-blue-50 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200 whitespace-nowrap self-start sm:self-auto">
                See all cars
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <!-- Car Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            <!-- Car Card 1 -->
            <div class="car-card opacity-0 translate-y-6 transition-all duration-700" style="transition-delay: 0ms">
                <a href="/cars/1" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/car1.jpg') }}" alt="Toyota Land Cruiser"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">Available</span>
                        <button class="absolute top-3 right-3 bg-white/90 hover:bg-white p-1.5 rounded-full shadow transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Toyota Land Cruiser</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Kigali, Rwanda
                        </p>
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
                                7 Seats
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                                Auto
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h2l2 9h10l2-9h2M3 10V7a1 1 0 011-1h3M3 10h18"/></svg>
                                Diesel
                            </span>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <div>
                                <span class="text-blue-600 font-bold text-base md:text-lg">$120</span>
                                <span class="text-gray-400 text-xs"> / day</span>
                            </div>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">SUV</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Car Card 2 -->
            <div class="car-card opacity-0 translate-y-6 transition-all duration-700" style="transition-delay: 150ms">
                <a href="/cars/2" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/car2.jpg') }}" alt="Mercedes Benz E-Class"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">Available</span>
                        <button class="absolute top-3 right-3 bg-white/90 hover:bg-white p-1.5 rounded-full shadow transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Mercedes Benz E-Class</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Kigali, Rwanda
                        </p>
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
                                5 Seats
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                                Auto
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h2l2 9h10l2-9h2M3 10V7a1 1 0 011-1h3M3 10h18"/></svg>
                                Petrol
                            </span>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <div>
                                <span class="text-blue-600 font-bold text-base md:text-lg">$150</span>
                                <span class="text-gray-400 text-xs"> / day</span>
                            </div>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Sedan</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Car Card 3 -->
            <div class="car-card opacity-0 translate-y-6 transition-all duration-700 col-span-2 lg:col-span-1" style="transition-delay: 300ms">
                <a href="/cars/3" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/car3.jpg') }}" alt="Toyota Corolla"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-semibold px-2.5 py-1 rounded-full">Booked</span>
                        <button class="absolute top-3 right-3 bg-white/90 hover:bg-white p-1.5 rounded-full shadow transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Toyota Corolla</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Musanze, Rwanda
                        </p>
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
                                5 Seats
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                                Manual
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h2l2 9h10l2-9h2M3 10V7a1 1 0 011-1h3M3 10h18"/></svg>
                                Petrol
                            </span>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <div>
                                <span class="text-blue-600 font-bold text-base md:text-lg">$70</span>
                                <span class="text-gray-400 text-xs"> / day</span>
                            </div>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Sedan</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<script>
    // Trigger .car-card entrance animations when cards scroll into view
    const carCards = document.querySelectorAll('.car-card');

    const carObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-6');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                carObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    carCards.forEach(card => carObserver.observe(card));
</script>