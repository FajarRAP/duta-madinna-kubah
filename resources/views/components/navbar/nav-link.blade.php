@props(['active' => false])

<a {{ $attributes->class(['block py-2 px-3 rounded-sm hover:text-blue-600 md:p-0 transition duration-300', 'text-blue-600' => $active])->merge() }}
    x-on:click="open = false">
    {{ $slot }}
</a>
