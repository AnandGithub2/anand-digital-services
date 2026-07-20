<section id="contact" class="py-24 bg-slate-950">

    <div class="max-w-7xl mx-auto px-6">

        @if(session('success'))
            <div class="mb-8 rounded-xl bg-green-600/20 border border-green-500 p-4 text-green-300">
                {{ session('success') }}
            </div>
        @endif


        <div class="grid lg:grid-cols-2 gap-16">


            <!-- Left Content -->

            <div>

                <span class="inline-block px-4 py-2 rounded-full bg-amber-400/10 border border-amber-400/20 text-amber-400">
                    CONTACT
                </span>


                <h2 class="mt-6 text-5xl font-black">
                    Let's Build Something Amazing
                </h2>


                <p class="mt-8 text-slate-400 leading-8">
                    Have an idea? We'd love to hear about your project and help bring it to life.
                </p>


                <div class="mt-10 space-y-4 text-slate-300">

                    <p>
                        📧 info@ananddigitalservices.com
                    </p>

                    <p>
                        📱 +91 XXXXX XXXXX
                    </p>

                    <p>
                        📍 Gujarat, India
                    </p>

                </div>


            </div>



            <!-- Contact Form -->

            <div>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-5">

                    @csrf


                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Your Name"
                        class="w-full rounded-xl bg-slate-900 border border-slate-700 p-4 text-white">


                    @error('name')
                        <p class="text-red-400 text-sm">
                            {{ $message }}
                        </p>
                    @enderror



                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Your Email"
                        class="w-full rounded-xl bg-slate-900 border border-slate-700 p-4 text-white">


                    @error('email')
                        <p class="text-red-400 text-sm">
                            {{ $message }}
                        </p>
                    @enderror



                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="Phone Number"
                        class="w-full rounded-xl bg-slate-900 border border-slate-700 p-4 text-white">


                    @error('phone')
                        <p class="text-red-400 text-sm">
                            {{ $message }}
                        </p>
                    @enderror



                    <textarea
                        rows="6"
                        name="message"
                        placeholder="Your Message"
                        class="w-full rounded-xl bg-slate-900 border border-slate-700 p-4 text-white">{{ old('message') }}</textarea>


                    @error('message')
                        <p class="text-red-400 text-sm">
                            {{ $message }}
                        </p>
                    @enderror



                    <button
                        type="submit"
                        class="w-full py-4 rounded-xl bg-amber-400 text-black font-bold hover:bg-amber-300 transition">

                        Send Message

                    </button>


                </form>

            </div>


        </div>


    </div>


</section>