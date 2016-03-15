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
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function signin(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
