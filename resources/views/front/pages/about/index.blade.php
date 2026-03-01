@extends('front.layouts.layouts')

@section('content')

@php
    $stats = [
        ['icon' => 'building',  'value' => '500+',   'label' => 'Properties Listed'],
        ['icon' => 'users',     'value' => '1,200+', 'label' => 'Happy Clients'],
        ['icon' => 'award',     'value' => '10+',    'label' => 'Years Experience'],
        ['icon' => 'globe',     'value' => '30+',    'label' => 'Locations Covered'],
    ];

    $services = [
        [
            'icon'  => 'search',
            'title' => 'Market Analysis & Research',
            'desc'  => 'Comprehensive market analysis providing valuable insights to help you make informed decisions.',
        ],
        [
            'icon'  => 'dollar',
            'title' => 'Financial Consultation',
            'desc'  => 'Expert financial guidance designed to lead you towards optimal financial health and growth.',
        ],
        [
            'icon'  => 'clipboard',
            'title' => 'Property Evaluation & Inspection',
            'desc'  => 'Accurate property assessments and thorough inspections to guarantee value and integrity.',
        ],
        [
            'icon'  => 'target',
            'title' => 'Customized Recommendations',
            'desc'  => 'Tailored solutions specifically designed to address your individual requirements and goals.',
        ],
        [
            'icon'  => 'handshake',
            'title' => 'Negotiation Support',
            'desc'  => 'Professional negotiation services to help you achieve the best possible outcomes in your transactions.',
        ],
        [
            'icon'  => 'sparkles',
            'title' => 'Specialized Services',
            'desc'  => 'A variety of other specialized services designed to meet your unique needs across Rwanda.',
        ],
    ];
@endphp

{{-- ─── Hero ──────────────────────────────────────────────────────── --}}
<section class="relative py-32">
    <img src='assets/img/hero-bg.jpg' alt=""
         class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="font-display text-4xl md:text-5xl font-bold text-white
                   opacity-0 animate-[fadeSlideUp_0.5s_ease_forwards]">
            About Us
        </h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto text-lg
                  opacity-0 animate-[fadeSlideUp_0.5s_ease_0.2s_forwards]">
            Our Mission is to Provide the Best Services in Rwanda
        </p>
    </div>
</section>

{{-- ─── About Content ──────────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-zinc-950">
    <div class="container mx-auto max-w-screen-xl  px-4">
        <div class="max-w-3xl mx-auto">

            {{-- Section Header --}}
            <div class="mb-10">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest
                             px-3 py-1 rounded-full mb-3"
                      style="color:#e75740; background-color:rgba(231,87,64,0.1);">
                    Our Story
                </span>
                <h2 class="font-display text-3xl md:text-4xl font-bold dark:text-zinc-100"
                    style="color:#262f40;">
                    Who We Are
                </h2>
            </div>

            <div class="space-y-4 text-zinc-500 dark:text-zinc-400 leading-relaxed">
                <p>
                    At Properties Investment, we are dedicated to offering top-notch services in Rwanda. Our expertise spans a wide range of areas, ensuring we meet all your unique needs effectively.
                </p>
                <p>
                    We specialize in comprehensive market analysis and research, providing valuable insights to help you make informed decisions. Our financial consultation services are designed to guide you towards optimal financial health and growth.
                </p>
                <p>
                    Property evaluation and inspection are crucial elements of our service portfolio. We ensure your properties are accurately assessed and thoroughly inspected to guarantee their value and integrity.
                </p>
                <p>
                    Our customized recommendations are specifically designed to address your individual requirements, ensuring that our solutions are perfectly aligned with your goals. In addition, we offer property evaluation and inspection services, ensuring that your investments are sound and reliable.
                </p>
                <p>
                    Our negotiation support services help you achieve the best possible outcomes in your transactions. We also provide a variety of other specialized services to meet your needs. Discover more about how we can assist you by exploring our detailed offerings.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ─── Services ───────────────────────────────────────────────────── --}}
