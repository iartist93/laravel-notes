<a href="{{ route('folders.show', ['folder' => $folder]) }}">
    <div class="bg-slate-300 shadow-sm rounded-lg p-4 border w-52 max-h-14 h-14">
        <div class="flex items-center justify-between mb-2">
            <div class="flex items-center justify-center">
            <span
                class="text-gray-700 font-medium w-28 overflow-ellipsis whitespace-nowrap">{{ Str::limit($folder->name, 14    ) }}</span>
            </div>
            <button class="text-gray-400 hover:text-gray-600">
                ...
            </button>
        </div>
    </div>
</a>
