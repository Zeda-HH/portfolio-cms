@extends('layouts.app')
@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 py-16">
    <div class="max-w-5xl mx-auto px-6 text-center text-white">
        <h1 class="text-4xl font-extrabold">Inbox</h1>
        <p class="mt-4 text-blue-100 text-lg">
            Messages received from your contact form
        </p>
    </div>
</section>

{{-- Messages --}}
<section class="py-16">
    <div class="max-w-5xl mx-auto px-6">

        @if($messages->isEmpty())
            <div class="text-center text-gray-400 py-20">
                <div class="text-6xl mb-4">📭</div>
                <p class="text-xl">No messages yet</p>
            </div>
        @else
            <div class="space-y-6">
                @foreach($messages as $msg)
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition p-8">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">
                                    {{ $msg->subject }}
                                </h3>
                                <p class="text-sm text-gray-500 mt-1">
                                    From: <span class="font-medium text-gray-700">{{ $msg->name }}</span>
                                    · {{ $msg->email }}
                                    · {{ $msg->created_at->format('M d, Y h:i A') }}
                                </p>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full {{ $msg->read ? 'bg-gray-100 text-gray-400' : 'bg-blue-100 text-blue-600 font-semibold' }}">
                                {{ $msg->read ? 'Read' : 'New' }}
                            </span>
                        </div>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            {{ $msg->message }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>

@endsection