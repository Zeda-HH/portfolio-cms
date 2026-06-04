@extends('layouts.app')
@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center text-white">
        <span class="text-blue-200 text-sm font-semibold uppercase tracking-widest">
            {{ $project->category }}
        </span>
        <h1 class="text-4xl font-extrabold mt-2">{{ $project->title }}</h1>
        <div class="flex flex-wrap justify-center gap-2 mt-4">
            @foreach(explode(',', $project->tools) as $tool)
                <span class="bg-blue-500 bg-opacity-50 text-white text-xs px-3 py-1 rounded-full">
                    {{ trim($tool) }}
                </span>
            @endforeach
        </div>
    </div>
</section>

{{-- Content --}}
<section class="py-16">
    <div class="max-w-4xl mx-auto px-6">

        {{-- Image --}}
        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}"
                 alt="{{ $project->title }}"
                 class="w-full rounded-2xl shadow-md mb-10 object-cover max-h-96">
        @endif

        <div class="bg-white rounded-2xl shadow-md p-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Project Overview</h2>
            <div class="text-gray-600 leading-relaxed">
                {!! nl2br(e($project->description)) !!}
            </div>

            {{-- Links --}}
            <div class="flex flex-wrap gap-4 mt-10">
                @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank"
                       class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-900 transition">
                        🐙 View on GitHub
                    </a>
                @endif
                @if($project->demo_url)
                    <a href="{{ $project->demo_url }}" target="_blank"
                       class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        🚀 Live Demo
                    </a>
                @endif
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex gap-4 mt-8">
            <a href="/projects"
               class="border border-gray-300 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-50 transition">
                ← Back to Projects
            </a>
            <form method="POST" action="/projects/{{ $project->id }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Delete this project?')"
                        class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600 transition">
                    🗑️ Delete
                </button>
            </form>
        </div>

    </div>
</section>

@endsection