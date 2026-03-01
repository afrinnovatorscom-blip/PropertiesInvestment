@extends('front.layouts.layouts')

@section('content')

   @php
    $services = [
        'Market Analysis and Research',
        'Financial Consultation',
        'Property Evaluation and Inspection',
        'Customized Recommendations',
        'Negotiation Support',
        'Others',
    ];
@endphp

{{-- ─── Hero ──────────────────────────────────────────────────────── --}}
<section class="relative py-32">
    <img src='assets/img/consultancy-bg.jpg' alt=""
         class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="font-display text-4xl md:text-5xl font-bold text-white
                   opacity-0 animate-[fadeSlideUp_0.5s_ease_forwards]">
            Consultancy
        </h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto text-lg
                  opacity-0 animate-[fadeSlideUp_0.5s_ease_0.2s_forwards]">
            Elevate Your Estate Strategy with Our Expert Consulting Services
        </p>
    </div>
</section>

{{-- ─── Contact Form ───────────────────────────────────────────────── --}}
<section class="py-20 bg-white dark:bg-zinc-950">
    <div class="container mx-auto px-4 max-w-2xl">

        <div class="opacity-0 animate-[fadeSlideUp_0.5s_ease_0.3s_forwards]">

            <h2 class="font-display text-2xl font-bold text-zinc-900 dark:text-zinc-100
                       text-center mb-2">
                Send Us a Message
            </h2>
            <p class="text-zinc-500 dark:text-zinc-400 text-center mb-10">
                Tailored solutions for every aspect of estate planning and management
            </p>

            @if (session('success'))
                <div class="mb-6 flex items-center gap-3 bg-green-50 dark:bg-green-900/20
                            border border-green-200 dark:border-green-700 text-green-700
                            dark:text-green-400 text-sm rounded-xl px-4 py-3">
                    <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            <form action="#" method="POST"
                  class="space-y-5 bg-white dark:bg-zinc-900 rounded-2xl p-8
                         border border-zinc-200 dark:border-zinc-700 shadow-sm">
                @csrf

                {{-- Name + Email --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name"
                               class="text-sm font-medium text-zinc-900 dark:text-zinc-100 mb-1.5 block">
                            Name
                        </label>
                        <input
                            id="name" type="text" name="name"
                            value="{{ old('name') }}"
                            placeholder="Your name" required
                            class="w-full rounded-lg border border-zinc-200 dark:border-zinc-700
                                   bg-transparent px-3 py-2 text-sm text-zinc-900 dark:text-zinc-100
                                   placeholder:text-zinc-400 focus:outline-none
                                   focus:ring-2 focus:ring-primary/50"
                        />
                        @error('name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email"
                               class="text-sm font-medium text-zinc-900 dark:text-zinc-100 mb-1.5 block">
                            Email
                        </label>
                        <input
                            id="email" type="email" name="email"
                            value="{{ old('email') }}"
                            placeholder="you@email.com" required
                            class="w-full rounded-lg border border-zinc-200 dark:border-zinc-700
                                   bg-transparent px-3 py-2 text-sm text-zinc-900 dark:text-zinc-100
                                   placeholder:text-zinc-400 focus:outline-none
                                   focus:ring-2 focus:ring-primary/50"
                        />
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Phone + Service --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="phone"
                               class="text-sm font-medium text-zinc-900 dark:text-zinc-100 mb-1.5 block">
                            Phone
                        </label>
                        <input
                            id="phone" type="text" name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+250 7XX XXX XXX"
                            class="w-full rounded-lg border border-zinc-200 dark:border-zinc-700
                                   bg-transparent px-3 py-2 text-sm text-zinc-900 dark:text-zinc-100
                                   placeholder:text-zinc-400 focus:outline-none
                                   focus:ring-2 focus:ring-primary/50"
                        />
                        @error('phone')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="service"
                               class="text-sm font-medium text-zinc-900 dark:text-zinc-100 mb-1.5 block">
                            Service
                        </label>
                        <select
                            id="service" name="service"
                            class="w-full rounded-lg border border-zinc-200 dark:border-zinc-700
                                   bg-white dark:bg-zinc-900 px-3 py-2 text-sm
                                   text-zinc-900 dark:text-zinc-100 focus:outline-none
                                   focus:ring-2 focus:ring-primary/50 cursor-pointer">
                            <option value="" disabled @selected(!old('service'))>
                                Select a service
                            </option>
                            @foreach ($services as $s)
                                <option value="{{ $s }}" @selected(old('service') === $s)>
                                    {{ $s }}
                                </option>
                            @endforeach
                        </select>
                        @error('service')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Message --}}
                <div>
                    <label for="message"
                           class="text-sm font-medium text-zinc-900 dark:text-zinc-100 mb-1.5 block">
                        Message
                    </label>
                    <textarea
                        id="message" name="message" rows="5" required
                        placeholder="Tell us how we can help..."
                        class="w-full rounded-lg border border-zinc-200 dark:border-zinc-700
                               bg-transparent px-3 py-2 text-sm text-zinc-900 dark:text-zinc-100
                               placeholder:text-zinc-400 focus:outline-none
                               focus:ring-2 focus:ring-primary/50 resize-none">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full inline-flex items-center justify-center px-8 py-3 rounded-xl
                               bg-primary text-white font-semibold text-sm
                               hover:bg-primary/90 transition-colors shadow-sm">
                    Send Message
                </button>
            </form>
        </div>

    </div>
</section>

<style>
    /* ── Color overrides ────────────────────────────────────────────────
       #2563eb (primary) → #e75740
       #111827 (zinc-900) → #262f40
    ─────────────────────────────────────────────────────────────────── */

    .text-primary                  { color: #e75740 !important; }
    .bg-primary                    { background-color: #e75740 !important; }
    .hover\:bg-primary\/90:hover   { background-color: rgba(231,87,64,0.9) !important; }
    .focus\:ring-primary\/50:focus { --tw-ring-color: rgba(231,87,64,0.5) !important; }
    .text-zinc-900                 { color: #262f40 !important; }

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
</style>
    
@endsection