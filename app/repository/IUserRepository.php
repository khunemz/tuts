<?php
namespace App;

use Illuminate\Http\Request;

interface IUserRepository {
    public function getallinfo();
    public function getsignup();
    public function getsignin();
    public function signin(Request $request);
    public function signup(Request $request);
    public function getedit($id);
    public function update(Request $request, $id);
    public function delete($id);
}