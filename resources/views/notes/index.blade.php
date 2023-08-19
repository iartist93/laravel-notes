@extends('layouts.app')

@section('content')
    <div class="p-4">
        <!-- Button to add new folder -->
        <div class="flex items-center mt-4">
            <button id="add-folder-btn"
                    class="bg-green-700 text-white rounded-lg p-2 w-44 h-14 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <h1 class="font-medium">Add Folder</h1>
            </button>
            <input id="folder-input" type="text" class="ml-2 hidden rounded px-4 py-3 font-medium"
                   placeholder="folder name"/>
        </div>


        <!-- Folders List -->
        <div id="folders-list" class="flex flex-wrap my-8 gap-x-4 gap-y-3">
            @foreach($folders as $folder)
                @component('components.folder-card', ['folder' => $folder])
                @endcomponent
            @endforeach
        </div>

        <hr/>

        <!-- Notes List -->
        @component('components.notes-list', ['notes' => $notes]) @endcomponent
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addFolderBtn = document.getElementById('add-folder-btn');
            const folderInput = document.getElementById('folder-input');
            const foldersList = document.getElementById('folders-list');

            addFolderBtn.addEventListener('click', function () {
                addFolderBtn.style.display = 'none';
                folderInput.classList.remove('hidden');
                folderInput.focus();
            });

            folderInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    createFolder(folderInput.value);
                }
            });

            folderInput.addEventListener('blur', function () {
                folderInput.classList.add('hidden');
                addFolderBtn.style.display = 'flex';
            });

            function createFolder(folderName) {
                axios.post('/folders', {name: folderName})
                    .then(response => {
                        const folder = response.data;
                        const folderElement = createFolderElement(folder);
                        foldersList.appendChild(folderElement);

                        folderInput.value = '';
                        folderInput.classList.add('hidden');
                        addFolderBtn.style.display = 'block';
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }

            function createFolderElement(folder) {
                const name = folder.name;

                const folderDiv = document.createElement('div');
                folderDiv.classList.add('new-folder');
                folderDiv.innerHTML = `
                          @component('components.folder-card', ['folder' => $folder])
                @endcomponent
                `;

                return folderDiv;
            }
        });
    </script>
@endsection


