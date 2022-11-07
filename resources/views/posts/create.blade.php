<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog">

    <h1>Create new Post</h1>

    <form>
        <label>
            Title
            <input type="text">
        </label>
        <label for="">
            Body
            <textarea></textarea>
        </label>
        <button type="submit"></button>
    </form>




    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
