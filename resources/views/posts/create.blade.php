<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog">

    <h1>Create new Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title<br>
            <input name="title" type="text">
        </label><br>
        <label>
            Body<br>
            <textarea name="body"></textarea>
        </label>

        <button type="submit">
            Enviar
        </button>
    </form>




    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
