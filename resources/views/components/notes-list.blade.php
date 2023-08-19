<div class="my-12 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @foreach ($notes as $note)
        <div class="bg-white shadow rounded-lg p-4">
            <a href="{{route('notes.show', $note)}}">
                <h2 class="text-lg font-semibold text-green-600">{{ $note->title }}</h2>
            </a>
            <p class="text-gray-600 mt-2">{{ $note->text }}</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-sm text-gray-400">{{ optional($note->user)->name ?? 'Ahmed' }}</span>
                <span class="text-sm text-gray-400">{{ $note->created_at->format('M d, Y') }}</span>
            </div>
        </div>
    @endforeach
</div>
