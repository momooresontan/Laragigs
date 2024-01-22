<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4 font-semibold">Log into your account to post gigs</p>
        </header>

        <form method="POST" action="/users/login">
            @csrf
            <x-form.input name="email" />
            <x-form.input name="password" type="password" />

            <x-form.field>
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black font-semibold">
                    Login
                </button>
            </x-form.field>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-laravel font-semibold">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
