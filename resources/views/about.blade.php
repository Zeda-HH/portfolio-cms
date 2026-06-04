@extends('layouts.app')
@section('content')

{{-- Hero Banner --}}
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-20">
    <div class="max-w-5xl mx-auto px-6 flex flex-col md:flex-row items-center gap-10">

        {{-- Avatar --}}
        <div class="flex-shrink-0">
            <div class="w-40 h-40 rounded-full bg-white flex items-center justify-center text-6xl shadow-xl">
                👨‍💻
            </div>
        </div>

        {{-- Intro --}}
        <div class="text-white text-center md:text-left">
            <h1 class="text-4xl font-extrabold">Zemen</h1>
            <p class="text-blue-200 text-lg mt-2 font-medium">
                Data Analyst · MBA · Web Development Instructor
            </p>
            <p class="mt-4 text-blue-100 leading-relaxed max-w-xl">
                Turning business goals into data-driven insights — with a background in
                Electrical & Computer Engineering and a Master's in Business Administration.
            </p>
            <div class="mt-6 flex flex-wrap gap-3 justify-center md:justify-start">
                <a href="/contact"
                   class="bg-white text-blue-600 px-5 py-2 rounded-lg font-semibold hover:bg-blue-50 transition">
                    Hire Me
                </a>
                <a href="/posts"
                   class="border border-white text-white px-5 py-2 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    View My Blog
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Summary --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">
            About Me
        </h2>
        <div class="prose prose-lg text-gray-600 leading-relaxed space-y-4">
            <p>
                With a background in <span class="font-semibold text-gray-800">Electrical & Computer Engineering</span>
                and a <span class="font-semibold text-gray-800">Master's in Business Administration</span>,
                I bring a unique blend of technical depth and strategic thinking to every data challenge.
            </p>
            <p>
                I specialize in transforming raw data into actionable insights that support smart business
                decisions. My experience spans <span class="font-semibold text-gray-800">digital marketing analytics</span>,
                <span class="font-semibold text-gray-800">sales data evaluation</span>, and
                <span class="font-semibold text-gray-800">startup performance tracking</span>.
            </p>
            <p>
                Whether you're a startup looking to understand customer behavior or a business aiming
                to improve efficiency — I can help turn your data into a competitive advantage.
                Let's work together to solve your data challenges and grow your business, backed by
                clear and insightful analysis.
            </p>
            <p>
                Alongside my analytics work, I serve as a
                <span class="font-semibold text-gray-800">Web Development Instructor</span>,
                teaching HTML, CSS, JavaScript, and Bootstrap — helping the next generation of
                developers build real-world projects from scratch.
            </p>
        </div>
    </div>
</section>

{{-- Skills --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Skills & Tools
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            {{-- Data Analytics --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="text-xl font-bold text-blue-700 mb-4">Data Analytics</h3>
                <div class="space-y-3">
                    @foreach([
                        ['SQL', 90],
                        ['Excel', 95],
                        ['Power BI', 90],
                        ['Python (Pandas, NumPy, Matplotlib)', 85],
                    ] as [$skill, $level])
                    <div>
                        <div class="flex justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>{{ $skill }}</span>
                            <span>{{ $level }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: {{ $level }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Web Development --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-4xl mb-4">🌐</div>
                <h3 class="text-xl font-bold text-indigo-700 mb-4">Web Development</h3>
                <div class="space-y-3">
                    @foreach([
                        ['HTML & CSS', 90],
                        ['JavaScript', 80],
                        ['Bootstrap', 85],
                        ['Laravel (Learning)', 60],
                    ] as [$skill, $level])
                    <div>
                        <div class="flex justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>{{ $skill }}</span>
                            <span>{{ $level }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-500 h-2 rounded-full" style="width: {{ $level }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Education --}}
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            Education
        </h2>
        <div class="grid md:grid-cols-2 gap-6">

            <div class="border-l-4 border-blue-500 pl-6 py-2">
                <span class="text-sm text-blue-500 font-semibold uppercase tracking-wide">
                    Master's Degree
                </span>
                <h3 class="text-lg font-bold text-gray-800 mt-1">
                    Master of Business Administration (MBA)
                </h3>
                <p class="text-gray-500 mt-1">
                    Strategic thinking · Business analytics · Decision making
                </p>
            </div>

            <div class="border-l-4 border-indigo-500 pl-6 py-2">
                <span class="text-sm text-indigo-500 font-semibold uppercase tracking-wide">
                    Bachelor's Degree
                </span>
                <h3 class="text-lg font-bold text-gray-800 mt-1">
                    Electrical & Computer Engineering
                </h3>
                <p class="text-gray-500 mt-1">
                    Technical foundation · Systems thinking · Problem solving
                </p>
            </div>

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-blue-600">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
            Let's Work Together
        </h2>
        <p class="text-blue-100 text-lg mb-8">
            Have a data challenge or a project in mind? I'd love to help.
        </p>
        <a href="/contact"
           class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
            Get In Touch →
        </a>
    </div>
</section>

@endsection