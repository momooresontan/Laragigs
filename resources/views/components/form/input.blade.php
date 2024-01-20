@props(['name'])
<x-form.field>
    <label
        for="{{ $name}}"
        class="inline-block text-lg mb-2"
        >{{ $name }}</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
    />
</x-form.field>