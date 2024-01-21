<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit Gig
        </h2>
        <p class="mb-4">Edit: {{ $listing->title }}</p>
    </header>
    
    <form method="POST" action="/listings/{{ $listing->id }}/edit" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-form.input name="company" />
        <x-form.input name="title" placeholder="Example: Senior Laravel Developer" />
        <x-form.input name="location" placeholder="Example: Remote, Boston MA, etc" />
        <x-form.input name="email" />
        <x-form.input name="website" />
        <x-form.input name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />
        <x-form.input name="logo" type="file" />
        <x-form.textarea name="description" rows="5" placeholder="Include tasks, requirements, salary, etc" />
    
        <x-form.button>Edit Gig</x-form.button>
    
    </form>
    </x-card>
    </x-layout>