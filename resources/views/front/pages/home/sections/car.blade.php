@php
    $cars = [
        [
            'id'           => 1,
            'title'        => 'Toyota Land Cruiser',
            'location'     => 'Kigali, Rwanda',
            'price'        => '$120',
            'type'         => 'SUV',
            'status'       => 'Available',
            'status_color' => 'bg-blue-600',
            'seats'        => 7,
            'transmission' => 'Auto',
            'fuel'         => 'Diesel',
            'image'        => asset('assets/img/car1.jpg'),
            'link'         => '/cars/1',
        ],
        [
            'id'           => 2,
            'title'        => 'Mercedes Benz E-Class',
            'location'     => 'Kigali, Rwanda',
            'price'        => '$150',
            'type'         => 'Sedan',
            'status'       => 'Available',
            'status_color' => 'bg-blue-600',
            'seats'        => 5,
            'transmission' => 'Auto',
            'fuel'         => 'Petrol',
            'image'        => asset('assets/img/car2.jpg'),
            'link'         => '/cars/2',
        ],
        [
            'id'           => 3,
            'title'        => 'Toyota Corolla',
            'location'     => 'Musanze, Rwanda',
            'price'        => '$70',
            'type'         => 'Sedan',
            'status'       => 'Booked',
            'status_color' => 'bg-orange-500',
            'seats'        => 5,
            'transmission' => 'Manual',
            'fuel'         => 'Petrol',
            'image'        => asset('assets/img/car3.jpg'),
            'link'         => '/cars/3',
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
                    Cars
                </span>
                <h2 class="text-2xl md:text-3xl font-bold" style="color:#262f40;">Explore Latest Cars</h2>
            </div>
            <a href="/cars"
               class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200 whitespace-nowrap self-start sm:self-auto"
               onmouseover="this.style.borderColor='#e75740'; this.style.color='#e75740'; this.style.backgroundColor='rgba(231,87,64,0.05)';"
               onmouseout="this.style.borderColor=''; this.style.color=''; this.style.backgroundColor='';">
                See all cars
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <!-- Car Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

            @foreach ($cars as $i => $car)

                <div class="car-card opacity-0 translate-y-6 transition-all duration-700 {{ $loop->last ? 'col-span-2 lg:col-span-1' : '' }}"
                     style="transition-delay: {{ $i * 150 }}ms">

                    <a href="{{ $car['link'] }}"
                       class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">

                        <!-- Image -->
                        <div class="h-44 md:h-52 overflow-hidden relative">
                            <img src="{{ $car['image'] }}"
                                 alt="{{ $car['title'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />

                       

                        
                            </button>
                        </div>

                        <!-- Info -->
                        <div class="p-4 md:p-5">

                            <!-- Title -->
                            <h3 class="font-semibold text-base md:text-lg truncate" style="color:#262f40;">
                                {{ $car['title'] }}
                            </h3>

                            <!-- Location -->
                            <p class="flex items-center gap-1.5 text-gray-500 text-xs md:text-sm mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" style="color:#e75740;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                                </svg>
                                {{ $car['location'] }}
                            </p>

                            <!-- Specs Row -->
                            <div class="flex items-center gap-3 mt-3 text-gray-500 text-xs md:text-sm">

                                <!-- Seats -->
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/>
                                    </svg>
                                    {{ $car['seats'] }} Seats
                                </span>

                                <!-- Transmission -->
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                    </svg>
                                    {{ $car['transmission'] }}
                                </span>

                                <!-- Fuel -->
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h2l2 9h10l2-9h2M3 10V7a1 1 0 011-1h3M3 10h18"/>
                                    </svg>
                                    {{ $car['fuel'] }}
                                </span>

                            </div>

                            <!-- Price -->
                            <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                                <div>
                                    <span class="font-bold text-base md:text-lg" style="color:#e75740;">{{ $car['price'] }}</span>
                                    <span class="text-gray-400 text-xs"> / day</span>
                                </div>
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">
                                    {{ $car['type'] }}
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
        const carObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-6');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    carObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.car-card').forEach(card => carObserver.observe(card));
    });
</script>