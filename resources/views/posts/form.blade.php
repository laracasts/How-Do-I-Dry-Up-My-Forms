<form method="POST" action="{{ $action ?? route('posts.store') }}">
    {{ csrf_field() }}
    
    @if (isset($method))
        {{ method_field($method) }}
    @endif

    <div class="control">
        <input type="text"
               name="title"
               class="input"
               value="{{ old('title', $post->title ?? null) }}"
               placeholder="The title of your post."
               required>
    </div>

    <div class="control">
        <textarea
            name="body"
            class="textarea"
            placeholder="The body for your post">{{ old('body', $post->body ?? null) }}</textarea>
    </div>

    <button type="submit" class="button is-primary">
        {{ $submitButtonText ?? 'Create Post' }}
    </button>
</form>
