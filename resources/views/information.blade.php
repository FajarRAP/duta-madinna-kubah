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
                            <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4">
                                    <img src="/docs/images/products/apple-watch.png"
                                        class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Apple Watch
                                </td>
                                <td class="px-6 py-4 flex flex-col">
                                    <a href="#" class="font-medium text-yellow-600 hover:underline" x-data
                                        x-on:click.prevent="$dispatch('open-modal', 'edit-data')">Sunting</a>
                                    <a href="#" class="font-medium text-red-600 hover:underline" x-data
                                        x-on:click.prevent="$dispatch('open-modal', 'delete-data')">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="add-data">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
                <div
                    class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10">
                    <svg class="size-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-base font-semibold text-gray-900" id="modal-title">Deactivate account</h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All
                            of your data will be permanently removed. This action cannot be undone.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 gap-3">
            <x-primary-button>Tambah</x-primary-button>
            <x-light-button x-on:click="$dispatch('close-modal', 'add-data')">Batal</x-light-button>
        </div>
    </x-modal>
</x-auth-layout>
