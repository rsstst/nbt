<nav class="bg-secondary text-white">
    <div class="flex items-center justify-between px-8 py-4">
        <div class="shrink-0">
            <img src="https://placehold.co/120x75" alt="Logo">
        </div>

        {{-- Desktop --}}
        <div class="hidden md:flex md:space-x-8">
            <a href="/" class="hover:text-gray-300 transition-colors">Beranda</a>
            <a href="/services" class="hover:text-gray-300 transition-colors">Layanan</a>
            <a href="/portfolio" class="hover:text-gray-300 transition-colors">Portfolio</a>
            <a href="/contact" class="hover:text-gray-300 transition-colors">Kontak</a>
            <a href="/about" class="hover:text-gray-300 transition-colors">Tentang Kami</a>
        </div>

        {{-- Mobile --}}
        <button 
            id="mobile-menu-button" 
            class="md:hidden flex flex-col gap-1.5 p-2 focus:outline-none"
            aria-label="Toggle mobile menu"
        >
            <span class="block h-0.5 w-6 bg-white transition-all duration-300"></span>
            <span class="block h-0.5 w-6 bg-white transition-all duration-300"></span>
            <span class="block h-0.5 w-6 bg-white transition-all duration-300"></span>
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden px-8 pb-4">
        <div class="flex flex-col space-y-4">
            <a href="/" class="hover:text-gray-300 transition-colors">Beranda</a>
            <a href="/services" class="hover:text-gray-300 transition-colors">Layanan</a>
            <a href="/portfolio" class="hover:text-gray-300 transition-colors">Portfolio</a>
            <a href="/contact" class="hover:text-gray-300 transition-colors">Kontak</a>
            <a href="/about" class="hover:text-gray-300 transition-colors">Tentang Kami</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>