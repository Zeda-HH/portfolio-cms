@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">
        Create Post
    </h1>

    <form method="POST" action="/posts">
        @csrf

        <input type="text" name="title"
               placeholder="Title"
               class="w-full border p-2 mb-4">

        <textarea name="content"
                  placeholder="Content"
                  class="w-full border p-2 mb-4"></textarea>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Save Post
        </button>
    </form>

</div>

@endsection