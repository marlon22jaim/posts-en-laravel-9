<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog">

    <h1>Create new Post</h1>

    {{-- @dump($errors->all()) --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title<br>
            <input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>
        <label>
            Body<br>
            <textarea name="body">{{ old('body') }}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label><br>

        <button type="submit">
            Enviar
        </button>
    </form>




    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
