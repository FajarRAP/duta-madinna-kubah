<x-auth-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Informasi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex flex-col gap-4">
                <x-primary-button class="self-end" x-data x-on:click.prevent="$dispatch('open-modal', 'add-data')">
                    Tambah Informasi
                </x-primary-button>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($information as $info)
                                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4">

                                        <img src='{{ asset("storage/$info->image_path") }}'
                                            class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $info->title }}
                                    </td>
                                    <td class="px-6 py-4 flex flex-col">
                                        <a href="#" class="font-medium text-yellow-600 hover:underline" x-data
                                            x-on:click.prevent="$dispatch('open-modal', 'edit-data')">Sunting</a>
                                        <a href="#" class="font-medium text-red-600 hover:underline" x-data
                                            x-on:click.prevent="$dispatch('open-modal', 'delete-data-{{ $info->id }}')">Hapus</a>
                                    </td>
                                    <x-modal name="delete-data-{{ $info->id }}">
                                        <form action="{{ route('information.destroy', $info) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="flex flex-col gap-3">
                                                    <h3 class="text-base font-semibold text-gray-900">
                                                        Hapus Informasi
                                                    </h3>
                                                    <p class="text-sm text-gray-500">Yakin ingin menghapus data?</p>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                                                <x-primary-button>Hapus</x-primary-button>
                                                <x-light-button
                                                    x-on:click="$dispatch('close-modal', 'delete-data-{{ $info->id }}')">Batal</x-light-button>
                                            </div>
                                        </form>
                                    </x-modal>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="add-data">
        <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex flex-col gap-3">
                    <h3 class="text-base font-semibold text-gray-900" id="modal-title">Tambah Informasi</h3>
                    <div>
                        <x-input-label for="title" value="Judul" />
                        <x-text-input id="title" name="title" placeholder="Judul" class="w-full" />
                    </div>
                    <div>
                        <x-input-label for="image" value="File Gambar" />
                        <x-text-input id="image" name="image" type="file"
                            class="file:border-0 file:rounded-sm file:mr-2 file:bg-gray-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-gray-100" />
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                <x-primary-button>Tambah</x-primary-button>
                <x-light-button x-on:click="$dispatch('close-modal', 'add-data')">Batal</x-light-button>
            </div>
        </form>
    </x-modal>


</x-auth-layout>
