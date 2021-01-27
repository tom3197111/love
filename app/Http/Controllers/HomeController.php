<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\home_Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $home_Service;
    public function __construct()
    {
        // $this->middleware('auth');
        $this->home_Service = new home_Service();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){   
        $log = $this->home_Service->index();
        return view('auth.log',compact('log'));
    }
    public function ban_index(){
        $ban_index = $this->home_Service->ban_index();
        return view('auth.ban_index',compact('ban_index'));
    }
    public function register()
    {
        return view('auth.register');
    }
}
