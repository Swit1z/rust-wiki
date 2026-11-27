@extends('admin.layouts.app')

@section('content')
<h1>Добавить статью</h1>

<form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
        <label class="form-label">Заголовок</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Slug (URL)</label>
        <input type="text" name="slug" class="form-control" required>
        <small class="text-muted">Например: mehanika-igre</small>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Контент</label>
        <textarea name="content" class="form-control" rows="10" required></textarea>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Изображение</label>
        <input type="file" name="image" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Создать</button>
    <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Отмена</a>
</form>
@endsection