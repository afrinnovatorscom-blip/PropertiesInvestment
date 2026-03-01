@extends('front.layouts.layouts')

@section('content')


@php


    $plots = [
        ['id' => 'p1', 'title' => 'Residential Land - Bugesera',      'location' => 'Bugesera',          'price' => 262584,  'area' => '21,882 m²', 'type' => 'Residential Land', 'image' => 'assets/img/plot1.jpg'],
        ['id' => 'p2', 'title' => 'Commercial Plot - Kicukiro',        'location' => 'Kicukiro',          'price' => 1300000, 'area' => '14,000 m²', 'type' => 'Commercial',       'image' => 'assets/img/plot2.jpg'],
        ['id' => 'p3', 'title' => 'Industrial Land - Masoro',          'location' => 'Masoro, Kigali',    'price' => 2000000, 'area' => '3,980 m²',  'type' => 'Industrial',       'image' => 'assets/img/feature-plots.jpg'],
        ['id' => 'p4', 'title' => 'Agricultural Land - Ngoma',         'location' => 'Ngoma District',    'price' => 200000,  'area' => '20 hectares','type' => 'Agricultural',     'image' => 'assets/img/plot1.jpg'],
        ['id' => 'p5', 'title' => 'Mixed Use Commercial - Bugesera',   'location' => 'Bugesera, Kanzenze','price' => 98000,   'area' => '6,295 m²',  'type' => 'Mixed Use',        'image' => 'assets/img/plot2.jpg'],
        ['id' => 'p6', 'title' => 'Residential Plot - Nyagatare',      'location' => 'Nyagatare',         'price' => 45000,   'area' => '1,200 m²',  'type' => 'Residential Land', 'image' => 'assets/img/feature-plots.jpg'],
    ];

  

    $locations    = ['All locations','Bugesera','Gasabo','Kicukiro','Nyarugenge','Musanze','Rubavu','Huye','Nyagatare','Ngoma','Kamonyi'];
    $plotTypes    = ['All types','Residential Land','Commercial','Industrial','Agricultural','Mixed Use'];
    $priceRanges  = ['Any price','$0 - $100,000','$100,000 - $300,000','$300,000 - $500,000','$500,000 - $1,000,000','$1,000,000+'];
@endphp


{{-- ═══════════════ PLOTS SECTION ═══════════════ --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto max-w-screen-xl  px-4">

        <div class="text-center mb-10">
            <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-2">Plots</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Land & Plots for Sale</h2>
            <p class="text-gray-500 mt-2">Explore prime land across Rwanda for every purpose</p>
        </div>

        {{-- Filters --}}
        <div class="flex flex-col md:flex-row gap-4 mb-10 bg-white rounded-xl p-6 border border-gray-200">
            <div class="flex-1">
                <label class="text-xs text-gray-500 mb-1.5 block">Location</label>
                <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($locations as $loc)
                        <option value="{{ $loc }}">{{ $loc }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1">
                <label class="text-xs text-gray-500 mb-1.5 block">Plot Type</label>
                <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($plotTypes as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1">
                <label class="text-xs text-gray-500 mb-1.5 block">Price Range</label>
                <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($priceRanges as $range)
                        <option value="{{ $range }}">{{ $range }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Plot Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($plots as $index => $plot)
            <div class="plot-card opacity-0 translate-y-6 transition-all duration-700"
                 style="transition-delay: {{ $index * 100 }}ms">
                <a href="/plots/{{ $plot['id'] }}" class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="h-52 overflow-hidden relative">
                        <img src="{{ asset($plot['image']) }}" alt="{{ $plot['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2.5 py-1 rounded-full">For Sale</span>
                        <span class="absolute top-3 right-3 bg-white/90 text-gray-600 text-xs font-medium px-2.5 py-1 rounded-full">{{ $plot['type'] }}</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-gray-900 text-lg truncate">{{ $plot['title'] }}</h3>
                        <p class="flex items-center gap-1.5 text-gray-500 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                            {{ $plot['location'] }}
                        </p>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                            <span class="text-blue-600 font-bold text-lg">${{ number_format($plot['price']) }}</span>
                            <span class="text-gray-400 text-sm">{{ $plot['area'] }}</span>
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

<style>
    /* ── Color overrides ────────────────────────────────────────────────
       #2563eb (blue-600 / blue-500) → #e75740
       #111827 (gray-900)            → #262f40
    ─────────────────────────────────────────────────────────────────── */

    .text-blue-600              { color: #e75740 !important; }
    .text-blue-500              { color: #e75740 !important; }
    .bg-blue-600                { background-color: #e75740 !important; }
    .bg-blue-50                 { background-color: rgba(231,87,64,0.08) !important; }
    .focus\:ring-blue-500:focus { --tw-ring-color: #e75740 !important; }
    .text-gray-900              { color: #262f40 !important; }
</style>

@endsection