<section class="py-20 bg-zinc-50 dark:bg-zinc-900/50">
    <div class="container mx-auto max-w-screen-xl  px-4">

        {{-- Section Header --}}
        <div class="text-center mb-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest
                         px-3 py-1 rounded-full mb-3"
                  style="color:#e75740; background-color:rgba(231,87,64,0.1);">
                What We Do
            </span>
            <h2 class="font-display text-3xl md:text-4xl font-bold dark:text-zinc-100"
                style="color:#262f40;">
                Our Services
            </h2>
            <p class="mt-3 text-zinc-500 dark:text-zinc-400 max-w-xl mx-auto">
                Comprehensive solutions tailored to your needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $i => $service)
                <div class="bg-white dark:bg-zinc-900 rounded-2xl border border-zinc-200
                            dark:border-zinc-700 p-6
                            opacity-0 animate-[fadeSlideUp_0.5s_ease_{{ $i * 100 }}ms_forwards]">

                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4"
                         style="background-color:rgba(231,87,64,0.1);">
                        @if ($service['icon'] === 'search')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z"/>
                            </svg>
                        @elseif ($service['icon'] === 'dollar')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242
                                         0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768
                                         12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303
                                         0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        @elseif ($service['icon'] === 'clipboard')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        @elseif ($service['icon'] === 'target')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 21a9 9 0 100-18 9 9 0 000 18z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 15a3 3 0 100-6 3 3 0 000 6z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 3v2m0 14v2M3 12h2m14 0h2"/>
                            </svg>
                        @elseif ($service['icon'] === 'handshake')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993
                                         l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125
                                         1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0
                                         015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z"/>
                            </svg>
                        @elseif ($service['icon'] === 'sparkles')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0
                                         00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0
                                         003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0
                                         003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0
                                         00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375
                                         3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375
                                         0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0
                                         002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0
                                         00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25
                                         2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25
                                         0 001.423-1.423L16.5 15.75l.394 1.183a2.25 2.25 0
                                         001.423 1.423L19.5 18.75l-1.183.394a2.25 2.25 0
                                         00-1.423 1.423z"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="font-display text-lg font-semibold dark:text-zinc-100 mb-2"
                        style="color:#262f40;">
                        {{ $service['title'] }}
                    </h3>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">
                        {{ $service['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── Stats ──────────────────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-zinc-950">
    <div class="container mx-auto max-w-screen-xl  px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach ($stats as $i => $stat)
                <div class="text-center
                            opacity-0 animate-[fadeSlideUp_0.5s_ease_{{ $i * 100 }}ms_forwards]">

                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mx-auto mb-4"
                         style="background-color:rgba(231,87,64,0.1);">
                        @if ($stat['icon'] === 'building')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5
                                         3.75h1.5m-1.5 3.75h1.5m3-7.5H15m-1.5 3.75H15m-1.5 3.75H15
                                         M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621
                                         0 1.125.504 1.125 1.125V21"/>
                            </svg>
                        @elseif ($stat['icon'] === 'users')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0
                                         004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003
                                         c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318
                                         0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375
                                         6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375
                                         3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625
                                         2.625 0 015.25 0z"/>
                            </svg>
                        @elseif ($stat['icon'] === 'award')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375
                                         c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375
                                         c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007
                                         0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454
                                         0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003
                                         6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99
                                         2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12
                                         2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726
                                         6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966
                                         3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52
                                         6.003 6.003 0 01-5.395 5.492m0 0a6.726 6.726 0
                                         01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/>
                            </svg>
                        @elseif ($stat['icon'] === 'globe')
                            <svg class="w-6 h-6" style="color:#e75740;" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004
                                         0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485
                                         3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0
                                         0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0
                                         00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5
                                         c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959
                                         0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919
                                         17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247
                                         m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                            </svg>
                        @endif
                    </div>

                    <h3 class="font-display text-3xl font-bold dark:text-zinc-100"
                        style="color:#262f40;">
                        {{ $stat['value'] }}
                    </h3>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">
                        {{ $stat['label'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection