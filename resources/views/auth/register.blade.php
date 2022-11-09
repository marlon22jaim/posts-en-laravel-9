<x-layouts.app title="Register" metaDescription="Descripcion Register">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-500">Register</h1>
    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded-sm shadow" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="space-y-4">
            <label class="flex flex-col">

                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Name
                </span>

                <input
                    class="rounded-md shadow-sm border-slate-300  text-slate-600 focus:ring focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300 "
                    autofocus="autofocus"
                    name="name"
                    type="text"
                    value="{{ old('name') }}">

                @error('name')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror

            </label>

            <label class="flex flex-col">

                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Email
                </span>

                <input
                    class="rounded-md shadow-sm border-slate-300  text-slate-600 focus:ring focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300 "
                    name="email" type="email" value="{{ old('email') }}">

                @error('email')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror

            </label>

            <label class="flex flex-col">

                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Password
                </span>

                <input
                    class="rounded-md shadow-sm border-slate-300  text-slate-600 focus:ring focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300 "
                    name="password" type="password">

                @error('password')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror

            </label>

            <label class="flex flex-col">

                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Password confirmation
                </span>

                <input
                    class="rounded-md shadow-sm border-slate-300  text-slate-600 focus:ring focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300 "
                    name="password_confirmation" type="password">

                @error('password_confirmation')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror

            </label>
        </div>
        {{-- @include('posts.form-fields') --}}

        <div class="flex items-center justify-between mt-4">
            <a class="text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none"
                href="{{ route('login') }}">Login</a>

            <button
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md  bg-sky-600 hover:bg-sky-500 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:shadow-outline-sky"
                type="submit">
                Registrar
            </button>
        </div>
    </form>
</x-layouts.app>
