<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Es;
use App\Models\Recent;
use App\Models\Upcoming;
use Illuminate\Http\Request;

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
        $user = auth()->user();
        if(auth()->user()) {
            $sup = Es::all();
            $emp = employee::all();
            $suppliers = Es::all()->take(3);
            $employees = employee::all()->take(3);
            return view('home',compact('suppliers','employees','user','sup','emp'));
        }
        else{
            return redirect('/');
    }}
}
