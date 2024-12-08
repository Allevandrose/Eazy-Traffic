<x-guest-layout>
    <form class="bg-white p-6 rounded-lg shadow-lg" method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input id="password" type="password" name="password" required autocomplete="new-password"
            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-4">
        <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        @error('password_confirmation')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-end mt-6">
        <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 underline mr-4">Already registered?</a>
        <button type="submit"
            class="bg-[#17173a] text-white font-semibold py-2 px-4 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Register
        </button>
    </div>
</form>

</x-guest-layout>