<section id="about" class="py-24 bg-slate-900">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left -->

            <div>

                <span
                    class="inline-block px-4 py-2 rounded-full bg-amber-400/10 border border-amber-400/20 text-amber-400">

                    ABOUT US

                </span>

                <h2 class="mt-6 text-4xl md:text-5xl font-black leading-tight">

                    We Build Websites That Help Businesses Grow.

                </h2>

                <p class="mt-8 text-slate-400 leading-8 text-lg">

                    Anand Digital Services creates modern websites,
                    business applications, landing pages and custom
                    digital solutions for startups, local businesses
                    and enterprises.

                </p>

                <div class="grid sm:grid-cols-2 gap-5 mt-10">

                    <div class="rounded-2xl bg-slate-800 p-6">

                        <h3 class="text-amber-400 text-3xl font-bold">

                            150+

                        </h3>

                        <p class="mt-2 text-slate-400">

                            Projects Delivered

                        </p>

                    </div>

                    <div class="rounded-2xl bg-slate-800 p-6">

                        <h3 class="text-amber-400 text-3xl font-bold">

                            24/7

                        </h3>

                        <p class="mt-2 text-slate-400">

                            Support

                        </p>

                    </div>

                </div>

            </div>

            <!-- Right -->

            <div>

                <h3 class="text-3xl font-bold mb-8">

                    Technologies We Use

                </h3>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-5">

                    @foreach([
                    'Laravel',
                    'PHP',
                    'React',
                    'MySQL',
                    'Tailwind CSS',
                    'Bootstrap',
                    'JavaScript',
                    'Git',
                    'Figma'
                    ] as $tech)

                    <div
                        class="rounded-2xl bg-slate-800 p-6 text-center border border-slate-700 hover:border-amber-400 transition">

                        <h4 class="font-semibold">

                            {{ $tech }}

                        </h4>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>