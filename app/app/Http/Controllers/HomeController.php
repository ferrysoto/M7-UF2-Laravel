<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function users() {
      $users = User::get();

      return view('users', compact('users'));
    }

    public function user($id) {
      $user = User::where('id', $id)->first();

      return view('user', compact('user'));
    }

    public function userUpdate(Request $request) {

      $user = User::where('id', $request->id)->first();

      User::where('id', $user->id)->update([
        'name'     => $request['name'],
        'email'    => $request['email'],
        'is_admin' => $request['is_admin'],
      ]);

      return redirect()->route('users');
    }

    public function userRemove($id) {
      if (User::where('id', $id)->delete()) {
        return back()->with('message', 'Delete success');
      }
    }

}
