<?php
namespace App;

use Illuminate\Http\Request;

interface IArticleRepository {
    public function getall();
    public function getcreate();
    public function getById($id);
    public function save(Request $request);
    public function getedit($id);
    public function update(Request $request, $id);
    public function delete($id);
}