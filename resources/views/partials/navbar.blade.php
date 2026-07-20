<nav x-data="{ open: false }"
    class="sticky top-0 z-50 bg-slate-950/80 backdrop-blur-xl border-b border-slate-800">

    <div class="max-w-7xl mx-auto px-6">

        <div class="h-20 flex items-center justify-between">

            <!-- Logo -->
            <a href="/" class="text-2xl font-black tracking-wide">
                <span class="text-white">Anand</span>
                <span class="text-amber-400">Digital</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-8">

                <a href="#about" class="hover:text-amber-400 transition">About</a>
                <a href="#services" class="hover:text-amber-400 transition">Services</a>
                <a href="#portfolio" class="hover:text-amber-400 transition">Portfolio</a>
                <a href="#pricing" class="hover:text-amber-400 transition">Pricing</a>
                <a href="#faq" class="hover:text-amber-400 transition">FAQ</a>
                <a href="#contact" class="hover:text-amber-400 transition">Contact</a>

            </div>

            <!-- Desktop Button -->
            <a href="#contact"
                class="hidden lg:inline-flex bg-amber-400 text-black px-6 py-3 rounded-xl font-semibold hover:bg-amber-300 transition">

                Get Quote

            </a>

            <!-- Mobile Button -->
            <button
                @click="open=!open"
                class="lg:hidden text-white">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>

        <!-- Mobile Menu -->

        <div
            x-show="open"
            x-transition
            class="lg:hidden pb-6">

            <div class="flex flex-col gap-5">

              <a href="#about" @click="open=false">
    About
</a>

<a href="#services" @click="open=false">
    Services
</a>

<a href="#portfolio" @click="open=false">
    Portfolio
</a>

<a href="#pricing" @click="open=false">
    Pricing
</a>

<a href="#faq" @click="open=false">
    FAQ
</a>

<a href="#contact" @click="open=false">
    Contact
</a>

                <a href="#contact"
                    class="bg-amber-400 text-black rounded-xl py-3 text-center font-semibold">

                    Get Quote

                </a>

            </div>

        </div>

    </div>

</nav>