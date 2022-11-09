<x-layouts.app :title="$post->title" :meta-description="$post->body">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-500">{{ $post->title }}</h1>

    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded-md shadow h-96">

        <p class="leading-normal text-slate-600">{{ $post->body }}</p>

        <p class="flex-1 leading-normal text-slate-600">Creado: {{ $post->created_at }}</p>

        {{-- class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" --}}
        <a class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('posts.index') }}">Regresar</a>
    </div>

</x-layouts.app>
