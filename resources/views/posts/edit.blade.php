@extends ('layouts.app')

@section ('content')
    <h1 class="title is-1">Edit Post</h1>

    @include ('posts.form', [
        'action'           => route('posts.update', ['post' => $post]),
        'method'           => 'PATCH',
        'post'             => $post,
        'submitButtonText' => 'Update Post'
    ])
@stop
