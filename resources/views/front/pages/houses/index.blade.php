@extends('front.layouts.layouts')

@section('content')


@php
    $houses = [
        ['id' => 'h1', 'title' => 'Modern Luxury Apartment',  'location' => 'Kicukiro, Kigali',    'price' => 250000, 'bedrooms' => 4, 'bathrooms' => 3, 'area' => '320 m²',  'type' => 'Apartment', 'image' => 'assets/img/house1.jpg'],
        ['id' => 'h2', 'title' => 'Villa with Swimming Pool',  'location' => 'Nyarutarama, Kigali', 'price' => 580000, 'bedrooms' => 5, 'bathrooms' => 4, 'area' => '500 m²',  'type' => 'Villa',     'image' => 'assets/img/house2.jpg'],
        ['id' => 'h3', 'title' => 'Duplex Townhouse',          'location' => 'Gasabo, Kigali',      'price' => 180000, 'bedrooms' => 3, 'bathrooms' => 2, 'area' => '220 m²',  'type' => 'Duplex',    'image' => 'assets/img/house3.jpg'],
        ['id' => 'h4', 'title' => 'Executive Suite Apartment', 'location' => 'Kimihurura, Kigali',  'price' => 320000, 'bedrooms' => 3, 'bathrooms' => 2, 'area' => '280 m²',  'type' => 'Suite',     'image' => 'assets/img/house1.jpg'],
        ['id' => 'h5', 'title' => 'Family Residence',          'location' => 'Gisozi, Kigali',      'price' => 150000, 'bedrooms' => 4, 'bathrooms' => 3, 'area' => '350 m²',  'type' => 'Apartment', 'image' => 'assets/img/house2.jpg'],
        ['id' => 'h6', 'title' => 'Premium Penthouse',         'location' => 'Kacyiru, Kigali',     'price' => 450000, 'bedrooms' => 3, 'bathrooms' => 2, 'area' => '260 m²',  'type' => 'Suite',     'image' => 'assets/img/house3.jpg'],
    ];

  
    $locations    = ['All locations','Bugesera','Gasabo','Kicukiro','Nyarugenge','Musanze','Rubavu','Huye','Nyagatare','Ngoma','Kamonyi'];
    $propertyTypes = ['All types','Apartment','Villa','Duplex','Suite'];
    $priceRanges  = ['Any price','$0 - $100,000','$100,000 - $300,000','$300,000 - $500,000','$500,000 - $1,000,000','$1,000,000+'];
@endphp

{{-- ═══════════════ HOUSES SECTION ═══════════════ --}}
<section class="py-20 bg-white">
    <div class="container mx-auto max-w-screen-xl  px-4">

        <div class="text-center mb-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2"
                  style="background-color:rgba(231,87,64,0.08); color:#e75740;">Properties</span>
            <h2 class="text-3xl md:text-4xl font-bold" style="color:#262f40;">Houses for Sale</h2>
            <p class="text-gray-500 mt-2">Find your dream home from our selection of premium properties</p>
        </div>

        {{-- Filters --}}
        <div class="flex flex-col md:flex-row gap-4 mb-10 bg-gray-50 rounded-xl p-6 border border-gray-200">
            <div class="flex-1">
                <label class="text-xs text-gray-500 mb-1.5 block">Location</label>
                <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none"
                        onfocus="this.style.boxShadow='0 0 0 2px rgba(231,87,64,0.3)';"
                        onblur="this.style.boxShadow='';">
                    @foreach($locations as $loc)
                        <option value="{{ $loc }}">{{ $loc }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1">
                <label class="text-xs text-gray-500 mb-1.5 block">Property Type</label>
                <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none"
                        onfocus="this.style.boxShadow='0 0 0 2px rgba(231,87,64,0.3)';"
                        onblur="this.style.boxShadow='';">
                    @foreach($propertyTypes as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1">
                <label class="text-xs text-gray-500 mb-1.5 block">Price Range</label>
                <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none"
                        onfocus="this.style.boxShadow='0 0 0 2px rgba(231,87,64,0.3)';"
                        onblur="this.style.boxShadow='';">
                    @foreach($priceRanges as $range)
                        <option value="{{ $range }}">{{ $range }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- House Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($houses as $index => $house)
            <div class="house-card opacity-0 translate-y-6 transition-all duration-700"
                 style="transition-delay: {{ $index * 100 }}ms">
                <a href="/houses/{{ $house['id'] }}" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-52 overflow-hidden relative">
                        <img src="{{ asset($house['image']) }}" alt="{{ $house['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-[#e75740] text-white text-xs font-semibold px-2.5 py-1 rounded-full">For Sale</span>
                        <span class="absolute top-3 right-3 bg-white/90 text-gray-600 text-xs font-medium px-2.5 py-1 rounded-full">{{ $house['type'] }}</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg truncate" style="color:#262f40;">{{ $house['title'] }}</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" style="color:#e75740;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            {{ $house['location'] }}
                        </p>
                        <div class="flex items-center gap-3 mt-3 text-gray-500 text-sm">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 10V6a1 1 0 011-1h16a1 1 0 011 1v4M3 10v8h18v-8"/></svg>
                                {{ $house['bedrooms'] }} Beds
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 12a4 4 0 01-4-4V6h4m16 6a4 4 0 004-4V6h-4M4 12v5a2 2 0 002 2h12a2 2 0 002-2v-5"/></svg>
                                {{ $house['bathrooms'] }} Baths
                            </span>
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                                {{ $house['area'] }}
                            </span>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <span class="font-bold text-lg" style="color:#e75740;">${{ number_format($house['price']) }}</span>
                            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-lg">Residential</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


<script>
    // Animate all cards on scroll
    ['house-card', 'plot-card', 'car-card'].forEach(cls => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-6');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.' + cls).forEach(el => observer.observe(el));
    });
</script>


@endsection