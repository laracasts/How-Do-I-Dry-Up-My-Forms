@extends ('layouts.app')

@section ('content')
    <h1 class="title is-1">Create a new Post</h1>

    <form method="POST" action="/posts">
        @include ('posts.form')
    </form>
@stop