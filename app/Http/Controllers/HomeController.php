<?php
# @Date:   2020-11-07T17:33:54+00:00
# @Last modified time: 2020-11-14T17:39:41+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

    public function index(Request $request)
    {
      $user = Auth::user();
      $home = 'home';

      if($user->hasRole('admin')){
        $home = 'admin.home';
      }
      else if($user->hasRole('user')){
        $home = 'user.home';
      }

        return redirect()->route($home);
    }
}
