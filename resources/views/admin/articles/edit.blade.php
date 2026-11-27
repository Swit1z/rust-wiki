@extends('admin.layouts.app')

@section('content')
<h1>Редактировать статью</h1>

<form action="{{ route('admin.articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label class="form-label">Заголовок</label>
        <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ $article->slug }}" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Контент</label>
        <textarea name="content" class="form-control" rows="10" required>{{ $article->content }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Обновить</button>
    <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Отмена</a>
</form>
@endsection