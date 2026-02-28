<!-- ═══════════════════════════ HERO ═══════════════════════════ -->
<section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">

    <!-- Slideshow Images -->
    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover scale-110 opacity-0 transition-[opacity,transform] duration-[1200ms] ease-in-out" />
    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover scale-110 opacity-0 transition-[opacity,transform] duration-[1200ms] ease-in-out" />
    <img src="{{ asset('assets/img/car2.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover scale-110 opacity-0 transition-[opacity,transform] duration-[1200ms] ease-in-out" />

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center">

        <!-- Subtitle -->
        <!-- 🐛 FIX 1: was text-black (invisible over dark overlay) → changed to text-white/80 -->
        <p class="hero-anim opacity-0 translate-y-5 text-white/80 text-sm md:text-lg mb-4 transition-all duration-700"
           style="transition-delay: 200ms">
            Discover Your Perfect Property
        </p>

        <!-- Heading -->
        <h1 class="hero-anim opacity-0 translate-y-8 text-2xl sm:text-3xl md:text-6xl font-bold text-white max-w-4xl mx-auto leading-tight transition-all duration-700"
            style="transition-delay: 350ms">
            Explore Prime Plots and Homes for Sale on Our Premier Website!
        </h1>

        <!-- Search Filters -->
        <div class="hero-anim opacity-0 translate-y-8 mt-10 transition-all duration-700"
             style="transition-delay: 500ms">
            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-4 md:p-6 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">

                    <!-- Category -->
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-gray-500 text-left">Category</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Types</option>
                            <option value="house">Houses</option>
                            <option value="plot">Plots</option>
                            <option value="car">Cars</option>
                        </select>
                    </div>

                    <!-- Location -->
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-gray-500 text-left">Location</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Locations</option>
                            <option value="kigali">Kigali</option>
                            <option value="musanze">Musanze</option>
                            <option value="rubavu">Rubavu</option>
                        </select>
                    </div>

                    <!-- Price Range -->
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-gray-500 text-left">Price Range</label>
                        <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            <option value="">Any Price</option>
                            <option value="0-50000">Under $50,000</option>
                            <option value="50000-150000">$50,000 – $150,000</option>
                            <option value="150000+">$150,000+</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <div class="flex flex-col justify-end">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-medium text-sm px-4 py-2.5 rounded-lg transition-all flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z"/>
                            </svg>
                            Search
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- 🐛 FIX 2: Script was missing entirely — hero images stayed invisible
              and entrance animations never triggered -->
<script>
    // ── Hero Slideshow ─────────────────────────────────────────────
    const slides = document.querySelectorAll('.hero-slide');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0', 'scale-110');
                slide.classList.add('opacity-100', 'scale-100');
            } else {
                slide.classList.remove('opacity-100', 'scale-100');
                slide.classList.add('opacity-0', 'scale-110');
            }
        });
    }

    // Show first slide immediately on load
    showSlide(0);

    // Rotate every 5 seconds
    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 5000);

    // ── Hero Entrance Animations ───────────────────────────────────
    window.addEventListener('DOMContentLoaded', () => {
        requestAnimationFrame(() => requestAnimationFrame(() => {
            document.querySelectorAll('.hero-anim').forEach(el => {
                el.classList.remove('opacity-0', 'translate-y-5', 'translate-y-8');
                el.classList.add('opacity-100', 'translate-y-0');
            });
        }));
    });
</script>