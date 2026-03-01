@extends('front.layouts.layouts')

@section('content')

 

@php
    $benefits = [
        [
            'icon' => 'trending-up',
            'title' => 'High Returns',
            'desc' => "Rwanda's real estate market offers consistent growth and attractive ROI for investors.",
        ],
        [
            'icon' => 'shield',
            'title' => 'Secure Investment',
            'desc' => 'We ensure all properties are legally verified with clear titles and documentation.',
        ],
        [
            'icon' => 'bar-chart',
            'title' => 'Market Insights',
            'desc' => 'Get access to detailed market analysis and trends to make informed decisions.',
        ],
        [
            'icon' => 'target',
            'title' => 'Strategic Locations',
            'desc' => 'We identify prime locations with high appreciation potential across Rwanda.',
        ],
    ];

    $opportunities = [
        'Residential developments in Kigali',
        'Commercial property investments',
        'Land banking in emerging areas',
        'Mixed-use development projects',
        'Agricultural land investments',
        'Tourism and hospitality ventures',
    ];
@endphp

{{-- ─── Hero ──────────────────────────────────────────────────────── --}}
<section class="relative py-32">
    <img src='assets/img/feature-houses.jpg'alt=""
         class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="font-display text-4xl md:text-5xl font-bold text-white
                   opacity-0 animate-[fadeSlideUp_0.5s_ease_forwards]">
            Investment Opportunities
        </h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto text-lg
                  opacity-0 animate-[fadeSlideUp_0.5s_ease_0.2s_forwards]">
            Grow your wealth through strategic real estate investments in Rwanda
        </p>
    </div>
</section>

{{-- ─── Why Invest ─────────────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-zinc-950">
    <div class="container mx-auto max-w-screen-xl  px-4">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest
                         text-primary bg-primary/10 px-3 py-1 rounded-full mb-3">
                Why Invest
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-zinc-900 dark:text-zinc-100">
                Why Invest With Us
            </h2>
            <p class="mt-3 text-zinc-500 dark:text-zinc-400 max-w-xl mx-auto">
                We provide end-to-end investment support to maximize your returns
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($benefits as $i => $benefit)
                @php $delay = $i * 100; @endphp
                <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 border border-zinc-200
                            dark:border-zinc-700 shadow-sm text-center
                            opacity-0 animate-[fadeSlideUp_0.5s_ease_{{ $delay }}ms_forwards]">

                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center
                                justify-center mx-auto mb-4">
                        @if ($benefit['icon'] === 'trending-up')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0
                                         015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94
                                         2.28l-2.28 5.941"/>
                            </svg>
                        @elseif ($benefit['icon'] === 'shield')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959
                                         11.959 0 013.598 6 11.99 11.99 0 003 9.749c0
                                         5.592 3.824 10.29 9 11.623 5.176-1.332
                                         9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196
                                         0-6.1-1.248-8.25-3.285z"/>
                            </svg>
                        @elseif ($benefit['icon'] === 'bar-chart')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621
                                         0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996
                                         21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75z
                                         M9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621
                                         0 1.125.504 1.125 1.125v11.25c0 .621-.504
                                         1.125-1.125 1.125h-2.25a1.125 1.125 0
                                         01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125
                                         1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0
                                         .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0
                                         01-1.125-1.125V4.125z"/>
                            </svg>
                        @elseif ($benefit['icon'] === 'target')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 21a9 9 0 100-18 9 9 0 000 18z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 15a3 3 0 100-6 3 3 0 000 6z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 3v2m0 14v2M3 12h2m14 0h2"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="font-display text-lg font-semibold text-zinc-900
                               dark:text-zinc-100 mb-2">
                        {{ $benefit['title'] }}
                    </h3>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">
                        {{ $benefit['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── Opportunities ──────────────────────────────────────────────── --}}
<section class="py-20 bg-zinc-50 dark:bg-zinc-900/50">
    <div class="container mx-auto px-4 max-w-4xl">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest
                         text-primary bg-primary/10 px-3 py-1 rounded-full mb-3">
                Opportunities
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-zinc-900 dark:text-zinc-100">
                Investment Opportunities
            </h2>
            <p class="mt-3 text-zinc-500 dark:text-zinc-400 max-w-xl mx-auto">
                Explore diverse real estate investment options across Rwanda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($opportunities as $i => $item)
                @php $delay = $i * 80; @endphp
                <div class="flex items-center gap-3 bg-white dark:bg-zinc-900 rounded-xl p-4
                            border border-zinc-200 dark:border-zinc-700
                            opacity-0 animate-[fadeSlideLeft_0.4s_ease_{{ $delay }}ms_forwards]">
                    <svg class="w-5 h-5 text-primary shrink-0" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-zinc-900 dark:text-zinc-100 font-medium">{{ $item }}</span>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="#"
               class="inline-flex items-center justify-center px-8 py-3 rounded-xl
                      bg-primary text-white font-semibold text-sm
                      hover:bg-primary/90 transition-colors shadow-sm">
                Start Investing Today
            </a>
        </div>
    </div>
</section>

<style>
    /* ── Color overrides ────────────────────────────────────────────────
       #2563eb (Tailwind primary / blue-600) → #e75740
       #111827 (Tailwind zinc-900)           → #262f40
    ─────────────────────────────────────────────────────────────────── */

    .text-primary                   { color: #e75740 !important; }
    .bg-primary                     { background-color: #e75740 !important; }
    .bg-primary\/10                 { background-color: rgba(231,87,64,0.1) !important; }
    .hover\:bg-primary\/90:hover    { background-color: rgba(231,87,64,0.9) !important; }
    .text-zinc-900                  { color: #262f40 !important; }

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeSlideLeft {
        from { opacity: 0; transform: translateX(-20px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    /* Staggered animation delays for benefit cards */
    [style*="0ms"]   { animation-delay: 0ms; }
    [style*="100ms"] { animation-delay: 100ms; }
    [style*="200ms"] { animation-delay: 200ms; }
    [style*="300ms"] { animation-delay: 300ms; }

    /* Staggered delays for opportunity rows */
    [style*="80ms"]  { animation-delay: 80ms; }
    [style*="160ms"] { animation-delay: 160ms; }
    [style*="240ms"] { animation-delay: 240ms; }
    [style*="320ms"] { animation-delay: 320ms; }
    [style*="400ms"] { animation-delay: 400ms; }
    [style*="480ms"] { animation-delay: 480ms; }
</style>
    

@endsection