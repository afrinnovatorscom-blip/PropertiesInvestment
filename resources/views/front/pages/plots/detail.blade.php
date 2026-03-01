@extends('front.layouts.layouts')

@section('content')
@php
    // Example: $property would be passed from the controller
    // Here we mock one for reference — replace with controller data
    $property = $property ?? [
        'id'           => 'h1',
        'title'        => 'Modern Luxury Apartment',
        'location'     => 'Kicukiro, Kigali',
        'price'        => 250000,
        'image'        => asset('assets/img/house1.jpg'),
        'images'       => [asset('assets/img/house1.jpg'), asset('assets/img/house2.jpg'), asset('assets/img/house3.jpg')],
        'type'         => 'house',
        'bedrooms'     => 4,
        'bathrooms'    => 3,
        'area'         => '320 m²',
        'description'  => 'Stunning modern apartment with panoramic views, premium finishes, and spacious living areas.',
        'propertyType' => 'Apartment',
        'furnished'    => true,
        'parking'      => 2,
        'floors'       => 3,
        'features'     => [
            'Spacious living room with modern finishes',
            'Fully equipped kitchen with granite countertops',
            'Master bedroom with en-suite bathroom',
            'Private balcony with city views',
            '24/7 security with CCTV surveillance',
            'Secure parking for 2 vehicles',
            'Backup water and electricity',
            'High-speed internet ready',
        ],
        'contactName'  => 'Jean Claude',
        'contactPhone' => '+250 788 123 456',
        'contactEmail' => 'info@propertiesinvest.com',
        'refNumber'    => 'PI-H001',
    ];

    $backLink  = $property['type'] === 'plot' ? '/plots' : '/houses';
    $backLabel = $property['type'] === 'plot' ? 'Plots'  : 'Houses';
@endphp

