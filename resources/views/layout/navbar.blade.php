<nav class="bg-secondary text-white">
    <div class="flex items-center justify-between px-8 py-4">
        <div class="shrink-0">
            <img src="https://placehold.co/120x75" alt="Logo">
        </div>

        {{-- Desktop --}}
        <div class="hidden md:flex md:space-x-8">
            <a href="/" class="hover:text-gray-300 transition-colors">Beranda</a>
            <div class="relative group pb-2">
                <span class="inline-flex items-center gap-2 hover:text-gray-300 transition-colors hover:cursor-pointer">
                    Layanan
                    <span class="inline-block text-xs">▾</span>
                </span>
                <div
                    class="absolute left-0 top-full hidden min-w-48 rounded-md bg-secondary/95 shadow-lg ring-1 ring-white/10 group-hover:block group-focus-within:block"
                    role="menu"
                    aria-label="Layanan submenu"
                >
                    <a href="/services/it" class="block px-4 py-2 hover:text-gray-300 transition-colors" role="menuitem">IT</a>
                    <a href="/services/design" class="block px-4 py-2 hover:text-gray-300 transition-colors" role="menuitem">Desain</a>
                </div>
            </div>

            <div class="relative group pb-2">
                <span class="inline-flex items-center gap-2 hover:text-gray-300 transition-colors hover:cursor-pointer">
                    Portfolio
                    <span class="inline-block text-xs">▾</span>
                </span>
                <div
                    id="portfolio-menu"
                    class="absolute left-0 top-full hidden min-w-48 rounded-md bg-secondary/95 shadow-lg ring-1 ring-white/10 group-hover:block group-focus-within:block"
                    role="menu"
                    aria-label="Portfolio submenu"
                >
                    <a href="/portfolio/it" class="block px-4 py-2 hover:text-gray-300 transition-colors" role="menuitem">IT</a>
                    <a href="/portfolio/design" class="block px-4 py-2 hover:text-gray-300 transition-colors" role="menuitem">Desain</a>
                </div>
            </div>

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
            <div class="flex flex-col gap-2">
                <button
                    id="mobile-services-menu-button"
                    type="button"
                    class="inline-flex items-center justify-between hover:text-gray-300 transition-colors"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Layanan
                    <span class="inline-block text-xs">▾</span>
                </button>
                <div id="mobile-services-menu" class="hidden pl-4 space-y-2">
                    <a href="/services/it" class="block hover:text-gray-300 transition-colors">IT</a>
                    <a href="/services/design" class="block hover:text-gray-300 transition-colors">Desain</a>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <button
                    id="mobile-portfolio-menu-button"
                    type="button"
                    class="inline-flex items-center justify-between hover:text-gray-300 transition-colors"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Portfolio
                    <span class="inline-block text-xs">▾</span>
                </button>
                <div id="mobile-portfolio-menu" class="hidden pl-4 space-y-2">
                    <a href="/portfolio/it" class="block hover:text-gray-300 transition-colors">IT</a>
                    <a href="/portfolio/design" class="block hover:text-gray-300 transition-colors">Desain</a>
                </div>
            </div>

            <a href="/contact" class="hover:text-gray-300 transition-colors">Kontak</a>
            <a href="/about" class="hover:text-gray-300 transition-colors">Tentang Kami</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        const mobilePortfolioButton = document.getElementById('mobile-portfolio-menu-button');
        const mobilePortfolioMenu = document.getElementById('mobile-portfolio-menu');

        const mobileServicesButton = document.getElementById('mobile-services-menu-button');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');

        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        mobilePortfolioButton.addEventListener('click', function() {
            const isHidden = mobilePortfolioMenu.classList.toggle('hidden');
            mobilePortfolioButton.setAttribute('aria-expanded', String(!isHidden));
        });

        mobileServicesButton.addEventListener('click', function() {
            const isHidden = mobileServicesMenu.classList.toggle('hidden');
            mobileServicesButton.setAttribute('aria-expanded', String(!isHidden));
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                mobilePortfolioMenu.classList.add('hidden');
                mobilePortfolioButton.setAttribute('aria-expanded', 'false');
                mobileServicesMenu.classList.add('hidden');
                mobileServicesButton.setAttribute('aria-expanded', 'false');
            }
        });
    });
</script>