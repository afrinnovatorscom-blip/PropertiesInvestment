<section class="py-20 bg-white">
    <div class="container mx-auto px-4">

        <!-- Header Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">

            <!-- Section Header -->
            <div>
                <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2">
                    Properties
                </span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Explore Latest Properties</h2>
            </div>

            <!-- See All Button -->
            <a href="/houses"
               class="inline-flex items-center gap-2 border border-gray-300 hover:border-blue-500 hover:text-blue-600 hover:bg-blue-50 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200 whitespace-nowrap self-start sm:self-auto">
                See all properties
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>

        </div>

        <!-- Property Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            <!-- House Card 1 -->
            <div class="house-card opacity-0 translate-y-6 transition-all duration-700" style="transition-delay: 0ms">
                <a href="/houses/1" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">

                    <!-- Image -->
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/house1.jpg') }}" alt="House Title"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <!-- Status Badge -->
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                            For Sale
                        </span>
                        <!-- Favourite -->
                        <button class="absolute top-3 right-3 bg-white/90 hover:bg-white p-1.5 rounded-full shadow transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Info -->
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Modern Villa</h3>

                        <!-- Location -->
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Kigali, Rwanda
                        </p>

                        <!-- Specs Row -->
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">
                            <!-- Beds -->
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 10V6a1 1 0 011-1h16a1 1 0 011 1v4M3 10v8h18v-8"/>
                                </svg>
                                3 Beds
                            </span>
                            <!-- Baths -->
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 12a4 4 0 01-4-4V6h4m16 6a4 4 0 004-4V6h-4M4 12v5a2 2 0 002 2h12a2 2 0 002-2v-5"/>
                                </svg>
                                2 Baths
                            </span>
                            <!-- Size -->
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                                </svg>
                                220 m²
                            </span>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <span class="text-blue-600 font-bold text-base md:text-lg">$120,000</span>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Residential</span>
                        </div>
                    </div>

                </a>
            </div>

            <!-- House Card 2 -->
            <div class="house-card opacity-0 translate-y-6 transition-all duration-700" style="transition-delay: 150ms">
                <a href="/houses/2" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/house2.jpg') }}" alt="House Title"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-2.5 py-1 rounded-full">For Sale</span>
                        <button class="absolute top-3 right-3 bg-white/90 hover:bg-white p-1.5 rounded-full shadow transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Family Home</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Musanze, Rwanda
                        </p>
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 10V6a1 1 0 011-1h16a1 1 0 011 1v4M3 10v8h18v-8"/></svg>
                                4 Beds
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 12a4 4 0 01-4-4V6h4m16 6a4 4 0 004-4V6h-4M4 12v5a2 2 0 002 2h12a2 2 0 002-2v-5"/></svg>
                                3 Baths
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                                310 m²
                            </span>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <span class="text-blue-600 font-bold text-base md:text-lg">$95,000</span>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Residential</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- House Card 3 -->
            <div class="house-card opacity-0 translate-y-6 transition-all duration-700 col-span-2 lg:col-span-1" style="transition-delay: 300ms">
                <a href="/houses/3" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/house3.jpg') }}" alt="House Title"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-2.5 py-1 rounded-full">For Sale</span>
                        <button class="absolute top-3 right-3 bg-white/90 hover:bg-white p-1.5 rounded-full shadow transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Luxury Apartment</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Rubavu, Rwanda
                        </p>
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 10V6a1 1 0 011-1h16a1 1 0 011 1v4M3 10v8h18v-8"/></svg>
                                2 Beds
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 12a4 4 0 01-4-4V6h4m16 6a4 4 0 004-4V6h-4M4 12v5a2 2 0 002 2h12a2 2 0 002-2v-5"/></svg>
                                1 Bath
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                                150 m²
                            </span>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <span class="text-blue-600 font-bold text-base md:text-lg">$75,000</span>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Residential</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<script>
    const houseCards = document.querySelectorAll('.house-card');
    const houseObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-6');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                houseObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });
    houseCards.forEach(card => houseObserver.observe(card));
</script>