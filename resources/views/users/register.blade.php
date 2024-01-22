<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-4 font-semibold">Create an account to post gigs</p>
        </header>

        <form method="POST" action="/users">
            @csrf

            <x-form.input name="name" />
            <x-form.input name="email" />
            <x-form.input name="password" type="password" />

            <x-form.field>
                <x-form.label name="confirm password" />
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password_confirmation"
                />
                <x-form.error name="password_confirmation" />
            </x-form.field>

            <x-form.field>
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black font-semibold">
                    Register
                </button>
            </x-form.field>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-laravel font-semibold">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
