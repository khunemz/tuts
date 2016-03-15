<?php
namespace App;

use Illuminate\Http\Request;

class UserRepository implements IUserRepository{


    public function getallinfo($id)
    {
        $users = User::findOrFail($id);
        if($users):
            flash()->success('Hello '.$users);
            return view('users.index')->with(
                [
                    'users'=> $users
                ]);
        endif;
        flash()->error('Cannot get users.');
            return redirect('articles');
    }

    public function getsignup()
    {
        return view('users.create');
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
