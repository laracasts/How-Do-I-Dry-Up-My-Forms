@extends ('layouts.app')

@section ('content')
    <article class="content">
        <h1 class="title is-1">
            {{ $post->title }}
        </h1>

        <div class="content">
            {{ $post->body }}
        </div>
    </article>

    <p>
        <a href="/posts/{{ $post->id }}/edit" class="button is-warning">Edit</a>
        <a href="/posts" class="button is-primary">Back</a>
    </p>
@stop