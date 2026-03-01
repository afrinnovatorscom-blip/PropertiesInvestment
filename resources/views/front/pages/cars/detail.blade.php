@extends('front.layouts.layouts')

@section('content')
@php
    // Replace with controller-injected $car variable
    $car = $car ?? [
        'id'            => 1,
        'title'         => 'Toyota Land Cruiser',
        'brand'         => 'Toyota',
        'model'         => 'Land Cruiser',
        'year'          => 2022,
        'location'      => 'Kigali, Rwanda',
        'price'         => 120,
        'type'          => 'SUV',
        'bodyType'      => 'SUV',
        'status'        => 'Available',
        'status_color'  => 'bg-blue-600',
        'seats'         => 7,
        'transmission'  => 'Auto',
        'fuel'          => 'Diesel',
        'mileage'       => '45,000 km',
        'condition'     => 'Excellent',
        'exteriorColor' => 'White',
        'interiorColor' => 'Black',
        'description'   => 'A powerful and reliable SUV perfect for both city driving and off-road adventures. Well-maintained with full service history.',
        'features'      => ['Leather Seats', 'Sunroof', 'Reverse Camera', 'Bluetooth', 'Navigation', 'Cruise Control', 'Parking Sensors', 'Heated Seats'],
        'images'        => [asset('assets/img/car1.jpg'), asset('assets/img/car2.jpg'), asset('assets/img/car3.jpg')],
        'image'         => asset('assets/img/car1.jpg'),
        'contactName'   => 'Jean Claude',
        'contactPhone'  => '+250 788 123 456',
        'contactEmail'  => 'info@propertiesinvest.com',
        'refNumber'     => 'PI-C001',
    ];
@endphp

