@extends ('layouts.app')

@section ('content')
    @foreach ($posts as $post)
        <article class="box">
            <h2 class="title is-4">
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h2>

            <div class="content">
                {{ $post->body }}
            </div>
        </article>
    @endforeach
@stop