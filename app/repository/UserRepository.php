<?php
namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRepository implements IUserRepository
{

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
        return view('users.getsignin')->with([old('users')]);
    }

    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

        if(Auth::login($users)):
            flash()->success('Successfully registered');
            return redirect()->route('users.index',[
                'users' => $users
            ]);
        endif;
        flash()->warning('cannot register ,please try again');
        return redirect()->back()->withInput();
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
                   ->intended('articles');
            endif;
                return redirect()->back()->withInput();

    }

    public function getedit($id)
    {
        return view('users.edit', ['users' => User::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        if($users->save()):
            flash()->success('Update success.');
            return redirect()->route('users.index', ['users' => $users] );
        endif;
            flash()->error('Cannot update');
            return redirect()->back()->withInput();
    }

    public function signout()
    {
        if(Auth::logout()):
            flash()->success('Successfully logged out.');
            return redirect()->route('articles.index');
        endif;
        flash()->error('Cannot log out');
            return redirect()->back();

    }

    public function delete($id)
    {
        if(User::destroy($id)):
            flash()->info('Deleted users');
            return redirect()->route('articles.index');
        endif;
            flash()->warning('Connot delete account');
            return redirect()->back();

    }
}
