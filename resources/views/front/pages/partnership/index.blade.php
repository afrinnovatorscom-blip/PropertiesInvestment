@extends('front.layouts.layouts')

@section('content')


@php
    $partnerTypes = [
        [
            'icon' => 'handshake',
            'title' => 'Real Estate Agents',
            'desc' => 'Join our network of trusted agents and access exclusive listings and commissions.',
        ],
        [
            'icon' => 'users',
            'title' => 'Property Developers',
            'desc' => 'Partner with us to market and sell your developments to our growing client base.',
        ],
        [
            'icon' => 'globe',
            'title' => 'International Partners',
            'desc' => 'Connect with diaspora investors looking for properties in Rwanda.',
        ],
        [
            'icon' => 'award',
            'title' => 'Corporate Partners',
            'desc' => 'Collaborate on large-scale projects and corporate real estate needs.',
        ],
    ];

    $benefits = [
        'Access to a wide network of buyers and sellers',
        'Marketing and promotional support',
        'Competitive commission structures',
        'Training and professional development',
        'Shared resources and technology',
        'Brand visibility and co-branding opportunities',
    ];
    @endphp

{{-- ─── Hero ──────────────────────────────────────────────────────── --}}
<section class="relative py-32">
    <img src='assets/img/feature-plots.jpg'alt=""
         class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="font-display text-4xl md:text-5xl font-bold text-white
                   opacity-0 animate-[fadeSlideUp_0.5s_ease_forwards]">
            Partnership
        </h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto text-lg
                  opacity-0 animate-[fadeSlideUp_0.5s_ease_0.2s_forwards]">
            Grow together with us — explore partnership opportunities in Rwanda's real estate market
        </p>
    </div>
</section>

{{-- ─── Partnership Types ──────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-zinc-950">
    <div class="container mx-auto max-w-screen-xl  px-4">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest
                         text-primary bg-primary/10 px-3 py-1 rounded-full mb-3">
                Partners
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-zinc-900 dark:text-zinc-100">
                Partnership Opportunities
            </h2>
            <p class="mt-3 text-zinc-500 dark:text-zinc-400 max-w-xl mx-auto">
                We welcome partners who share our vision for transforming Rwanda's real estate landscape
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($partnerTypes as $i => $partner)
                <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 border border-zinc-200
                            dark:border-zinc-700 shadow-sm text-center
                            opacity-0 animate-[fadeSlideUp_0.5s_ease_{{ $i * 100 }}ms_forwards]">

                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center
                                justify-center mx-auto mb-4">
                        @if ($partner['icon'] === 'handshake')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993
                                         l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125
                                         1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0
                                         015.513 7.5h12.974c.576 0 1.059.435 1.119
                                         1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375
                                         0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375
                                         0 01.75 0z"/>
                            </svg>
                        @elseif ($partner['icon'] === 'users')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337
                                         0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15
                                         19.128v-.003c0-1.113-.285-2.16-.786-3.07M15
                                         19.128v.106A12.318 12.318 0 018.624 21c-2.331
                                         0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375
                                         0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75
                                         0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625
                                         0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                            </svg>
                        @elseif ($partner['icon'] === 'globe')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004
                                         9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03
                                         4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515
                                         3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997
                                         8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0
                                         0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686
                                         0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284
                                         2.253m0 0A17.919 17.919 0 0112 16.5c-3.162
                                         0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0
                                         013 12c0-1.605.42-3.113 1.157-4.418"/>
                            </svg>
                        @elseif ($partner['icon'] === 'award')
                            <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0
                                         013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871
                                         M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872
                                         m5.007 0H9.497m5.007 0a7.454 7.454 0
                                         01-.982-3.172M9.497 14.25a7.454 7.454 0
                                         00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003
                                         6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966
                                         3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41
                                         9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516
                                         M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5
                                         c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32
                                         46.32 0 012.916.52 6.003 6.003 0 01-5.395
                                         5.492m0 0a6.726 6.726 0 01-2.749 1.35m0
                                         0a6.772 6.772 0 01-3.044 0"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="font-display text-lg font-semibold text-zinc-900
                               dark:text-zinc-100 mb-2">
                        {{ $partner['title'] }}
                    </h3>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">
                        {{ $partner['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── Benefits ───────────────────────────────────────────────────── --}}
<section class="py-20 bg-zinc-50 dark:bg-zinc-900/50">
    <div class="container mx-auto px-4 max-w-4xl">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest
                         text-primary bg-primary/10 px-3 py-1 rounded-full mb-3">
                Benefits
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-zinc-900 dark:text-zinc-100">
                Why Partner With Us
            </h2>
            <p class="mt-3 text-zinc-500 dark:text-zinc-400 max-w-xl mx-auto">
                Enjoy exclusive benefits when you join our partner network
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($benefits as $i => $item)
                <div class="flex items-center gap-3 bg-white dark:bg-zinc-900 rounded-xl p-4
                            border border-zinc-200 dark:border-zinc-700
                            opacity-0 animate-[fadeSlideLeft_0.4s_ease_{{ $i * 80 }}ms_forwards]">
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
                Become a Partner
            </a>
        </div>
    </div>
</section>

<style>
    /* ── Color overrides ────────────────────────────────────────────────
       #2563eb (primary) → #e75740
       #111827 (zinc-900) → #262f40
    ─────────────────────────────────────────────────────────────────── */

    .text-primary                { color: #e75740 !important; }
    .bg-primary                  { background-color: #e75740 !important; }
    .bg-primary\/10              { background-color: rgba(231,87,64,0.1) !important; }
    .hover\:bg-primary\/90:hover { background-color: rgba(231,87,64,0.9) !important; }
    .text-zinc-900               { color: #262f40 !important; }

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeSlideLeft {
        from { opacity: 0; transform: translateX(-20px); }
        to   { opacity: 1; transform: translateX(0); }
    }
</style>

@endsection