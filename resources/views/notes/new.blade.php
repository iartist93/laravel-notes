@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-semibold mb-4">Create New Note</h1>
        <form action="/notes" method="POST" class="w-1/2">
            @csrf
            <div class="mb-4">
                <label for="title" class="block font-medium text-sm mb-2">Title</label>
                <input type="text" id="title" name="title" class="border px-4 py-2 w-full rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="text" class="block font-medium text-sm mb-2">Note Text</label>
                <textarea id="text" name="text" class="border px-4 py-2 w-full rounded-md" rows="6" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Create
                Note</button>
        </form>
    </div>
@endsection
