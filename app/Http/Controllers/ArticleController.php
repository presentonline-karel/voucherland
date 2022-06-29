<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;

class ArticleController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var ArticleRepository
     */
    protected $articles;

    /**
     * Create a new controller instance.
     *
     * @param  ArticleRepository  $articles
     * @return void
     */

    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function index(Request $request)
    {
        $articles = Article::all();

        return view('website.articles', [
            'articles' => $articles,
        ]);
    }

    public function detail(ArticleRepository $articles, Article $article)
    {
        return view('website.article', [
            "article" => $article,
        ]);
    }
}
