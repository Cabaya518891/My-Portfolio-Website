@extends('layouts.app')

@section('content')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700&family=IBM+Plex+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        html { scroll-behavior: smooth; }
        #portfolio { font-family: 'Public Sans', ui-sans-serif, system-ui, sans-serif; }
        #portfolio .font-display { font-family: 'Bricolage Grotesque', ui-sans-serif, system-ui, sans-serif; }
        #portfolio .font-schema { font-family: 'IBM Plex Mono', ui-monospace, Menlo, Consolas, monospace; }

        /* Blueprint grid behind the hero */
        #portfolio .blueprint {
            background-image:
                linear-gradient(rgba(255,255,255,.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.06) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* One orchestrated moment: schema rows fill in on page load */
        @keyframes rowIn {
            from { opacity: 0; transform: translateY(6px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        #portfolio .row-in { opacity: 0; animation: rowIn .5s ease forwards; }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            #portfolio .row-in { opacity: 1; animation: none; }
        }
    </style>

    <div id="portfolio" class="bg-slate-50 text-slate-700 antialiased">

        <!-- 1. Hero Section -->
        <section id="top" class="blueprint bg-teal-950 text-white">

            <!-- Navigation -->
            <header class="max-w-6xl mx-auto px-6 pt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <a href="#top" class="font-display text-lg font-bold"></a>
                <nav class="flex flex-wrap gap-x-6 gap-y-1 text-sm text-teal-100" aria-label="Main">
                    <a href="#about" class="hover:text-amber-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-300 rounded">About</a>
                    <a href="#projects" class="hover:text-amber-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-300 rounded">Projects</a>
                    <a href="#certificates" class="hover:text-amber-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-300 rounded">Certificates</a>
                    <a href="#contact" class="hover:text-amber-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-300 rounded">Contact</a>
                </nav>
            </header>

            <div class="max-w-6xl mx-auto px-6 py-16 md:py-24 grid grid-cols-1 md:grid-cols-12 gap-14 items-center">

                <!-- Left Content Column -->
                <div class="md:col-span-7 text-left">
                    <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl font-bold leading-[1.05] tracking-tight">
                        Geraldine Cabaya
                    </h1>

                    <h2 class="font-display mt-4 text-2xl sm:text-3xl font-medium text-amber-300">
                        Database &amp; QA Specialist
                    </h2>

                    <p class="mt-6 text-lg text-teal-50/90 leading-relaxed max-w-xl">
                        I specialize in Quality Assurance, database management, and designing robust schemas like ERDs to ensure system integrity and flawless execution.
                    </p>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="{{ asset('files/Rica_Mae_Rubin_Application.zip') }}"
                           download="Rica_Mae_Rubin_Application.zip"
                           class="inline-block bg-amber-400 text-teal-950 px-8 py-3.5 rounded font-semibold hover:bg-amber-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-offset-teal-950 focus-visible:ring-amber-300">
                            Hire Me
                        </a>
                        <a href="#projects"
                           class="inline-block border border-teal-300/60 text-white px-8 py-3.5 rounded font-semibold hover:border-amber-300 hover:text-amber-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-offset-teal-950 focus-visible:ring-amber-300">
                            Projects
                        </a>
                    </div>
                </div>

              <!-- Right Column: profile picture -->
<div class="md:col-span-5 flex justify-center md:justify-end">
    <div class="w-64 h-64 sm:w-50 sm:h-50 aspect-square rounded-full overflow-hidden border-4 border-white bg-teal-100 shadow-[10px_10px_0_0_#fbbf24]">
        <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-full h-full object-cover">
    </div>
</div>

                    
                    </div>
        </section>

        <!-- 2. About Me Section -->
        <section id="about" class="max-w-6xl mx-auto px-6 py-20 md:py-28">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-teal-950">About Me</h2>

            <p class="font-display mt-8 text-2xl sm:text-3xl font-medium leading-snug text-slate-800 max-w-3xl">
I am a detail-oriented and hardworking professional who thrives on ensuring system quality and data integrity.            </p>
            <p class="mt-6 text-lg leading-relaxed text-slate-600 max-w-2xl">
On our system development project, I was the QA tester: I tested features, documented bugs, and checked that fixes worked before release. My school projects taught me to solve problems, communicate clearly, and work well in a team. Now I’m looking for a company where I can learn quickly and gain real industry experience.            </p>

        
        </section>

        <!-- 3. Projects Showcase Section -->
        <section id="projects" class="bg-white border-y border-slate-200">
            <div class="max-w-6xl mx-auto px-6 py-20 md:py-28">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-teal-950">Featured Projects</h2>

                <div class="mt-14 space-y-14">
                    @forelse($projects as $project)
                        <article class="bg-white border-2 border-teal-950 rounded-lg overflow-hidden shadow-[6px_6px_0_0_#0f766e]">
                            <div class="font-schema text-xs flex justify-between bg-teal-950 text-teal-100 px-4 py-2">
                                <span>Projects</span>
                               
                            </div>

                            <div class="md:flex {{ $loop->even ? 'md:flex-row-reverse' : '' }}">
                                @if($project->image)
                                   <div class="md:w-1/2 bg-slate-100 flex items-center justify-center">
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                                    </div>
                                @endif
                                <div class="p-6 md:p-10 flex flex-col justify-center {{ $project->image ? 'md:w-1/2' : 'w-full' }}">
                                    <h3 class="font-display text-2xl font-bold text-teal-950">{{ $project->title }}</h3>
                                    <p class="mt-3 text-slate-600 leading-relaxed">{{ $project->description }}</p>
                                    <div class="flex flex-wrap gap-2 mt-6">
                                        @foreach(array_filter(array_map('trim', explode(',', $project->tech_stack ?? ''))) as $tech)
                                            <span class="font-schema bg-teal-50 text-teal-800 border border-teal-200 text-xs px-2.5 py-1 rounded">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </article>
                    @empty
                        <p class="text-slate-500">Projects will appear here once they are added.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- 4. Certificates Section -->
        <section id="certificates" class="bg-teal-50">
            <div class="max-w-6xl mx-auto px-6 py-20 md:py-28">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-teal-950">Certificates &amp; Credentials</h2>

                <div class="mt-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @forelse($certificates as $certificate)
                        <article class="flex flex-col bg-white border-2 border-teal-950 rounded-lg overflow-hidden shadow-[5px_5px_0_0_#fbbf24]">
                            <div class="h-1.5 bg-amber-400"></div>
                            @if($certificate->image)
                                <div class="aspect-[4/3] bg-slate-100 border-b border-slate-200">
                                    <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->title }}" class="w-full h-full object-contain">
                                </div>
                            @endif
                            <div class="p-6 flex flex-col flex-1">
                                <h3 class="font-display text-xl font-bold text-teal-950">{{ $certificate->title }}</h3>
                                <p class="mt-2 text-sm text-slate-600 leading-relaxed flex-1">{{ $certificate->description }}</p>
                                <p class="mt-5 flex items-center gap-2 text-sm font-semibold text-teal-800">
                                    <span class="inline-block w-2 h-2 rounded-full bg-amber-400" aria-hidden="true"></span>
                                    {{ $certificate->issuer }}
                                </p>
                            </div>
                        </article>
                    @empty
                        <p class="text-slate-500 md:col-span-2 lg:col-span-3">Certificates will appear here once they are added.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- 5. Contact Section -->
        <section id="contact" class="blueprint bg-teal-950 text-white">
            <div class="max-w-6xl mx-auto px-6 py-20 md:py-28 grid grid-cols-1 md:grid-cols-12 gap-12">

                <div class="md:col-span-5">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold">Get In Touch</h2>
                <p class="mt-5 text-lg text-teal-50/90 leading-relaxed max-w-sm">
                    Feel free to reach out about collaborations or opportunities in QA testing, and database work. I'll get back to you.
                </p>
                </div>

                <div class="md:col-span-7">

                    <!-- Flash Success Message -->
                    @if(session('success'))
                        <div role="status" class="mb-6 p-4 bg-amber-100 border border-amber-300 text-teal-950 rounded-md text-left">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div role="alert" class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-md text-left text-sm">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="bg-white text-slate-800 rounded-lg overflow-hidden shadow-[8px_8px_0_0_#fbbf24]">
                        <div class="font-schema text-xs flex justify-between bg-teal-700 text-white px-5 py-3">
                            <span>Contact</span>
                        </div>

                        <!-- Contact Form -->
                        <form action="{{ route('contact.send') }}" method="POST" class="p-6 sm:p-8 space-y-5 text-left">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
    <div>
        <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
        <input id="name" type="text" name="name" required value="{{ old('name') }}"
               placeholder="Enter your name"
               class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600">
    </div>
    <div>
        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
        <input id="email" type="email" name="email" required value="{{ old('email') }}"
               placeholder="Enter your email"
               class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600">
    </div>
</div>
<div>
    <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
    <textarea id="message" name="message" rows="5" required
              placeholder="Enter your message"
              class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600">{{ old('message') }}</textarea>
</div>
                            <button type="submit"
                                    class="w-full bg-teal-700 text-white px-6 py-3 rounded font-semibold hover:bg-teal-800 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-teal-600">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

    </div>

@endsection