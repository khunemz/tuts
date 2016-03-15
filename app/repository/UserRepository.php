<?php
namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('users.create')->with([old('users')]);
    }

    public function getsignin()
    {
        return view('users.signin')->with([old('users')]);
    }

    public function signin(Request $request)
    {
        $remember_token = $request->has('remember_token')? true : false;
        if(Auth::attempt([
            'user' => $request->email,
            'password' => $request->password
        ], $remember_token)):
            flash()->success('Successful signin');
            return redirect()
               ->intended('/articles');
        endif;
            return redirect()->back()->withInput();

    }

    public function store(Request $request)
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
