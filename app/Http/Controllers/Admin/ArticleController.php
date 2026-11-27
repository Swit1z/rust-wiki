<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
}

use App\Models\Article;


public function index()
{
    $articles = Article::latest()->paginate(10);
    return view('admin.articles.index', compact('articles'));
}

public function create()
{
    return view('admin.articles.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:articles,slug',
        'content' => 'required',
        'image' => 'nullable|image|max:2048',
    ]);

    $data = $request->all();
    $data['user_id'] = auth()->id();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('articles', 'public');
    }

    Article::create($data);

    return redirect()->route('admin.articles.index')->with('success', 'Статья создана!');
}

public function edit(Article $article)
{
    return view('admin.articles.edit', compact('article'));
}

public function update(Request $request, Article $article)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:articles,slug,' . $article->id,
        'content' => 'required',
    ]);

    $article->update($request->all());

    return redirect()->route('admin.articles.index')->with('success', 'Статья обновлена!');
}

public function destroy(Article $article)
{
    $article->delete();
    return redirect()->route('admin.articles.index')->with('success', 'Статья удалена!');
}
