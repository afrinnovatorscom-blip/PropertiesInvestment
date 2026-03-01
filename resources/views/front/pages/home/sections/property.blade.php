@php
    $houses = [
        [
            'id'       => 1,
            'title'    => 'Modern Villa',
            'location' => 'Kigali, Rwanda',
            'price'    => '$120,000',
            'type'     => 'Residential',
            'status'   => 'For Sale',
            'beds'     => 3,
            'baths'    => 2,
            'size'     => '220 m²',
            'image'    => asset('assets/img/house1.jpg'),
            'link'     => '/houses/1',
        ],
        [
            'id'       => 2,
            'title'    => 'Family Home',
            'location' => 'Musanze, Rwanda',
            'price'    => '$95,000',
            'type'     => 'Residential',
            'status'   => 'For Sale',
            'beds'     => 4,
            'baths'    => 3,
            'size'     => '310 m²',
            'image'    => asset('assets/img/house2.jpg'),
            'link'     => '/houses/2',
        ],
        [
            'id'       => 3,
            'title'    => 'Luxury Apartment',
            'location' => 'Rubavu, Rwanda',
            'price'    => '$75,000',
            'type'     => 'Residential',
            'status'   => 'For Sale',
            'beds'     => 2,
            'baths'    => 1,
            'size'     => '150 m²',
            'image'    => asset('assets/img/house3.jpg'),
            'link'     => '/houses/3',
        ],
    ];
@endphp

<section class="py-20 bg-white">
    <div class="container mx-auto max-w-screen-xl  px-4">

        <!-- Header Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">

            <!-- Section Header -->
            <div>
                <span class="inline-block text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2"
                      style="background-color:rgba(231,87,64,0.08); color:#e75740;">
                    Properties
                </span>
                <h2 class="text-2xl md:text-3xl font-bold" style="color:#262f40;">Explore Latest Properties</h2>
            </div>

            <!-- See All Button -->
            <a href="/houses"
               class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200 whitespace-nowrap self-start sm:self-auto"
               onmouseover="this.style.borderColor='#e75740'; this.style.color='#e75740'; this.style.backgroundColor='rgba(231,87,64,0.05)';"
               onmouseout="this.style.borderColor=''; this.style.color=''; this.style.backgroundColor='';">
                See all properties
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>

        </div>

        <!-- Property Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            @foreach ($houses as $i => $house)

                {{-- Last card spans 2 cols on mobile, resets to 1 on lg --}}
                <div class="house-card opacity-0 translate-y-6 transition-all duration-700 {{ $loop->last ? 'col-span-2 lg:col-span-1' : '' }}"
                     style="transition-delay: {{ $i * 150 }}ms">

                    <a href="{{ $house['link'] }}"
                       class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">

                        <!-- Image -->
                        <div class="h-44 md:h-52 overflow-hidden relative">
                            <img src="{{ $house['image'] }}"
                                 alt="{{ $house['title'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />

                            <!-- Status Badge -->
                            <span class="absolute top-3 left-3 bg-[#e75740] text-white text-xs font-semibold px-2.5 py-1 rounded-full">
                                {{ $house['status'] }}
                            </span>

                        
                        </div>

                        <!-- Info -->
                        <div class="p-4 md:p-5">

                            <!-- Title -->
                            <h3 class="font-semibold text-base md:text-lg truncate" style="color:#262f40;">
                                {{ $house['title'] }}
                            </h3>

                            <!-- Location -->
                            <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" style="color:#e75740;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                                </svg>
                                {{ $house['location'] }}
                            </p>

                            <!-- Specs Row -->
                            <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">

                                <!-- Beds -->
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 10V6a1 1 0 011-1h16a1 1 0 011 1v4M3 10v8h18v-8"/>
                                    </svg>
                                    {{ $house['beds'] }} Beds
                                </span>

                                <!-- Baths -->
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 12a4 4 0 01-4-4V6h4m16 6a4 4 0 004-4V6h-4M4 12v5a2 2 0 002 2h12a2 2 0 002-2v-5"/>
                                    </svg>
                                    {{ $house['baths'] }} Baths
                                </span>

                                <!-- Size -->
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                                    </svg>
                                    {{ $house['size'] }}
                                </span>

                            </div>

                            <!-- Price -->
                            <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                                <span class="font-bold text-base md:text-lg" style="color:#e75740;">
                                    {{ $house['price'] }}
                                </span>
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">
                                    {{ $house['type'] }}
                                </span>
                            </div>

                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const houseObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-6');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    houseObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.house-card').forEach(card => houseObserver.observe(card));
    });
</script>