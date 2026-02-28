<section class="py-20 bg-white">
    <div class="container mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-3">
                Explore
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
                Tour the Unmatched Features
            </h2>
            <p class="text-gray-500 text-sm md:text-base max-w-xl mx-auto">
                Discover our comprehensive range of real estate and car rental services
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="feature-card opacity-0 translate-y-8 transition-all duration-700" style="transition-delay: 0ms">
                <a href="/houses" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('build/assets/images/feature-houses.jpg') }}" alt="Buy Properties"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Buy Properties</h3>
                        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                            Find your dream home from our curated selection of premium residential properties.
                        </p>
                        <span class="inline-flex items-center gap-1 text-blue-600 text-sm font-medium mt-4 group-hover:gap-2 transition-all duration-200">
                            Explore Now
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="feature-card opacity-0 translate-y-8 transition-all duration-700" style="transition-delay: 150ms">
                <a href="/plots" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('build/assets/images/feature-plots.jpg') }}" alt="Buy Plots"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Buy Plots</h3>
                        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                            Explore prime land across Rwanda — residential, commercial, and agricultural plots.
                        </p>
                        <span class="inline-flex items-center gap-1 text-blue-600 text-sm font-medium mt-4 group-hover:gap-2 transition-all duration-200">
                            Explore Now
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="feature-card opacity-0 translate-y-8 transition-all duration-700" style="transition-delay: 300ms">
                <a href="/cars" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ asset('build/assets/images/feature-cars.jpg') }}" alt="Rent a Car"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Rent a Car</h3>
                        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                            Rent quality vehicles for your trips and get the best experience with us.
                        </p>
                        <span class="inline-flex items-center gap-1 text-blue-600 text-sm font-medium mt-4 group-hover:gap-2 transition-all duration-200">
                            Explore Now
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<script>
    // Trigger .feature-card entrance animations when cards scroll into view
    const featureCards = document.querySelectorAll('.feature-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-8');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                observer.unobserve(entry.target); // animate once only
            }
        });
    }, { threshold: 0.15 });

    featureCards.forEach(card => observer.observe(card));
</script>