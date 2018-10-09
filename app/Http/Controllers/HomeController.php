<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyService;
use App\Models\Transaction;
use DB;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if (count($user->getRoleNames()) == 0) {
            $user->syncRoles('user');
        }
        return view('home');
    }
}
