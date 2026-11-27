@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Статьи</h1>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-success">Добавить статью</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Slug</th>
            <th>Дата</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @forelse($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->slug }}</td>
            <td>{{ $article->created_at->format('d.m.Y') }}</td>
            <td>
                <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-warning">Редактировать</a>
                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Статей пока нет</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $articles->links() }}
@endsection