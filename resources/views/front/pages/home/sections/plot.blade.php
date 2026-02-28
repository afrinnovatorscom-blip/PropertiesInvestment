<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Header Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">

            <!-- Section Header -->
            <div>
                <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2">
                    Plots
                </span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Explore Latest Plots</h2>
            </div>

            <!-- See All Button -->
            <a href="/plots"
               class="inline-flex items-center gap-2 border border-gray-300 hover:border-blue-500 hover:text-blue-600 hover:bg-blue-50 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200 whitespace-nowrap self-start sm:self-auto">
                See all plots
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>

        </div>

        <!-- Property Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            <!-- Plot Card 1 -->
            <div class="plot-card opacity-0 translate-y-6 transition-all duration-700" style="transition-delay: 0ms">
                <a href="/plots/1" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/plot1.jpg') }}" alt="Plot in Kigali"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                            For Sale
                        </span>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Plot in Kigali</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Kigali, Rwanda
                        </p>
                        <div class="flex items-center justify-between mt-3">
                            <span class="text-blue-600 font-bold text-base md:text-lg">$45,000</span>
                            <span class="text-gray-400 text-xs md:text-sm">500 m²</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Plot Card 2 -->
            <div class="plot-card opacity-0 translate-y-6 transition-all duration-700" style="transition-delay: 150ms">
                <a href="/plots/2" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/plot2.jpg') }}" alt="Plot in Musanze"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                            For Sale
                        </span>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Plot in Musanze</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Musanze, Rwanda
                        </p>
                        <div class="flex items-center justify-between mt-3">
                            <span class="text-blue-600 font-bold text-base md:text-lg">$32,000</span>
                            <span class="text-gray-400 text-xs md:text-sm">800 m²</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Plot Card 3 -->
            <div class="plot-card opacity-0 translate-y-6 transition-all duration-700 col-span-2 lg:col-span-1" style="transition-delay: 300ms">
                <a href="/plots/3" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset('build/assets/images/plot3.jpg') }}" alt="Plot in Rubavu"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                            For Sale
                        </span>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-gray-900 text-base md:text-lg truncate">Plot in Rubavu</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            Rubavu, Rwanda
                        </p>
                        <div class="flex items-center justify-between mt-3">
                            <span class="text-blue-600 font-bold text-base md:text-lg">$28,000</span>
                            <span class="text-gray-400 text-xs md:text-sm">650 m²</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<script>
    // Trigger .plot-card entrance animations when cards scroll into view
    const plotCards = document.querySelectorAll('.plot-card');

    const plotObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-6');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                plotObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    plotCards.forEach(card => plotObserver.observe(card));
</script>