@php
    $plots = [
        [
            'id'       => 1,
            'title'    => 'Plot in Kigali',
            'location' => 'Kigali, Rwanda',
            'price'    => '$45,000',
            'size'     => '500 m²',
            'image'    => 'assets/img/house1.jpg',
        ],
        [
            'id'       => 2,
            'title'    => 'Plot in Musanze',
            'location' => 'Musanze, Rwanda',
            'price'    => '$32,000',
            'size'     => '800 m²',
            'image'    => 'assets/img/plot2.jpg',
        ],
        [
            'id'       => 3,
            'title'    => 'Plot in Rubavu',
            'location' => 'Rubavu, Rwanda',
            'price'    => '$28,000',
            'size'     => '650 m²',
            'image'    => 'assets/img/feature-plots.jpg',
        ],
    ];
@endphp

<section class="py-20 bg-gray-50">
    <div class="container mx-auto max-w-screen-xl  px-4">

        <!-- Header Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">

            <div>
                <span class="inline-block text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2"
                      style="background-color:rgba(231,87,64,0.08); color:#e75740;">
                    Plots
                </span>
                <h2 class="text-2xl md:text-3xl font-bold" style="color:#262f40;">Explore Latest Plots</h2>
            </div>

            <a href="/plots"
               class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200 whitespace-nowrap self-start sm:self-auto"
               onmouseover="this.style.borderColor='#e75740'; this.style.color='#e75740'; this.style.backgroundColor='rgba(231,87,64,0.05)';"
               onmouseout="this.style.borderColor=''; this.style.color=''; this.style.backgroundColor='';">
                See all plots
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>

        </div>

        <!-- Property Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            @foreach($plots as $index => $plot)
            <div class="plot-card opacity-0 translate-y-6 transition-all duration-700 {{ $index === 2 ? 'col-span-2 lg:col-span-1' : '' }}"
                 style="transition-delay: {{ $index * 150 }}ms">
                <a href="/plots/{{ $plot['id'] }}" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-44 md:h-52 overflow-hidden relative">
                        <img src="{{ asset($plot['image']) }}" alt="{{ $plot['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 text-white text-xs font-semibold px-2.5 py-1 rounded-full"
                              style="background-color:#e75740;">
                            For Sale
                        </span>
                    </div>
                    <div class="p-4 md:p-5">
                        <h3 class="font-semibold text-base md:text-lg truncate" style="color:#262f40;">{{ $plot['title'] }}</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" style="color:#e75740;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            {{ $plot['location'] }}
                        </p>
                        <div class="flex items-center justify-between mt-3">
                            <span class="font-bold text-base md:text-lg" style="color:#e75740;">{{ $plot['price'] }}</span>
                            <span class="text-gray-400 text-xs md:text-sm">{{ $plot['size'] }}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<script>
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