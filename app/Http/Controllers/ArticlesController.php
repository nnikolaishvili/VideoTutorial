<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('admin.articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticlesRequest $request)
    {
         $validatedData = $request->validated();
         Article::create($validatedData + ['user_id' => Auth::id()]);
         return redirect(route('admin.articles'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(ArticlesRequest $request, Article $article)
    {
        $validatedData = $request->validated();
        $article->update($validatedData);
        return redirect(route('admin.articles'));
    }
}
