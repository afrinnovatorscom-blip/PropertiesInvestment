@extends('front.layouts.layouts')

@section('content')
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

<section class="py-20">
    <div class="container mx-auto max-w-screen-xl  px-4">

        {{-- Search Bar --}}
        <div class="bg-white rounded-2xl border border-gray-200 p-4 mb-6 shadow-sm">
            <form method="GET" action="{{ request()->url() }}" class="flex items-center gap-3">
                <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                </svg>
                <input
                    type="text"
                    name="search"
                    placeholder="Search your desired car..."
                    value="{{ request('search') }}"
                    class="flex-1 bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm"
                />
                <button type="button" class="flex items-center gap-2 text-sm text-gray-400 hover:text-gray-700 transition-colors border-l border-gray-200 pl-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="20" y2="12"/><line x1="12" y1="18" x2="20" y2="18"/>
                    </svg>
                    More Filters
                </button>
            </form>
        </div>

        {{-- Filters Row --}}
        <div class="flex flex-col md:flex-row gap-4 mb-6">
            <div class="w-full max-w-[200px]">
                <select name="brand" class="w-full bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                    <option value="">Brand</option>
                    <option value="toyota" {{ request('brand') === 'toyota' ? 'selected' : '' }}>Toyota</option>
                    <option value="mercedes" {{ request('brand') === 'mercedes' ? 'selected' : '' }}>Mercedes</option>
                    <option value="bmw" {{ request('brand') === 'bmw' ? 'selected' : '' }}>BMW</option>
                </select>
            </div>
            <div class="w-full max-w-[200px]">
                <select name="body_type" class="w-full bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                    <option value="">Body Type</option>
                    <option value="suv" {{ request('body_type') === 'suv' ? 'selected' : '' }}>SUV</option>
                    <option value="sedan" {{ request('body_type') === 'sedan' ? 'selected' : '' }}>Sedan</option>
                    <option value="hatchback" {{ request('body_type') === 'hatchback' ? 'selected' : '' }}>Hatchback</option>
                </select>
            </div>

            <div class="md:ml-auto flex items-center gap-3">
                <span class="text-sm text-gray-400 whitespace-nowrap">Sort By:</span>
                <select name="sort" class="bg-white border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer w-[180px]">
                    <option value="latest"   {{ request('sort') === 'latest'    ? 'selected' : '' }}>Latest</option>
                    <option value="price_asc"  {{ request('sort') === 'price_asc'  ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                </select>
            </div>
        </div>

        {{-- Results Count --}}
        <p class="text-sm text-gray-400 mb-6">{{ count($cars) }} car{{ count($cars) !== 1 ? 's' : '' }} found</p>

        {{-- Car Grid --}}
        @if(count($cars) === 0)
            <p class="text-center text-gray-400 py-20">No cars found matching your criteria.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cars as $car)
                    <a href="{{ $car['link'] }}" class="group bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">

                        {{-- Car Image --}}
                        <div class="relative overflow-hidden h-52">
                            <img
                                src="{{ $car['image'] }}"
                                alt="{{ $car['title'] }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            />
                            <span class="absolute top-3 left-3 {{ $car['status_color'] }} text-white text-xs font-semibold px-3 py-1 rounded-full">
                                {{ $car['status'] }}
                            </span>
                            <span class="absolute top-3 right-3 bg-black/50 text-white text-xs font-medium px-3 py-1 rounded-full backdrop-blur-sm">
                                {{ $car['type'] }}
                            </span>
                        </div>

                        {{-- Car Details --}}
                        <div class="p-4">
                            <div class="flex items-start justify-between mb-1">
                                <h3 class="font-semibold text-gray-900 text-base leading-tight">{{ $car['title'] }}</h3>
                                <span class="text-blue-600 font-bold text-sm whitespace-nowrap ml-2">{{ $car['price'] }}<span class="text-gray-400 font-normal">/day</span></span>
                            </div>

                            <div class="flex items-center gap-1 text-gray-400 text-xs mb-4">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 21c-4.418 0-8-4.03-8-9a8 8 0 1 1 16 0c0 4.97-3.582 9-8 9z"/><circle cx="12" cy="12" r="3"/>
                                </svg>
                                {{ $car['location'] }}
                            </div>

                            <div class="flex items-center justify-between border-t border-gray-100 pt-3 text-xs text-gray-500">
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                                    </svg>
                                    {{ $car['seats'] }} Seats
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
                                    </svg>
                                    {{ $car['transmission'] }}
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M3 22V8l9-6 9 6v14H3z"/><path d="M9 22V12h6v10"/>
                                    </svg>
                                    {{ $car['fuel'] }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

    </div>
</section>

@endsection