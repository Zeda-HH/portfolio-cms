@extends('layouts.app')
@section('content')

<section class="py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Admin Dashboard</h1>

        <div class="grid md:grid-cols-3 gap-6">
            <a href="/posts/create"
               class="bg-blue-600 text-white rounded-2xl p-8 hover:bg-blue-700 transition text-center">
                <div class="text-4xl mb-3">✍️</div>
                <h3 class="text-xl font-bold">Create Post</h3>
            </a>
            <a href="/projects/create"
               class="bg-indigo-600 text-white rounded-2xl p-8 hover:bg-indigo-700 transition text-center">
                <div class="text-4xl mb-3">📊</div>
                <h3 class="text-xl font-bold">Add Project</h3>
            </a>
            <a href="/messages"
               class="bg-green-600 text-white rounded-2xl p-8 hover:bg-green-700 transition text-center">
                <div class="text-4xl mb-3">📬</div>
                <h3 class="text-xl font-bold">View Messages</h3>
            </a>
        </div>
    </div>
</section>

@endsection