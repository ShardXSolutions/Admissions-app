<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
       $admission = DB::table('admissions')->orderBy('adm', 'asc')->paginate(100);

        return view('admin',['admission' => $admission]);
    
    }

    public function search(Request $request){
        $search=$request->get('search');
        $admission=DB::table('admissions')  -> where('adm','like','%'.$search. '%' )
                                        ->orWhere('fullname','like','%' .$search.'%')
                                        ->orWhere('course','like','%'.$search.'%')
                                        ->orWhere('email','like','%'.$search.'%')
                                        ->orWhere('mobile','like','%'.$search.'%')
                                        ->orWhere('form_generated','%'.$search.'%')
                                        ->orderBy('adm', 'asc')
                                        ->paginate(20); 

            return view('admin',['admission' => $admission]);
    }
}
