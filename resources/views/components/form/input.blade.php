@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
    />
</x-form.field>