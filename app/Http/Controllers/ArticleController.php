<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all()->toArray();
        return array_reverse($articles);
    }

    public function store(Request $request) {
        $article = new Article([
            'title' => $request->input('title'), 
            'content' => $request->input('content')
        ]);
        $article->save();
        return response()->json('New article created!');
    }

    public function show($id) {
        $article = Article::find($id);
        return response()->json($article);
    }

    public function update($id, Request $request) {
        $article = Article::find($id);
        $article->update([
            'title' => $request->input('title'), 
            'content' => $request->input('content')
        ]);
        return response()->json('Article updated!');
    }

    public function destroy($id) {
        $article = Article::find($id);
        $article->delete();
        return response()->json('Article deleted!');
    }
}
