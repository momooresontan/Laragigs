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
            <x-form.input name="confirm_password" type="password" />

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="login" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