<section class="py-8">
    <div class="container mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="/" class="hover:text-gray-700 transition-colors">Home</a>
            <span>/</span>
            <a href="/cars" class="hover:text-gray-700 transition-colors">Cars</a>
            <span>/</span>
            <span class="text-gray-800 truncate max-w-[200px]">{{ $car['title'] }}</span>
        </nav>

        {{-- Main 2-column layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">

            {{-- ── Left: Image Gallery ──────────────────────────────── --}}
            <div class="lg:col-span-3" x-data="{ active: 0 }">
                {{-- Main Image --}}
                <div class="rounded-2xl overflow-hidden h-72 md:h-[420px] bg-gray-100 mb-3 relative">
                    @foreach($car['images'] as $i => $img)
                        <img
                            src="{{ $img }}"
                            alt="{{ $car['title'] }} image {{ $i + 1 }}"
                            class="w-full h-full object-cover transition-opacity duration-300 absolute inset-0"
                            x-show="active === {{ $i }}"
                        />
                    @endforeach

                    {{-- Prev / Next arrows --}}
                    <button type="button"
                        @click="active = (active - 1 + {{ count($car['images']) }}) % {{ count($car['images']) }}"
                        class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-white/80 hover:bg-white shadow flex items-center justify-center transition">
                        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                    </button>
                    <button type="button"
                        @click="active = (active + 1) % {{ count($car['images']) }}"
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-white/80 hover:bg-white shadow flex items-center justify-center transition">
                        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </button>
                </div>

                {{-- Thumbnails --}}
                <div class="flex gap-3">
                    @foreach($car['images'] as $i => $img)
                        <button
                            type="button"
                            @click="active = {{ $i }}"
                            :class="active === {{ $i }} ? 'ring-2 ring-blue-600' : 'ring-1 ring-gray-200'"
                            class="w-20 h-14 rounded-xl overflow-hidden flex-shrink-0 focus:outline-none transition">
                            <img src="{{ $img }}" alt="thumb {{ $i + 1 }}" class="w-full h-full object-cover" />
                        </button>
                    @endforeach
                </div>
            </div>

            {{-- ── Right: Price & Info Sidebar ─────────────────────── --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm sticky top-24">

                    {{-- Price Row --}}
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-3xl font-bold text-blue-600">${{ $car['price'] }}<span class="text-base font-normal text-gray-400">/day</span></p>
                                @if(!empty($car['refNumber']))
                                    <p class="text-xs text-gray-400 mt-1">Ref: {{ $car['refNumber'] }}</p>
                                @endif
                            </div>
                            <div class="flex gap-2">
                                {{-- Share --}}
                                <button type="button"
                                    onclick="navigator.share ? navigator.share({ title: '{{ addslashes($car['title']) }}', url: window.location.href }) : navigator.clipboard.writeText(window.location.href).then(() => alert('Link copied!'))"
                                    class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>
                                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                                    </svg>
                                </button>
                                {{-- Wishlist --}}
                                <button type="button"
                                    class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center hover:bg-red-50 hover:border-red-200 transition-colors group">
                                    <svg class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        @if(!empty($car['condition']))
                            <span class="inline-block mt-3 bg-blue-50 text-blue-600 text-xs font-medium px-3 py-1 rounded-full">
                                {{ $car['condition'] }}
                            </span>
                        @endif
                    </div>

                    {{-- Car Name & Quick Specs --}}
                    <div class="p-6 border-b border-gray-100">
                        <h1 class="text-xl font-bold text-gray-900">
                            {{ $car['brand'] ?? '' }} {{ $car['model'] ?? '' }} {{ $car['year'] ?? '' }}
                        </h1>

                        <div class="flex items-center flex-wrap gap-3 mt-3 text-xs text-gray-400">
                            @if(!empty($car['transmission']))
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                                    {{ $car['transmission'] }}
                                </span>
                            @endif
                            @if(!empty($car['fuel']))
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 22V8l9-6 9 6v14H3z"/><path d="M9 22V12h6v10"/></svg>
                                    {{ $car['fuel'] }}
                                </span>
                            @endif
                            @if(!empty($car['mileage']))
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                                    {{ $car['mileage'] }}
                                </span>
                            @endif
                        </div>

                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-400">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                Certified
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                                Inspected
                            </span>
                        </div>
                    </div>

                    {{-- CTA Buttons --}}
                    <div class="p-6 space-y-3">
                        <a href="tel:{{ $car['contactPhone'] ?? '+250788000000' }}"
                           class="flex items-center justify-center gap-2 w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.6 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            Call Now
                        </a>
                        <a href="mailto:{{ $car['contactEmail'] ?? 'info@propertiesinvest.com' }}"
                           class="flex items-center justify-center gap-2 w-full border border-gray-200 hover:bg-gray-50 text-gray-700 text-sm font-semibold px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/>
                            </svg>
                            Send Email
                        </a>
                    </div>

                </div>
            </div>{{-- end sidebar --}}

        </div>{{-- end top grid --}}

        {{-- ── Car Overview ─────────────────────────────────────────── --}}
        <div class="mt-10">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Car Overview</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                @if(!empty($car['mileage']))
                    <div class="bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center gap-2 text-center shadow-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                        <span class="text-xs text-gray-400">Mileage</span>
                        <span class="text-sm font-semibold text-gray-900">{{ $car['mileage'] }}</span>
                    </div>
                @endif

                @if(!empty($car['fuel']))
                    <div class="bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center gap-2 text-center shadow-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 22V8l9-6 9 6v14H3z"/><path d="M9 22V12h6v10"/></svg>
                        <span class="text-xs text-gray-400">Fuel Type</span>
                        <span class="text-sm font-semibold text-gray-900">{{ $car['fuel'] }}</span>
                    </div>
                @endif

                @if(!empty($car['transmission']))
                    <div class="bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center gap-2 text-center shadow-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                        <span class="text-xs text-gray-400">Transmission</span>
                        <span class="text-sm font-semibold text-gray-900">{{ $car['transmission'] }}</span>
                    </div>
                @endif

                @if(!empty($car['seats']))
                    <div class="bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center gap-2 text-center shadow-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span class="text-xs text-gray-400">Seats</span>
                        <span class="text-sm font-semibold text-gray-900">{{ $car['seats'] }}</span>
                    </div>
                @endif

                @if(!empty($car['year']))
                    <div class="bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center gap-2 text-center shadow-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <span class="text-xs text-gray-400">Year</span>
                        <span class="text-sm font-semibold text-gray-900">{{ $car['year'] }}</span>
                    </div>
                @endif

            </div>
        </div>

        {{-- ── Summary ───────────────────────────────────────────────── --}}
        <div class="mt-10 bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Summary</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 divide-y divide-gray-100 md:[&>*:nth-child(odd)]:border-r md:[&>*:nth-child(odd)]:pr-8">

                @if(!empty($car['bodyType']))
                    <div class="flex items-center justify-between py-3">
                        <span class="flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                            Body Type
                        </span>
                        <span class="text-sm font-medium text-gray-900">{{ $car['bodyType'] }}</span>
                    </div>
                @endif

                @if(!empty($car['exteriorColor']))
                    <div class="flex items-center justify-between py-3">
                        <span class="flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l2 2"/></svg>
                            Exterior Color
                        </span>
                        <span class="text-sm font-medium text-gray-900">{{ $car['exteriorColor'] }}</span>
                    </div>
                @endif

                @if(!empty($car['interiorColor']))
                    <div class="flex items-center justify-between py-3">
                        <span class="flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l2 2"/></svg>
                            Interior Color
                        </span>
                        <span class="text-sm font-medium text-gray-900">{{ $car['interiorColor'] }}</span>
                    </div>
                @endif

                @if(!empty($car['condition']))
                    <div class="flex items-center justify-between py-3">
                        <span class="flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Condition
                        </span>
                        <span class="text-sm font-medium text-gray-900">{{ $car['condition'] }}</span>
                    </div>
                @endif

                <div class="flex items-center justify-between py-3">
                    <span class="flex items-center gap-2 text-sm text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 21c-4.418 0-8-4.03-8-9a8 8 0 1 1 16 0c0 4.97-3.582 9-8 9z"/><circle cx="12" cy="12" r="3"/></svg>
                        Location
                    </span>
                    <span class="text-sm font-medium text-gray-900">{{ $car['location'] }}</span>
                </div>

                @if(!empty($car['refNumber']))
                    <div class="flex items-center justify-between py-3">
                        <span class="flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="4" y1="9" x2="20" y2="9"/><line x1="4" y1="15" x2="20" y2="15"/><line x1="10" y1="3" x2="8" y2="21"/><line x1="16" y1="3" x2="14" y2="21"/></svg>
                            Reference
                        </span>
                        <span class="text-sm font-medium text-gray-900">{{ $car['refNumber'] }}</span>
                    </div>
                @endif

            </div>
        </div>

        {{-- ── Description ──────────────────────────────────────────── --}}
        <div class="mt-10 bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Discover the Car</h2>
            <p class="text-gray-500 leading-relaxed">{{ $car['description'] }}</p>
        </div>

        {{-- ── Features ─────────────────────────────────────────────── --}}
        @if(!empty($car['features']) && count($car['features']) > 0)
            <div class="mt-10 bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Features</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    @foreach($car['features'] as $feature)
                        <div class="flex items-center gap-2 text-sm text-gray-500 bg-gray-50 rounded-xl px-4 py-3">
                            <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            {{ $feature }}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- ── Contact ───────────────────────────────────────────────── --}}
        <div class="mt-10 bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Contact</h2>
            <div class="space-y-3">

                @if(!empty($car['contactName']))
                    <div class="flex items-center gap-4 p-3 rounded-xl bg-gray-50">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-gray-400">Contact</span>
                            <p class="text-sm font-semibold text-gray-900">{{ $car['contactName'] }}</p>
                        </div>
                    </div>
                @endif

                @if(!empty($car['contactPhone']))
                    <a href="tel:{{ $car['contactPhone'] }}"
                       class="flex items-center gap-4 p-3 rounded-xl bg-gray-50 hover:bg-blue-50 transition-colors group">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.6 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-gray-400">Phone</span>
                            <p class="text-sm font-semibold text-blue-600 group-hover:underline">{{ $car['contactPhone'] }}</p>
                        </div>
                    </a>
                @endif

                @if(!empty($car['contactEmail']))
                    <a href="mailto:{{ $car['contactEmail'] }}"
                       class="flex items-center gap-4 p-3 rounded-xl bg-gray-50 hover:bg-blue-50 transition-colors group">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-gray-400">Email</span>
                            <p class="text-sm font-semibold text-blue-600 group-hover:underline">{{ $car['contactEmail'] }}</p>
                        </div>
                    </a>
                @endif

            </div>
        </div>

        {{-- ── Similar Cars ──────────────────────────────────────────── --}}
        @if(!empty($similar) && count($similar) > 0)
            <div class="mt-16">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Similar Cars</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($similar as $item)
                        <a href="/cars/{{ $item['id'] }}"
                           class="group bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                            <div class="h-48 overflow-hidden relative">
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                                <span class="absolute top-3 left-3 {{ $item['status_color'] }} text-white text-xs font-semibold px-3 py-1 rounded-full">
                                    {{ $item['status'] }}
                                </span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 text-sm mb-1 truncate">{{ $item['title'] }}</h3>
                                <p class="text-xs text-gray-400 mb-2">{{ $item['location'] }}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-blue-600 font-bold text-sm">{{ $item['price'] }}<span class="text-gray-400 font-normal">/day</span></span>
                                    <span class="text-xs text-gray-400">{{ $item['type'] }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@endsection