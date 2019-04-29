<?php
namespace App\Http\details;
use App\Http\Interfaces\ArticlesRepositryInterface;
use App\Article;

class ArticlesRepositry implements ArticlesRepositryInterface
{
  public function ReadArticle($id)
  {
  	return Article::find($id);
  }
}
