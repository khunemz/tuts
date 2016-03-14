<?php
namespace App;

use Illuminate\Http\Request;

class ArticleRepository implements IArticleRepository{

    public function getall()
    {
        return 'getall';
    }

    public function getcreate()
    {
        // TODO: Implement getcreate() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function save(Request $request)
    {
        // TODO: Implement save() method.
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