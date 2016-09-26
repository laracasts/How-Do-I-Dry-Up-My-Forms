@extends ('layouts.app')

@section ('content')
    <h1 class="title is-1">Edit Post</h1>

    <form method="POST" action="/posts/{{ $post->id }}">
        {{ method_field('PATCH') }}

        @include ('posts.form', [
            'submitButtonText' => 'Update Post'
        ])
   </form>
@stop