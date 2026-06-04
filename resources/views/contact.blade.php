@extends('layouts.app')
@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center text-white">
        <h1 class="text-4xl font-extrabold">Get In Touch</h1>
        <p class="mt-4 text-blue-100 text-lg">
            Have a data project or collaboration in mind? I'd love to hear from you.
        </p>
    </div>
</section>

{{-- Success Message --}}
@if(session('success'))
    <div class="max-w-3xl mx-auto mt-6 px-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg">
            ✅ {{ session('success') }}
        </div>
    </div>
@endif

{{-- Contact Form --}}
<section class="py-16">
    <div class="max-w-3xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-md p-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-8">Send Me a Message</h2>

            <form method="POST" action="/contact" class="space-y-6">
                @csrf

                {{-- Name & Email --}}
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Your Name
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               placeholder="Zemen"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email Address
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               placeholder="you@example.com"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Subject --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Subject
                    </label>
                    <input type="text" name="subject" value="{{ old('subject') }}"
                           placeholder="Data Analysis Project"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subject') border-red-500 @enderror">
                    @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Message --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Message
                    </label>
                    <textarea name="message" rows="6"
                              placeholder="Tell me about your project..."
                              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Send Message →
                </button>

            </form>
        </div>
    </div>
</section>

{{-- Contact Info --}}
<section class="py-10 bg-gray-50 border-t border-gray-100">
    <div class="max-w-3xl mx-auto px-6 grid md:grid-cols-3 gap-6 text-center">
        <div>
            <div class="text-3xl mb-2">📧</div>
            <p class="text-sm font-semibold text-gray-700">Email</p>
            <p class="text-gray-500 text-sm">your@email.com</p>
        </div>
        <div>
            <div class="text-3xl mb-2">💼</div>
            <p class="text-sm font-semibold text-gray-700">LinkedIn</p>
            <p class="text-gray-500 text-sm">linkedin.com/in/zemen</p>
        </div>
        <div>
            <div class="text-3xl mb-2">🐙</div>
            <p class="text-sm font-semibold text-gray-700">GitHub</p>
            <p class="text-gray-500 text-sm">github.com/zemen</p>
        </div>
    </div>
</section>

@endsection