<x-layout>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24"
>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create a Gig
    </h2>
    <p class="mb-4">Post a gig to find a developer</p>
</header>

<form method="POST" action="/listings">
    @csrf
    <x-form.input name="company" />
    <x-form.input name="title" />
    <x-form.input name="location" />
    <x-form.input name="email" />
    <x-form.input name="website" />
    <x-form.input name="tags" />
    <x-form.textarea name="description" rows="10" placeholder="Include tasks, requirements, salary, etc" />

    <x-form.button>Create Gig</x-form.button>

    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
        />
    </div>
</form>
</x-card>
</x-layout>