<x-layouts.app :title="$post->title" :meta-description="$post->body">

    <h1>Formulario de edición</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf @method("PATCH")
        @include('posts.form-fields')
        <button type="submit">
            Editar
        </button>

    </form>

    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
