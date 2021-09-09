<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = users::get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $users = users::create([
            'fname' => $request->post('fname'),
            'lname' => $request->post('lname')
        ]);

        return redirect(route('users.index'));
    }
    public function edit($id)
    {
        $users = users::where('id', $id)->first();

        return view('users.edit', [
            'users' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = users::findOrFail($id);

        $product->update([
            'fname' => $request->post('fname'),
            'lname' => $request->post('lname'),
        ]);


        return redirect(route('users.index'));
    }

    public function delete($id)
    {
        $product = users::findOrFail($id);
        $product->delete();


        return redirect(route('users.index'));
    }
}
