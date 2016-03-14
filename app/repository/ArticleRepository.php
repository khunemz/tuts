<?php
namespace App;

use Illuminate\Http\Request;

class ArticleRepository implements IArticleRepository{

    public function getall()
    {
        return view('articles.index',
            [
                'articles' => Article::orderby('created_at', 'decs')->get()
            ]);
    }

    public function getcreate()
    {
        return view('articles.create');
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function save(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        if($article->save()):
            flash()->success('Posted!!');
            return redirect()->route('articles.show',
                [
                    'article'=> $article
                ]);
        endif;
            return redirect()->back()->withInput();


    }

    public function getedit($id)
    {
        // TODO: Implement getedit() method.
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}