<x-layouts.app title="Home" metaDescription="Descripcion Home">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-500">Home</h1>

    @auth
        <div class="text-sky-600 font-semibold px-10">
            Bienvenido {{Auth::user()->name}}
        </div>

    @endauth
</x-layouts.app>
