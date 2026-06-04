@extends('layouts.app')
@section('content')

{{-- Post Header --}}
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center text-white">
        <h1 class="text-4xl font-extrabold leading-tight">
            {{ $post->title }}
        </h1>
        <p class="mt-4 text-blue-100 text-sm">
            📅 {{ $post->created_at->format('F d, Y') }}
        </p>
        <a href="/posts"
           class="inline-block mt-6 text-blue-200 hover:text-white text-sm transition">
            ← Back to Blog
        </a>
    </div>
</section>

{{-- Post Content --}}
<section class="py-16">
    <div class="max-w-3xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-md p-10">
            <div class="prose prose-lg text-gray-700 leading-relaxed">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex gap-4 mt-8">
            <a href="/posts"
               class="border border-gray-300 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-50 transition">
                ← Back to Blog
            </a>
            <a href="/posts/{{ $post->id }}/edit"
               class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                ✏️ Edit Post
            </a>
            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Are you sure you want to delete this post?')"
                        class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600 transition">
                    🗑️ Delete
                </button>
            </form>
        </div>
    </div>
</section>

@endsection