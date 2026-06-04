@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto py-10">

    <h1 class="text-4xl font-bold mb-8">
        All Posts
    </h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($posts as $post)

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">

                <h2 class="text-xl font-bold text-gray-800">
                    {{ $post->title }}
                </h2>

                <p class="text-gray-600 mt-3">
                    {{ Str::limit($post->content, 100) }}
                </p>

                <a href="/posts/{{ $post->id }}"
   class="inline-block mt-4 text-blue-600 hover:underline">
    Read More →
</a>

            </div>

        @endforeach

    </div>

</div>

@endsection