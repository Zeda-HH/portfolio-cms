@extends('layouts.app')
@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-16">
    <div class="max-w-5xl mx-auto px-6 text-center text-white">
        <h1 class="text-4xl font-extrabold">My Projects</h1>
        <p class="mt-4 text-blue-100 text-lg">
            Data Analytics & Web Development Portfolio
        </p>
    </div>
</section>

{{-- Success Message --}}
@if(session('success'))
    <div class="max-w-5xl mx-auto mt-6 px-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg">
            ✅ {{ session('success') }}
        </div>
    </div>
@endif

{{-- Projects Grid --}}
<section class="py-16">
    <div class="max-w-5xl mx-auto px-6">

        @if($projects->isEmpty())
            <div class="text-center text-gray-400 py-20">
                <div class="text-6xl mb-4">📂</div>
                <p class="text-xl">No projects yet</p>
                <a href="/projects/create"
                   class="inline-block mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    + Add Your First Project
                </a>
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition overflow-hidden">

                        {{-- Image --}}
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}"
                                 alt="{{ $project->title }}"
                                 class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-blue-50 flex items-center justify-center text-5xl">
                                📊
                            </div>
                        @endif

                        <div class="p-6">
                            {{-- Category Badge --}}
                            <span class="text-xs font-semibold px-3 py-1 rounded-full
                                {{ $project->category === 'Data Analytics' ? 'bg-blue-100 text-blue-600' : 'bg-indigo-100 text-indigo-600' }}">
                                {{ $project->category }}
                            </span>

                            <h3 class="text-lg font-bold text-gray-800 mt-3">
                                {{ $project->title }}
                            </h3>
                            <p class="text-gray-500 text-sm mt-2">
                                {{ Str::limit($project->description, 100) }}
                            </p>

                            {{-- Tools --}}
                            <div class="flex flex-wrap gap-2 mt-4">
                                @foreach(explode(',', $project->tools) as $tool)
                                    <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">
                                        {{ trim($tool) }}
                                    </span>
                                @endforeach
                            </div>

                            {{-- Links --}}
                            <div class="flex gap-3 mt-5">
                                <a href="/projects/{{ $project->id }}"
                                   class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                                    View →
                                </a>
                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank"
                                       class="flex-1 text-center border border-gray-300 text-gray-700 py-2 rounded-lg text-sm hover:bg-gray-50 transition">
                                        GitHub
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="/projects/create"
                   class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    + Add New Project
                </a>
            </div>
        @endif

    </div>
</section>

@endsection