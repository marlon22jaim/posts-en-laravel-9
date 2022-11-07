<x-layouts.app :title="$post->title" :meta-description="$post->body">

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <p>Creado: {{ $post->created_at }}</p>

    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
