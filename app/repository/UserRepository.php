<?php
namespace App;

use Illuminate\Http\Request;

class UserRepository implements IUserRepository{


    public function getallinfo()
    {
        return view('users.index');
    }

    public function getsignup()
    {
        // TODO: Implement getsignup() method.
    }

    public function getsignin()
    {
        // TODO: Implement getsignin() method.
    }

    public function signin(Request $request)
    {
        // TODO: Implement signin() method.
    }

    public function signup(Request $request)
    {
        // TODO: Implement signup() method.
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
