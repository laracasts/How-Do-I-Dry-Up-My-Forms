{{ csrf_field() }}

<div class="control">
    <input type="text"
           name="title"
           class="input"
           value="{{ old('title') ?? $post->title }}"
           placeholder="The title of your post."
           required>
</div>

<div class="control">
    <textarea
        name="body"
        class="textarea"
        placeholder="The body for your post">{{ old('body') ?? $post->body }}</textarea>
</div>

<button type="submit" class="button is-primary">
    {{ $submitButtonText ?? 'Create Post' }}
</button>
