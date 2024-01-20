@props('name')

<x-form.field>
    <x-form.label name="{{ $name }}">
    <textarea
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
        rows="10"
        placeholder="Include tasks, requirements, salary, etc"
    ></textarea>
</x-form.field>