<section class="py-8">
    <div class="container mx-auto px-4">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="/" class="hover:text-gray-700 transition-colors">Home</a>
            <span>/</span>
            <a href="{{ $backLink }}" class="hover:text-gray-700 transition-colors">{{ $backLabel }}</a>
            <span>/</span>
            <span class="text-gray-800 truncate max-w-[200px]">{{ $property['title'] }}</span>
        </nav>

        {{-- Page Title --}}
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">{{ $property['title'] }}</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- ── Left / Main Column ────────────────────────────────── --}}
            <div class="lg:col-span-2 space-y-8">

                {{-- Image Gallery --}}
                <div x-data="{ active: 0 }">
                    {{-- Main Image --}}
                    <div class="rounded-2xl overflow-hidden h-72 md:h-96 bg-gray-100 mb-3">
                        @foreach($property['images'] as $i => $img)
                            <img
                                src="{{ $img }}"
                                alt="{{ $property['title'] }} image {{ $i + 1 }}"
                                class="w-full h-full object-cover transition-opacity duration-300"
                                x-show="active === {{ $i }}"
                            />
                        @endforeach
                    </div>
                    {{-- Thumbnails --}}
                    <div class="flex gap-3">
                        @foreach($property['images'] as $i => $img)
                            <button
                                type="button"
                                @click="active = {{ $i }}"
                                :class="active === {{ $i }} ? 'ring-2 ring-blue-600' : 'ring-1 ring-gray-200'"
                                class="w-20 h-14 rounded-lg overflow-hidden flex-shrink-0 focus:outline-none"
                            >
                                <img src="{{ $img }}" alt="thumb" class="w-full h-full object-cover" />
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Property Details --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9.75 12 3l9 6.75V21H3V9.75Z"/><path d="M9 21V12h6v9"/>
                        </svg>
                        Property Details
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-0 divide-y divide-gray-100">

                        @if(!empty($property['propertyType']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9.75 12 3l9 6.75V21H3V9.75Z"/></svg>
                                    Property Type
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['propertyType'] }}</span>
                            </div>
                        @endif

                        <div class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2 text-sm text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 21c-4.418 0-8-4.03-8-9a8 8 0 1 1 16 0c0 4.97-3.582 9-8 9z"/><circle cx="12" cy="12" r="3"/></svg>
                                Location
                            </span>
                            <span class="text-sm font-medium text-gray-900">{{ $property['location'] }}</span>
                        </div>

                        @if(isset($property['bedrooms']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 20v-6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v6"/><path d="M2 14v-4a2 2 0 0 1 2-2h3"/><path d="M22 14v-4a2 2 0 0 0-2-2h-3"/><rect x="7" y="8" width="10" height="4" rx="1"/></svg>
                                    Bedrooms
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['bedrooms'] }}</span>
                            </div>
                        @endif

                        @if(isset($property['bathrooms']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 6 6.5 3.5a1.5 1.5 0 0 0-1-.5C4.683 3 4 3.683 4 4.5V17a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5"/><line x1="10" y1="5" x2="8" y2="7"/><line x1="2" y1="12" x2="22" y2="12"/></svg>
                                    Bathrooms
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['bathrooms'] }}</span>
                            </div>
                        @endif

                        @if(!empty($property['area']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"/></svg>
                                    Plot Size / Area
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['area'] }}</span>
                            </div>
                        @endif

                        @if(isset($property['floors']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5z"/><path d="m2 17 10 5 10-5"/><path d="m2 12 10 5 10-5"/></svg>
                                    Total Floors
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['floors'] }}</span>
                            </div>
                        @endif

                        @if(isset($property['furnished']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                                    Furnished
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['furnished'] ? 'Yes' : 'No' }}</span>
                            </div>
                        @endif

                        @if(isset($property['parking']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v4h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                                    Parking
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['parking'] }} car(s)</span>
                            </div>
                        @endif

                        @if(!empty($property['refNumber']))
                            <div class="flex items-center justify-between py-3">
                                <span class="flex items-center gap-2 text-sm text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><path d="M9 9h6M9 13h4"/></svg>
                                    Ref Number
                                </span>
                                <span class="text-sm font-medium text-gray-900">{{ $property['refNumber'] }}</span>
                            </div>
                        @endif

                    </div>
                </div>

                {{-- Description & Features --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Property Description</h2>
                    <p class="text-gray-500 leading-relaxed mb-6">{{ $property['description'] }}</p>

                    @if(!empty($property['features']))
                        <h3 class="font-semibold text-gray-900 mb-3">Key Features</h3>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            @foreach($property['features'] as $feature)
                                <li class="flex items-start gap-2 text-sm text-gray-500">
                                    <svg class="w-4 h-4 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                {{-- Contact Details --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                    <h2 class="text-xl font-semibold text-gray-900 mb-1">Contact Details</h2>
                    <p class="text-sm text-gray-400 mb-5">Please use the details below to book a visit of the property.</p>

                    <div class="space-y-3">

                        @if(!empty($property['contactName']))
                            <div class="flex items-center gap-4 p-3 rounded-xl bg-gray-50">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs text-gray-400">Contact Name</span>
                                    <p class="text-sm font-semibold text-gray-900">{{ $property['contactName'] }}</p>
                                </div>
                            </div>
                        @endif

                        @if(!empty($property['contactPhone']))
                            <a href="tel:{{ $property['contactPhone'] }}"
                               class="flex items-center gap-4 p-3 rounded-xl bg-gray-50 hover:bg-blue-50 transition-colors group">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.6 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs text-gray-400">Cell Phone</span>
                                    <p class="text-sm font-semibold text-blue-600 group-hover:underline">{{ $property['contactPhone'] }}</p>
                                </div>
                            </a>
                        @endif

                        @if(!empty($property['contactEmail']))
                            <a href="mailto:{{ $property['contactEmail'] }}"
                               class="flex items-center gap-4 p-3 rounded-xl bg-gray-50 hover:bg-blue-50 transition-colors group">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs text-gray-400">Email Address</span>
                                    <p class="text-sm font-semibold text-blue-600 group-hover:underline">{{ $property['contactEmail'] }}</p>
                                </div>
                            </a>
                        @endif

                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 mt-6">
                        <a href="tel:{{ $property['contactPhone'] ?? '+250788000000' }}"
                           class="flex-1 flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.6 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            Call Now
                        </a>
                        <a href="mailto:{{ $property['contactEmail'] ?? 'info@propertiesinvest.com' }}"
                           class="flex-1 flex items-center justify-center gap-2 border border-gray-200 hover:bg-gray-50 text-gray-700 text-sm font-semibold px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/>
                            </svg>
                            Send Email
                        </a>
                    </div>
                </div>

            </div>{{-- end main column --}}

            {{-- ── Sticky Sidebar ────────────────────────────────────── --}}
            <div>
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm sticky top-24">

                    {{-- Sidebar Header --}}
                    <div class="bg-gray-900 text-white p-4">
                        <h3 class="text-lg font-semibold text-center">Book a Visit</h3>
                    </div>

                    {{-- Price Badge --}}
                    <div class="text-center py-4 border-b border-gray-100">
                        <span class="text-2xl font-bold text-blue-600">${{ number_format($property['price']) }}</span>
                        <span class="text-sm text-gray-400 ml-1">USD</span>
                    </div>

                    {{-- Visit Request Form --}}
                    <form method="POST" action="{{ route('visit.request') }}" class="p-5 space-y-4">
                        @csrf
                        <input type="hidden" name="property_id" value="{{ $property['id'] }}" />
                        <input type="hidden" name="property_title" value="{{ $property['title'] }}" />

                        <div>
                            <label for="visitor_name" class="text-xs font-medium text-gray-400 mb-1 block">Full Name *</label>
                            <input id="visitor_name" name="visitor_name" type="text" placeholder="Your full name" required
                                class="w-full h-10 rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                        </div>

                        <div>
                            <label for="visitor_email" class="text-xs font-medium text-gray-400 mb-1 block">Email</label>
                            <input id="visitor_email" name="visitor_email" type="email" placeholder="you@email.com"
                                class="w-full h-10 rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                        </div>

                        <div>
                            <label for="visitor_phone" class="text-xs font-medium text-gray-400 mb-1 block">Phone Number *</label>
                            <input id="visitor_phone" name="visitor_phone" type="tel" placeholder="+250 7XX XXX XXX" required
                                class="w-full h-10 rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                        </div>

                        <div>
                            <label for="visit_date" class="text-xs font-medium text-gray-400 mb-1 block">Preferred Date *</label>
                            <input id="visit_date" name="visit_date" type="date" required
                                min="{{ date('Y-m-d') }}"
                                class="w-full h-10 rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                        </div>

                        <div>
                            <label for="visitor_message" class="text-xs font-medium text-gray-400 mb-1 block">Message</label>
                            <textarea id="visitor_message" name="visitor_message" rows="3" placeholder="Any questions..."
                                class="w-full rounded-lg border border-gray-200 bg-gray-50 px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.6 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            Request Visit
                        </button>

                        {{-- Share button (JS-driven, no form action needed) --}}
                        <button type="button"
                            onclick="navigator.share ? navigator.share({ title: '{{ addslashes($property['title']) }}', url: window.location.href }) : navigator.clipboard.writeText(window.location.href).then(() => alert('Link copied!'))"
                            class="w-full flex items-center justify-center gap-2 border border-gray-200 hover:bg-gray-50 text-gray-700 text-sm font-semibold px-4 py-3 rounded-xl transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>
                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                            </svg>
                            Share Property
                        </button>

                    </form>
                </div>
            </div>{{-- end sidebar --}}

        </div>{{-- end grid --}}

        {{-- Similar Properties --}}
        @if(!empty($similar) && count($similar) > 0)
            <div class="mt-16">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Similar Properties</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($similar as $item)
                        <a href="/{{ $item['type'] === 'plot' ? 'plots' : 'houses' }}/{{ $item['id'] }}"
                           class="group bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 text-sm mb-1 truncate">{{ $item['title'] }}</h3>
                                <p class="text-xs text-gray-400 mb-2">{{ $item['location'] }}</p>
                                <span class="text-blue-600 font-bold text-sm">${{ number_format($item['price']) }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@endsection