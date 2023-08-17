<div class="bg-gray-600 shadow-md rounded-lg p-4 border w-44 max-h-16 h-16">
    <div class="flex items-center justify-between mb-2">
        <div class="flex items-center justify-center">
            <span
                class="text-white font-medium w-28 overflow-ellipsis whitespace-nowrap">{{ Str::limit($name, 14    ) }}</span>
        </div>
        <button class="text-gray-400 hover:text-gray-600">
            ...
        </button>
    </div>
</div>
