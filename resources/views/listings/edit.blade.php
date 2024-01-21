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
        <x-form.input name="company" :value="old('company', $listing->company)" />
        <x-form.input name="title" placeholder="Example: Senior Laravel Developer" :value="old('title', $listing->title)" />
        <x-form.input name="location" placeholder="Example: Remote, Boston MA, etc" :value="old('location', $listing->location)" />
        <x-form.input name="email" :value="old('email', $listing->email)" />
        <x-form.input name="website" :value="old('website', $listing->website)" />
        <x-form.input name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" :value="old('tags', $listing->tags)" />
        <x-form.input name="logo" type="file" :value="old('logo', $listing->logo)" />
        <x-form.textarea 
        name="description" 
        rows="5" 
        placeholder="Include tasks, requirements, salary, etc">{{ old('description', $listing->description) }}</x-form.textarea>
    
        <x-form.button>Edit Gig</x-form.button>
    
    </form>
    </x-card>
    </x-layout>