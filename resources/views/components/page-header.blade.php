<div class="bg-gray-800 py-4 px-8 text-white flex justify-between flex-row">
    <a href="/notes">
        <h1 class="text-3xl font-semibold">{{ $title }}</h1>
    </a>

    @if(!request()->routeIs('notes.create'))
        <a href="/notes/new" class="bg-blue-700 hover:bg-blue-600 px-4 py-2 text-white rounded">New +</a>
    @endif
</div>
