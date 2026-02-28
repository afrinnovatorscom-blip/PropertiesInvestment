<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm">
  <div class="container mx-auto flex items-center justify-between h-16 px-4">
    
    <!-- Logo -->
    <a href="/" class="flex items-center gap-2">
      <img src="logo.png" alt="Properties Investment" class="h-10 w-auto" />
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden lg:flex items-center gap-1">
      <a href="/" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-blue-600 bg-blue-50">Home</a>
      <a href="/houses" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Houses</a>
      <a href="/plots" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Plots</a>
      <a href="/cars" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Cars</a>
      <a href="/donations" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Donations</a>
      <a href="/investment" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Investment</a>
      <a href="/partnership" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Partnership</a>
      <a href="/consultancy" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">Consultancy</a>
      <a href="/about" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">About Us</a>
    </nav>

    <!-- Desktop CTA -->
    <div class="hidden lg:block">
      <a href="/consultancy">
        <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">
          Reach to us
        </button>
      </a>
    </div>

    <!-- Mobile Hamburger -->
    <button
      class="lg:hidden p-2 text-gray-800"
      onclick="toggleMenu()"
      id="menu-btn"
      aria-label="Toggle menu"
    >
      <!-- Hamburger Icon -->
      <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
      <!-- Close Icon (hidden by default) -->
      <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

  </div>

  <!-- Mobile Menu (hidden by default) -->
  <div
    id="mobile-menu"
    class="lg:hidden hidden overflow-hidden bg-white border-t border-gray-200 transition-all duration-300"
  >
    <nav class="flex flex-col p-4 gap-1">
      <a href="/" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-blue-600 bg-blue-50">
        <!-- Home Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 5v6h4v-6m-4 0H9"/></svg>
        Home
      </a>
      <a href="/houses" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- Building Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16M3 21h18M9 21v-6h6v6"/></svg>
        Houses
      </a>
      <a href="/plots" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- MapPin Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.686 2 6 4.686 6 8c0 4.418 6 12 6 12s6-7.582 6-12c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/></svg>
        Plots
      </a>
      <a href="/cars" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- Car Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17H3v-5l2-5h14l2 5v5h-2M5 17a2 2 0 104 0M15 17a2 2 0 104 0"/></svg>
        Cars
      </a>
      <a href="/donations" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- Heart Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/></svg>
        Donations
      </a>
      <a href="/investment" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- TrendingUp Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
        Investment
      </a>
      <a href="/partnership" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- Handshake Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        Partnership
      </a>
      <a href="/consultancy" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- Users Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        Consultancy
      </a>
      <a href="/about" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100">
        <!-- Users Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        About Us
      </a>

      <!-- Mobile CTA -->
      <a href="/consultancy" onclick="closeMenu()" class="mt-2">
        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">
          Reach to us
        </button>
      </a>
    </nav>
  </div>
</header>

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');
    const isHidden = menu.classList.contains('hidden');

    menu.classList.toggle('hidden', !isHidden);
    iconOpen.classList.toggle('hidden', isHidden);
    iconClose.classList.toggle('hidden', !isHidden);
  }

  function closeMenu() {
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    menu.classList.add('hidden');
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
  }
</script>