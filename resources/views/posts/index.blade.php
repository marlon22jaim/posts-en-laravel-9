<x-layouts.app title="Blog" metaDescription="Descripcion Blog">

    <header class="px-6 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-sky-500">Blog</h1>

        @auth

            <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md  bg-sky-600 hover:bg-sky-500 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:shadow-outline-sky"
                href="{{ route('posts.create') }}">Crear nuevo post</a>
        @endauth


    </header>

    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
        @foreach ($posts as $post)
            <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow ">
                <h2 class="text-xl text-slate-600  hover:underline">
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h2>

                @auth

                    <div class="flex justify-between">
                        <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200"
                            href="{{ route('posts.edit', $post) }}">Edit</a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none"
                                type="submit">Delete</button>
                        </form>
                    </div>

                @endauth

            </div>
        @endforeach
    </main>
</x-layouts.app>
