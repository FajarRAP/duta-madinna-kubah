@props(['hasError' => false, 'disabled' => false, 'checked' => false])

<input @disabled($disabled) @checked($checked)
    {{ $attributes->class(['border p-2 focus:outline-blue-500 rounded-md', 'border-gray-200 shadow' => !$hasError, 'border-red-600' => $hasError])->merge() }}>
