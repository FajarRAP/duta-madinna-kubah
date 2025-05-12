<li x-on:click="open=false">
    <a {{ $attributes->merge(['class' => 'block py-2 px-3 rounded-sm md:p-0 transition duration-500']) }}>
        {{ $title }}
    </a>
</li>
