<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Route;
 use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Alumni;
use Illuminate\Support\Facades\DB;

 class AlumniAuthController extends Controller {

 	public function login(){
 		return view('alumni.update-login');
 	}
 	public function gradlogin(){
 		return view ('alumni.form-gen-login');
 	}

 	public function dologingrad(Request $request){
 		$email = $request->input('email');
 		$idnum= $request->input('idnum');
    // Check validation
 		$checkLogin = DB::table('alumnis')->where(['email'=>$email,'idnum'=>$idnum])->get();
 		if(count($checkLogin)  > 0){

 			$alumni = DB::table('alumnis')->where('idnum', $idnum)->first();
 			//$id=$alumni->id;

 			return view("alumni.formgen",['alumni'=>$alumni]);
 		}else{
 			return redirect()->back()->with('message', ['Details you entered does not match our records']); 
 		}
 	}

 	public function dologin(Request $request){
 		$email = $request->input('email');
 		$idnum= $request->input('idnum');
    // Check validation
 		$checkLogin = DB::table('alumnis')->where(['email'=>$email,'idnum'=>$idnum])->get();
 		if(count($checkLogin)  > 0){

 			$alumni = DB::table('alumnis')->where('idnum', $idnum)->first();
 			//$id=$alumni->id;

 			return view("alumni.edit",['alumni'=>$alumni]);
 		}else{
 			return redirect()->back()->with('message', ['Details you entered does not match our records']); 
 		}
 	}
 }