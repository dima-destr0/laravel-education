<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function deleteArticle(ArticleRequest $req) {

        $article = Article::find($req->input('article_id'));

        if (is_null($article)) {
            return redirect()->route("home")->with("message", "Article is not found!");
        }
        $article->delete();
        return redirect()->route("home")->with("message", "Article is soft deleted!");
    }
}
