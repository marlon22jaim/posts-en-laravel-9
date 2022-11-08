<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog">

    <h1>Create new Post</h1>

    {{-- @dump($errors->all()) --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">
            Enviar
        </button>
    </form>




    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
