<?php
 
namespace App\Repositories;
 
use App\Models\Article;
use App\Models\Tag;
 
class ArticleRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forArticle(Article $article)
    {
        return Article::all()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}