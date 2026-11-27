@extends('admin.layouts.app')

@section('content')
<h1>Панель управления</h1>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Статей</h5>
                <p class="card-text display-4">{{ $articlesCount }}</p>
                <a href="{{ route('admin.articles.index') }}" class="btn btn-primary">Управление статьями</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Пользователей</h5>
                <p class="card-text display-4">{{ $usersCount }}</p>
            </div>
        </div>
    </div>
</div>
@endsection