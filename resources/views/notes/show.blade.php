@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto p-4">
        <h1 class="text-xl font-semibold">{{ $note->title }}</h1>
        <p class="text-gray-600">{{ $note->text }}</p>
        <p class="text-sm text-gray-400">{{ optional($note->user)->name ?? 'Ahmed' }}</p>
        <p class="text-sm text-gray-400">{{ $note->created_at->format('M d, Y') }}</p>
    </div>
@endsection
