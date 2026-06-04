@extends('layouts.app')
@section('content')

<section class="py-16">
    <div class="max-w-3xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-md p-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-8">Add New Project</h2>

            <form method="POST" action="/projects" enctype="multipart/form-data" class="space-y-6">
                @csrf

                {{-- Title --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Project Title</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                           placeholder="Customer Churn Analysis"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Category --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select name="category"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="Data Analytics" {{ old('category') === 'Data Analytics' ? 'selected' : '' }}>
                            Data Analytics
                        </option>
                        <option value="Web Development" {{ old('category') === 'Web Development' ? 'selected' : '' }}>
                            Web Development
                        </option>
                    </select>
                </div>

                {{-- Tools --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Tools Used <span class="text-gray-400 text-xs">(comma separated)</span>
                    </label>
                    <input type="text" name="tools" value="{{ old('tools') }}"
                           placeholder="Power BI, SQL, Excel"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('tools') border-red-500 @enderror">
                    @error('tools')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea name="description" rows="5"
                              placeholder="Describe your project, the problem you solved, and key insights..."
                              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Image --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Project Image <span class="text-gray-400 text-xs">(optional)</span>
                    </label>
                    <input type="file" name="image" accept="image/*"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- GitHub & Demo URLs --}}
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            GitHub URL <span class="text-gray-400 text-xs">(optional)</span>
                        </label>
                        <input type="url" name="github_url" value="{{ old('github_url') }}"
                               placeholder="https://github.com/..."
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Demo URL <span class="text-gray-400 text-xs">(optional)</span>
                        </label>
                        <input type="url" name="demo_url" value="{{ old('demo_url') }}"
                               placeholder="https://..."
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Save Project →
                </button>
            </form>
        </div>
    </div>
</section>

@endsection