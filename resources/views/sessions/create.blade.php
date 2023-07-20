<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <h1 class="text-center font-bold text-xl">Login</h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        value="{{ old('email') }}" required />
                </div>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        value="{{ old('password') }}" required />
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Login
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
