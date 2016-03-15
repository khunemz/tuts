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
       return view('articles.show', [
           'articles' => Article::findOrFail($id)
       ]);
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
            flash()->error('Error , please try again.');
            return redirect()->back()->withInput();


    }

    public function getedit($id)
    {
        return view('articles.edit', [
            'articles' => Article::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $articles = new Article();
        $articles->title = $request->title;
        $articles->body = $request->body;
        if($articles->save()):
            flash()->success('Success fully updated.');
            return redirect()->route('articles.show', [
                'articles' => $articles
            ]);
        endif;
            flash()->error('Cannot update, please try again.');
            return redirect()->back()->withInput();
    }

    public function delete($id)
    {
        if(Article::destroy($id)):
            flash()->success('Sucessfully deleted.');
            return redirect()->route('articles.index');
        endif;
            flash()->warning('Cannot delete.');
            return redirect()->back();
    }
}