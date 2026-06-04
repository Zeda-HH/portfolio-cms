@extends('layouts.app')
@section('content')

{{-- Hero Section --}}
<section class="bg-gradient-to-br from-blue-50 to-white py-20">
    <div class="max-w-5xl mx-auto px-6 flex flex-col md:flex-row items-center gap-10">
        <div class="flex-1 text-center md:text-left">
            <span class="text-blue-600 font-semibold tracking-widest uppercase text-sm">
                Portfolio
            </span>
            <h1 class="text-5xl font-extrabold text-gray-900 mt-2 leading-tight">
                Hi, I'm <span class="text-blue-600">Zemen</span> 👋
            </h1>
            <p class="mt-4 text-xl text-gray-600 leading-relaxed">
                Data Analyst & Web Development Instructor — I turn raw data into insights
                and teach the next generation of web developers.
            </p>
            <div class="mt-8 flex flex-wrap gap-4 justify-center md:justify-start">
                <a href="/about"
                   class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    About Me
                </a>
                <a href="/posts"
                   class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                    View My Blog
                </a>
                <a href="/contact"
                   class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-50 transition">
                    Contact Me
                </a>
            </div>
        </div>

        {{-- Avatar Placeholder --}}
        <div class="flex-shrink-0">
            <div class="w-48 h-48 rounded-full bg-blue-100 flex items-center justify-center text-6xl shadow-lg">
                👨‍💻
            </div>
        </div>
    </div>
</section>

{{-- Skills Section --}}
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
            What I Do
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            {{-- Data Analytics --}}
            <div class="bg-blue-50 rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="text-xl font-bold text-blue-700 mb-3">
                    Data Analytics
                </h3>
                <p class="text-gray-600 mb-5">
                    I analyze data, build dashboards, and deliver insights that drive decisions.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">SQL</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Excel</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Power BI</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Python</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Pandas</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">NumPy</span>
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Matplotlib</span>
                </div>
            </div>

            {{-- Web Development --}}
            <div class="bg-indigo-50 rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-4xl mb-4">🌐</div>
                <h3 class="text-xl font-bold text-indigo-700 mb-3">
                    Web Development Instructor
                </h3>
                <p class="text-gray-600 mb-5">
                    I teach web development fundamentals at school, helping students build
                    real-world projects from scratch.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">HTML</span>
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">CSS</span>
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">JavaScript</span>
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">Bootstrap</span>
                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">Laravel</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Portfolio Teaser --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Data Analytics Portfolio
        </h2>
        <p class="text-gray-600 text-lg mb-8">
            I have built multiple data analytics projects using Power BI, Python, and SQL.
            More projects coming soon on this site.
        </p>
        <a href="/posts"
           class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
            See My Work →
        </a>
    </div>
</section>

{{-- First Laravel Project Badge --}}
<section class="py-10 bg-white border-t border-gray-100">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <p class="text-gray-400 text-sm">
            🚀 This website is my <span class="font-semibold text-blue-500">first Laravel project</span>
            — built from scratch as part of my web development journey.
        </p>
    </div>
</section>

@endsection