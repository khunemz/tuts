<?php

namespace App\Http\Controllers;

use App\IUserRepository;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    protected $repo;

    public function __construct (IUserRepository $repo){
        $this->repo = $repo;
        $this->middleware('user');
    }

    public function index($id)
    {
        return $this->repo->getallinfo($id);
    }


    public function create()
    {
        return $this->repo->getsignup();
    }

    public function getsignin()
    {
        return $this->repo->getsignin();
    }

    public function store(Request $request)
    {
        return $this->repo->store($request);
    }

    public function signin(Request $request)
    {
        return $this->repo->signin($request);
    }

    public function edit($id)
    {
        return $this->repo->getedit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->repo->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->repo->delete($id);
    }
}
